<template>
  <div v-if="data">
    <div v-for="(eventGroup, month) in data" :key="date">
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
import { watchEffect } from 'vue';
import Event from '../components/Event.vue';
import Skeleton from '../components/Skeleton.vue';
// import { events } from '../store';
import { useTournaments } from '../hooks/api.js';

const { data, error } = useTournaments();

watchEffect(() => {
  if (data.value) {
    const grouped = {};
    data.value.forEach((event) => {
      const transformedDate = transformDate(new Date(event.start_date));
      if (grouped.hasOwnProperty(transformedDate)) {
        grouped[transformedDate].push(event);
      } else {
        grouped[transformedDate] = [event];
      }
    });
    data.value = grouped;
  }
});

function transformDate(date) {
  const options = {
    year: 'numeric',
    month: 'long',
  };

  return date.toLocaleDateString('de-DE', options);
}

// console.log(data.value, error);
</script>
