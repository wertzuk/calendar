<template>
    <form action="/tournaments" method="POST"></form>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import Layout from "../Layout.vue";

const props = defineProps({ tournament: Object });
</script>

<style lang="scss" scoped></style>
