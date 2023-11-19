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
                <Tag>{{ tournament.category }}</Tag>
            </div>
            <h2 class="text-2xl">{{ tournament.name }}</h2>
            <ul class="mt-4 mb-6 font-thin">
                <li>{{ tournament.city }}</li>
                <li>{{ tournament.mode }}</li>
                <li>{{ tournament.time }}</li>
            </ul>
            <div class="flex justify-between">
                <router-link
                    :to="`/events/${tournament.id}`"
                    class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2"
                >
                    Mehr anzeigen
                </router-link>
            </div>
        </div>
    </div>
</template>

<script setup>
import Tag from "./Tag.vue";

const props = defineProps({ tournament: Object });
</script>

<style></style>
