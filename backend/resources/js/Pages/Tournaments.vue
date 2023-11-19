<template>
    <Layout>
        <div class="text-3xl">Events</div>
        {{ tournaments }}
    </Layout>
</template>

<script setup>
import Layout from "./Layout.vue";

const props = defineProps({ tournaments: Object });
</script>

<style lang="scss" scoped></style>
