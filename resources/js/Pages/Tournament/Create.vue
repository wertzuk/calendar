<template>
    <div class="mb-4">
        <ButtonPrimary href="/tournaments">Zurück</ButtonPrimary>
    </div>

    <FormPrimary></FormPrimary>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import Layout from "../Layout.vue";
import ButtonPrimary from "../Components/ButtonPrimary.vue";
import FormPrimary from "../Components/FormPrimary.vue";
</script>

<style lang="scss" scoped></style>
