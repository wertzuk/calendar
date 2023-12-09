<template>
    <div class="mb-6">
        <label
            :for="name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            :class="{ required: isRequired }"
        >
            <slot />
        </label>
        <input
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            :type="type"
            :id="name"
            :name="name"
            :modelValue="value"
            :minlength="minlength"
            :maxlength="maxlength"
            :min="min"
            :max="max"
            :size="size"
            onfocus="if(type === 'date') this.showPicker()"
            :required="isRequired"
            @input="$emit('update:modelValue', $event.target.value)"
        />
    </div>
</template>

<script setup>
defineProps({
    type: {
        type: String,
        default: "text",
    },
    name: String,
    value: String,
    isRequired: {
        type: Boolean,
        default: true,
    },
    minlength: String,
    maxlength: String,
    min: String,
    max: String,
    size: String,
});

defineEmits(["update:modelValue"]);
</script>

<style>
.required:after {
    content: " *";
    color: red;
}
</style>
