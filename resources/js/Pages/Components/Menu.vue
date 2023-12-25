<template>
    <nav
        v-if="isActive"
        class="absolute top-full left-0 w-full z-20 bg-white border-gray-200 dark:bg-gray-950 dark:text-white rounded-lg overflow-hidden font-medium"
    >
        <div class="w-full md:block md:w-auto">
            <ul
                class="font-medium flex flex-col p-4 dark:bg-gray-950 text-center"
            >
                <!-- md:p-0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white -->
                <li class="border-b-2 pb-4 border-white/10">
                    <a href="#">Login</a>
                </li>
                <li class="border-b-2 py-4 border-white/10">
                    <a href="/tournaments/create">Turnier erstellen</a>
                </li>
                <li class="pt-4">Account</li>
            </ul>
        </div>
    </nav>
</template>

<script setup>
import { ref } from 'vue';

defineProps({ isActive: Boolean });
</script>

<style lang="scss" scoped></style>
