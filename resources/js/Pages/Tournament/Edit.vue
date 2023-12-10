<template>
    <div class="my-4">
        <ButtonLink href="/tournaments" class="border">Zurück</ButtonLink>
    </div>

    <FormPrimary :tournament="tournament" method="put"></FormPrimary>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import Layout from "../Layout.vue";
import ButtonLink from "../Components/ButtonLink.vue";
import FormPrimary from "../Components/FormPrimary.vue";

const props = defineProps({ tournament: Object });
</script>

<style lang="scss" scoped></style>
