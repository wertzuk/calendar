<template>
  <h1 class="text-6xl my-8 font-serif">Januar</h1>
  <div v-if="data">
    <section
      v-for="event in data"
      :key="event.id"
      class="shadow bg-slate-200 rounded text-slate-800 mb-8"
    >
      <Event :event="event"></Event>
    </section>
  </div>
  <div v-if="error">Etwas ist schiefgelaufen!</div>
</template>

<script setup>
import Event from '../components/Event.vue';
import { events } from '../store';
import { useTournaments } from '../hooks/api.js';

const { data, error } = useTournaments();
// console.log(data.value, error);
</script>
