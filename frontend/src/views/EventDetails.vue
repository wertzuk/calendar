<template>
  <div v-if="event">
    {{ event }}
  </div>
  <div v-else>Event not found</div>
</template>

<script setup>
import { ref } from 'vue';
import { useRoute } from 'vue-router';
import { events } from '../store';

const event = ref(null);
const route = useRoute();

console.log(events.value);

// event.value = events.find((event) => event.id === +route.params.id);
event.value = 23;
</script>

<style></style>
