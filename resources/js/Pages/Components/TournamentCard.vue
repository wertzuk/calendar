<template>
    <div>
        <header class="p-4 pb-0">
            <div class="flex gap-2">
                <div
                    class="text-xl font-thin border-black/20 border-b pb-4 tracking-wider"
                >
                    <span>{{ tournament.start_date }}</span>
                    <span v-if="tournament.end_date">
                        - {{ tournament.end_date }}</span
                    >
                </div>
            </div>
        </header>

        <div class="px-4 py-2">
            <div class="flex gap-2">
                <Tag>{{ tournament.chess_type }}</Tag>
            </div>
            <h2 class="text-2xl">{{ tournament.name }}</h2>
            <ul class="mt-4 mb-6 font-thin">
                <li>{{ tournament.city }}</li>
                <li>{{ tournament.format }}</li>
                <li>{{ tournament.time_control }}</li>
            </ul>
            <div class="flex justify-between">
                <ButtonPrimary :href="`/tournaments/${tournament.id}`">
                    Mehr anzeigen
                </ButtonPrimary>
                <ButtonPrimary :href="`tournaments/${tournament.id}/edit`"
                    >Bearbeiten
                </ButtonPrimary>
            </div>
        </div>
    </div>
</template>

<script setup>
import Tag from "./Tag.vue";
import ButtonPrimary from "./ButtonPrimary.vue";

const props = defineProps({ tournament: Object });
</script>

<style></style>
