<template>
    <ButtonLink href="/tournaments">Zurück</ButtonLink>

    <h1 class="my-8 text-3xl text-gray-900 dark:text-gray-100">
        {{ tournament.name }}
    </h1>
    <dl
        class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700"
    >
        <div class="flex flex-col pb-3">
            <DescriptionTitle>Zeitkontrolle</DescriptionTitle>
            <DescriptionDetails>{{
                tournament.time_control
            }}</DescriptionDetails>
        </div>
        <div class="flex flex-col py-3">
            <DescriptionTitle>Kategorie</DescriptionTitle>
            <DescriptionDetails>{{ tournament.chess_type }}</DescriptionDetails>
        </div>
        <div class="flex flex-col py-3">
            <DescriptionTitle>Datum</DescriptionTitle>
            <DescriptionDetails>
                <span>{{
                    convertDateFormatToDDMMYYYY(tournament.start_date)
                }}</span>
                <span
                    v-if="
                        tournament.end_date &&
                        tournament.end_date !== tournament.start_date
                    "
                >
                    -
                    {{ convertDateFormatToDDMMYYYY(tournament.end_date) }}</span
                ></DescriptionDetails
            >
        </div>

        <div class="flex flex-col py-3">
            <DescriptionTitle>Ort</DescriptionTitle>
            <DescriptionDetails>{{ tournament.city }}</DescriptionDetails>
        </div>
        <div class="flex flex-col py-3" v-if="tournament.number_of_rounds">
            <DescriptionTitle>Anzahl der Runden</DescriptionTitle>
            <DescriptionDetails>{{
                tournament.number_of_rounds
            }}</DescriptionDetails>
        </div>
        <div class="flex flex-col py-3" v-if="tournament.format">
            <DescriptionTitle>Turniersystem</DescriptionTitle>
            <DescriptionDetails>{{ tournament.format }}</DescriptionDetails>
        </div>
        <div class="flex flex-col py-3" v-if="tournament.starting_fee">
            <DescriptionTitle>Startgeld</DescriptionTitle>
            <DescriptionDetails>{{
                tournament.starting_fee
            }}</DescriptionDetails>
        </div>
    </dl>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import ButtonLink from "../Components/ButtonLink.vue";
import DescriptionTitle from "../Components/DescriptionTitle.vue";
import DescriptionDetails from "../Components/DescriptionDetails.vue";
import Layout from "../Layout.vue";

const props = defineProps({ tournament: Object });

// TODO: Make globally available
function convertDateFormatToDDMMYYYY(oldDate) {
    const date = new Date(oldDate);
    if (!date || isNaN(date)) {
        return null;
    }

    return `${addLeadingZero(date.getDate())}.${addLeadingZero(
        date.getMonth() + 1
    )}.${date.getFullYear()}`;
}
function addLeadingZero(n) {
    return n < 10 ? "0" + n : n;
}
</script>

<style lang="scss" scoped></style>
