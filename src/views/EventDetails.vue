<template>
  <div v-if="event">
    {{ event }}
  </div>
  <div v-else>Event not found</div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRoute } from 'vue-router';
import { events } from '../store';

const event = ref(null);
const route = useRoute();

event.value = events.find((event) => event.id === +route.params.id);
</script>

<style></style>
