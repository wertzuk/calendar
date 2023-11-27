<template>
    <div class="mb-6">
        <label :for="name" class="block mb-2 text-sm font-medium text-gray-900">
            <slot />
        </label>
        <input
            class="bg-gray-50 relative border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            :type="type"
            :id="name"
            :name="name"
            :value="value"
            :required="isRequired"
            onfocus="if(type === 'date') this.showPicker()"
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
});
</script>
