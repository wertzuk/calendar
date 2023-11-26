<template>
    <a href="/tournaments" class="border">Zurück</a>

    <div>
        <div v-for="(item, key) in tournament" :key="key">
            <span>{{ key }}</span>
            <span class="ml-8 text-sm">{{ item }}</span>
        </div>
    </div>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import Layout from "../Layout.vue";

const props = defineProps({ tournament: Object });
</script>

<style lang="scss" scoped></style>
