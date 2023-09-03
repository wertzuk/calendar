<template>
  <header class="p-6 shadow-lg">
    <p class="text-3xl text-center font-bolder">Turnierkalender</p>
  </header>
  <main class="p-4 text-gray-900">
    <h1 class="text-6xl my-8 font-serif">Januar</h1>
    <Event />
  </main>
</template>

<script setup>
import Event from './components/Event.vue';
</script>
