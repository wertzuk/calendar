<template>
  <div v-if="data">
    <h1 class="text-5xl my-8 font-serif">Januar</h1>
    <section
      v-for="event in data"
      :key="event.id"
      class="shadow bg-slate-200 rounded text-slate-800 mb-8"
    >
      <Event :event="event"></Event>
    </section>
  </div>

  <Skeleton v-else />
  <div v-if="error">Etwas ist schiefgelaufen!</div>
</template>

<script setup>
import Event from '../components/Event.vue';
import Skeleton from '../components/Skeleton.vue';
import { events } from '../store';
import { useTournaments } from '../hooks/api.js';

const { data, error } = useTournaments();
// console.log(data.value, error);
</script>
