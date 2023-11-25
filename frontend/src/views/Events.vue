<template>
  <div v-if="groupedEvents">
    <div v-for="(eventGroup, month) in groupedEvents" :key="date">
      <div class="py-4 mb-4 bg-white opacity-80">
        <h1 class="text-4xl">{{ month }}</h1>
      </div>
      <section
        v-for="event in eventGroup"
        :key="event.id"
        class="shadow bg-slate-200 rounded text-slate-800 mb-8"
      >
        <Event :event="event"></Event>
      </section>
    </div>
  </div>

  <Skeleton v-else />
  <div v-if="error">Etwas ist schiefgelaufen!</div>
</template>

<script setup>
import { ref, watchEffect } from 'vue';
import Event from '../components/Event.vue';
import Skeleton from '../components/Skeleton.vue';
import { events } from '../store';
import { useTournaments } from '../hooks/api.js';

const groupedEvents = ref(null);

if (events.value.length > 0) {
  groupedEvents.value = groupTournaments(events.value);
} else {
  const { data, error } = useTournaments();

  watchEffect(() => {
    if (data.value) {
      events.value = data.value;
      groupedEvents.value = groupTournaments(events.value);
    }
  });
}
/**
 * Group tournaments by month
 *
 * @param {array} tournaments
 */
function groupTournaments(tournaments) {
  const grouped = {};
  tournaments.forEach((event) => {
    const transformedDate = transformDate(new Date(event.start_date));
    if (grouped.hasOwnProperty(transformedDate)) {
      grouped[transformedDate].push(event);
    } else {
      grouped[transformedDate] = [event];
    }
  });
  return grouped;
}

function transformDate(date) {
  const options = {
    year: 'numeric',
    month: 'long',
  };

  return date.toLocaleDateString('de-DE', options);
}
</script>
