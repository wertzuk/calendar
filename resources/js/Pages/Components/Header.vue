<template>
    <header
        class="p-6 shadow-lg bg-gray-100 dark:bg-gray-800 dark:text-gray-300 flex justify-between fixed w-full z-10"
    >
        <p class="text-2xl font-bolder">Turnierkalender</p>
        <div class="md:hidden" @click="menuActive = !menuActive">
            <IconHamburger v-if="!menuActive" />
            <IconClose v-else />
        </div>
        <Menu :isActive="menuActive" class="md:hidden"></Menu>
    </header>
</template>

<script setup>
import IconHamburger from './Icons/IconHamburger.vue';
import IconClose from './Icons/IconClose.vue';
import Menu from './Menu.vue';

import { ref } from 'vue';

const menuActive = ref(false);
</script>

<style lang="scss" scoped></style>
