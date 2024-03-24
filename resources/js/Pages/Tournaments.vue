<template>
    <div class="max-w-screen-lg mx-auto">
        <div class="flex gap-2 my-2">
            <Filter @click="setFilter(0)" :active="noFilterActive">Alle</Filter>
            <Filter @click="setFilter(1)" :active="classicalFilterActive"
                >Klassisch</Filter
            >
            <Filter @click="setFilter(2)" :active="rapidFilterActive"
                >Schnellschach</Filter
            >
            <Filter @click="setFilter(3)" :active="blitzFilterActive"
                >Blitz</Filter
            >
        </div>
        <div v-if="filtered.length > 0">
            <div v-for="(group, month) in groupedTournaments" :key="date">
                <div class="py-4 opacity-80">
                    <h1 class="text-2xl font-bold dark:text-white">
                        {{ month }}
                    </h1>
                </div>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <section
                        v-for="tournament in group"
                        :key="tournament.id"
                        class="mb-8"
                    >
                        <TournamentCard
                            :tournament="tournament"
                        ></TournamentCard>
                    </section>
                </div>
            </div>
        </div>
        <div class="mt-4" v-else>Keine Turniere gefunden!</div>
    </div>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import { computed, ref } from 'vue';
import Layout from './Layout.vue';
import TournamentCard from './Components/TournamentCard.vue';
import ButtonLink from './Components/ButtonLink.vue';
import Filter from './Components/Filter.vue';

const props = defineProps({ tournaments: Object });

const filter = ref(0);

const classicalFilterActive = ref(false);
const rapidFilterActive = ref(false);
const blitzFilterActive = ref(false);
const noFilterActive = ref(true);

function setFilter(filterCode) {
    filter.value = filterCode;
    classicalFilterActive.value = filterCode === 1;
    rapidFilterActive.value = filterCode === 2;
    blitzFilterActive.value = filterCode === 3;
    noFilterActive.value = filterCode === 0;
}

const filtered = computed(() => {
    if (filter.value === 0) {
        return props.tournaments;
    }
    if (filter.value === 1) {
        return props.tournaments.filter((t) => t.chess_type === 'Klassisch');
    }
    if (filter.value === 2) {
        return props.tournaments.filter(
            (t) => t.chess_type === 'Schnellschach'
        );
    }
    if (filter.value === 3) {
        return props.tournaments.filter((t) => t.chess_type === 'Blitz');
    }
});

const groupedTournaments = computed(() => groupTournaments(filtered.value));

/**
 * Group tournaments by month
 *
 * @param {array} tournaments
 */
function groupTournaments(tournaments) {
    const grouped = {};
    tournaments.forEach((event) => {
        const transformedDate = transformDate(new Date(event.start_date));
        if (grouped.hasOwnProperty(transformedDate)) {
            grouped[transformedDate].push(event);
        } else {
            grouped[transformedDate] = [event];
        }
    });
    return grouped;
}

function transformDate(date) {
    const options = {
        year: 'numeric',
        month: 'long',
    };

    return date.toLocaleDateString('de-DE', options);
}
</script>

<style lang="scss" scoped></style>
