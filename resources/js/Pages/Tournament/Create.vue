<template>
    <div class="mb-4">
        <ButtonLink href="/tournaments">Zurück</ButtonLink>
    </div>

    <FormPrimary></FormPrimary>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import Layout from "../Layout.vue";
import ButtonLink from "../Components/ButtonLink.vue";
import FormPrimary from "../Components/FormPrimary.vue";
</script>

<style lang="scss" scoped></style>
