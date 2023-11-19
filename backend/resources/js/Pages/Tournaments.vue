<template>
    <Layout>
        <div>
            <div v-for="(group, month) in groupedTournaments" :key="date">
                <div class="py-4 mb-4 bg-white opacity-80">
                    <h1 class="text-4xl">{{ month }}</h1>
                </div>
                <section
                    v-for="tournament in group"
                    :key="tournament.id"
                    class="shadow bg-slate-200 rounded text-slate-800 mb-8"
                >
                    <Tournament :tournament="tournament"></Tournament>
                </section>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import { computed } from "vue";
import Layout from "./Layout.vue";
import Tournament from "./Tournament.vue";

const props = defineProps({ tournaments: Object });

const groupedTournaments = computed(() => groupTournaments(props.tournaments));
console.log(groupedTournaments);

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
