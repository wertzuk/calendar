<template>
    <Header></Header>

    <!-- Spacer div -->
    <div class="h-[80px]"></div>

    <main class="p-4 text-gray-900 dark:text-gray-300">
        <slot />
    </main>
</template>

<script setup>
import Header from './Components/Header.vue';
</script>
