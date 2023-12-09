<template>
    <div class="mb-6">
        <label
            :for="name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required"
        >
            <slot />
        </label>
        <select
            :id="name"
            :name="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
            @input="$emit('update:modelValue', $event.target.value)"
        >
            <option disabled value="" selected="selected">
                Bitte auswählen
            </option>
            <option value="0">Klassisch</option>
            <option value="1">Schnellschach</option>
            <option value="2">Blitz</option>
        </select>
    </div>
</template>

<script setup>
defineProps({
    name: String,
});

defineEmits(["update:modelValue"]);
</script>

<style scoped>
.required:after {
    content: " *";
    color: red;
}
</style>
