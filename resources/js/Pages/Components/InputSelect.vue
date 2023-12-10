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
            :required="isRequired"
        >
            <option disabled value="" selected="selected">
                Bitte auswählen
            </option>
            <option
                v-for="option in options"
                :key="option"
                :selected="option === value"
                :value="option"
            >
                {{ option }}
            </option>
        </select>
    </div>
</template>

<script setup>
const props = defineProps({
    name: String,
    value: String,
    options: Array,
    isRequired: {
        type: Boolean,
        default: true,
    },
});

defineEmits(["update:modelValue"]);
</script>

<style scoped>
.required:after {
    content: " *";
    color: red;
}
</style>
