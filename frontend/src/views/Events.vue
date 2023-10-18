<template>
  <h1 class="text-6xl my-8 font-serif">Januar</h1>
  <section
    v-for="event in events"
    :key="event.id"
    class="shadow bg-slate-200 rounded text-slate-800 mb-8"
  >
    <Event :event="event"></Event>
  </section>
  <Event />
</template>

<script setup>
import Event from '../components/Event.vue';
import { events } from '../store';
</script>
