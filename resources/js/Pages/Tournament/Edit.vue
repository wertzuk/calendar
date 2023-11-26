<template>
    <div class="my-4">
        <ButtonPrimary href="/tournaments" class="border">Zurück</ButtonPrimary>
    </div>

    <FormPrimary :tournament="tournament"></FormPrimary>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import Layout from "../Layout.vue";
import ButtonPrimary from "../Components/ButtonPrimary.vue";
import FormPrimary from "../Components/FormPrimary.vue";

const props = defineProps({ tournament: Object });
</script>

<style lang="scss" scoped></style>
