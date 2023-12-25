<template>
    <button
        class="dark:bg-gray-950 py-3 px-4 text-white text-sm font-semibold rounded-lg mt-4 flex items-center leading-none"
        :class="{ 'dark:bg-gray-400 dark:text-gray-900': active }"
    >
        <slot />
    </button>
</template>

<script setup>
defineProps({ active: Boolean });
</script>

<style lang="scss" scoped></style>
