<template>
  <!-- Skeleton should reflect the Event component structure -->
  <div
    class="p-4 border border-gray-200 rounded shadow animate-pulse mt-4"
    v-for="n in 4"
    :key="n"
  >
    <header class="">
      <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
    </header>

    <div class="pt-6">
      <div class="flex gap-2">
        <div
          class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"
        ></div>
      </div>
      <div
        class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"
      ></div>
      <ul class="mt-4 mb-6 font-thin">
        <li
          class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"
        ></li>
        <li
          class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"
        ></li>
        <li
          class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"
        ></li>
      </ul>
    </div>
  </div>
</template>

<script setup></script>
