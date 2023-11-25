<template>
  <div v-if="isFetching">Loading</div>
  <div v-else>
    <h1>{{ data }}</h1>
  </div>
</template>

<script setup>
import { ref, watch, watchEffect } from 'vue';
import { useRoute } from 'vue-router';
import { events } from '../store';
import { useFetch } from '@vueuse/core';

const route = useRoute();

// Trigger the refetch on manual path parameter change as well

const { data, isFetching } = await useFetch(
  `${import.meta.env.VITE_BASE_URL}/tournaments/${route.params.id}`,
);
</script>

<style></style>
