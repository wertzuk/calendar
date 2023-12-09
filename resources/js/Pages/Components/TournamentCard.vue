<template>
    <div
        class="bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
    >
        <header
            class="p-4 pb-0 border-black/20 dark:border-gray-100/20 border-b"
        >
            <div class="flex justify-between gap-2">
                <div
                    class="text-lg font-thin dark:text-white pb-4 tracking-wider"
                >
                    <span>{{ startDate }}</span>
                    <span v-if="endDate"> - {{ endDate }}</span>
                </div>
                <div class="flex gap-2">
                    <Tag>{{ tournament.chess_type }}</Tag>
                </div>
            </div>
        </header>

        <div class="px-4 py-2 dark:text-gray-100">
            <h2 class="text-2xl break-words">{{ tournament.name }}</h2>
            <ul class="mt-4 mb-6 font-thin">
                <li>{{ tournament.city }}</li>
                <li>{{ tournament.time_control }}</li>
                <!-- <li>{{ tournament.format }}</li> -->
            </ul>
            <div class="flex justify-between">
                <ButtonLink :href="`/tournaments/${tournament.id}`">
                    Mehr Infos
                </ButtonLink>
                <ButtonLink :href="`tournaments/${tournament.id}/edit`"
                    >Bearbeiten
                </ButtonLink>
            </div>
        </div>
    </div>
</template>

<script setup>
import Tag from "./Tag.vue";
import ButtonLink from "./ButtonLink.vue";

import { computed } from "vue";
const props = defineProps({ tournament: Object });

const startDate = computed(() => {
    const date = new Date(props.tournament.start_date);
    return convertDateFormatToDDMM(date);
});

const endDate = computed(() => {
    const date = new Date(props.tournament.end_date);
    return convertDateFormatToDDMM(date);
});

function convertDateFormatToDDMM(date) {
    if (!date || isNaN(date)) {
        return null;
    }

    return `${addLeadingZero(date.getDate())}.${addLeadingZero(
        date.getMonth() + 1
    )}`;
}

/**
 * Add leading zero to a number if it has exactly one digit (used to properly display dates)
 *
 * @param {number} n
 */
function addLeadingZero(n) {
    return n < 10 ? "0" + n : n;
}
</script>

<style></style>
