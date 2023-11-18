<template>
  <div v-if="!event">Loading</div>
  <div v-else>{{ event }}</div>
</template>

<script setup>
import { ref, watch, watchEffect } from 'vue';
import { useRoute } from 'vue-router';
import { events } from '../store';
import { useFetch } from '@vueuse/core';

const event = ref(null);
const route = useRoute();

// Trigger the refetch on manual path parameter change as well
watch(
  () => route.params.id,
  async (newId) => {
    console.log(import.meta.env.VITE_BASE_URL);
    const { data } = await useFetch(
      `${import.meta.env.VITE_BASE_URL}/tournaments/${newId}`,
    )
      .get()
      .json();

    event.value = data;
  },
  { immediate: true },
);
</script>

<style></style>
