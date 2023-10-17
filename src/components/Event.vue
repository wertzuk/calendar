<template>
  <section
    v-for="event in events"
    :key="event.id"
    class="shadow bg-slate-200 rounded text-slate-800 mb-8"
  >
    <header class="p-4 pb-0">
      <div class="flex gap-2">
        <div
          class="text-xl font-thin border-black/20 border-b pb-4 tracking-wider"
        >
          <span>{{ event.start_date }}</span>
          <span v-if="event.end_date"> - {{ event.start_date }}</span>
          testtestset
        </div>
      </div>
    </header>
    <div class="px-4 py-2">
      <div class="flex gap-2">
        <Tag>{{ event.category }}</Tag>
      </div>
      <h2 class="text-2xl">{{ event.name }}</h2>
      <ul class="mt-4 mb-6 font-thin">
        <li>{{ event.city }}</li>
        <li>{{ event.mode }}</li>
        <li>{{ event.time }}</li>
      </ul>
      <div class="flex justify-between">
        <button
          type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        >
          Mehr anzeigen
        </button>
      </div>
    </div>
  </section>
</template>

<script setup>
import Tag from './Tag.vue';
import { events } from '../store';
</script>

<style></style>
