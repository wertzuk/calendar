<template>
    <header
        class="p-6 bg-gray-100 dark:bg-gray-900 dark:text-gray-300 flex justify-between fixed w-full z-10"
    >
        <p class="text-2xl lg:text-3xl font-bolder">Turnierkalender</p>
        <div class="" @click="menuActive = !menuActive">
            <IconHamburger v-if="!menuActive" />
            <IconClose v-else />
        </div>
        <Menu :isActive="menuActive" class=""></Menu>
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
