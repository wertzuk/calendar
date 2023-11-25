<template>
  <div v-if="event">
    <header class="p-4 pb-0">
      <div class="flex gap-2">
        <div
          class="text-xl font-thin border-black/20 border-b pb-4 tracking-wider"
        >
          <span>{{ event.start_date }}</span>
          <span v-if="event.end_date"> - {{ event.end_date }}</span>
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
        <router-link
          :to="`/events/${event.id}`"
          class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2"
        >
          Mehr anzeigen
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup>
import Tag from './Tag.vue';

const props = defineProps({ event: Object });

// function transformDate(date) {
//   const options = {
//     weekday: 'long',
//     year: 'numeric',
//     month: 'long',
//     day: 'numeric',
//   };

//   return date.toLocaleDateString('de-DE', options);
// }
</script>

<style></style>
