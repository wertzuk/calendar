<template>
    <div>
        <div class="mb-4">
            <ButtonPrimary href="tournaments/create">
                Turnier erstellen
            </ButtonPrimary>
        </div>
        <div v-if="tournaments.length > 0">
            <div v-for="(group, month) in groupedTournaments" :key="date">
                <div class="py-4 opacity-80">
                    <h1 class="text-2xl font-bold dark:text-white">
                        {{ month }}
                    </h1>
                </div>
                <section
                    v-for="tournament in group"
                    :key="tournament.id"
                    class="mb-8"
                >
                    <TournamentCard :tournament="tournament"></TournamentCard>
                </section>
            </div>
        </div>
        <div v-else>Keine Turniere gefunden!</div>
    </div>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import { computed } from "vue";
import Layout from "./Layout.vue";
import TournamentCard from "./Components/TournamentCard.vue";
import ButtonPrimary from "./Components/ButtonPrimary.vue";

const props = defineProps({ tournaments: Object });

const groupedTournaments = computed(() => groupTournaments(props.tournaments));

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
        year: "numeric",
        month: "long",
    };

    return date.toLocaleDateString("de-DE", options);
}
</script>

<style lang="scss" scoped></style>
