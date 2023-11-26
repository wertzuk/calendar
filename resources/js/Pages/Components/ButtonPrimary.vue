<template>
    <a
        :href="href"
        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2"
    >
        <slot />
    </a>
</template>

<script setup>
defineProps({ href: String });
</script>

<style lang="scss" scoped></style>
