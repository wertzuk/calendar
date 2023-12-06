<template>
    <form method="post" @submit.prevent="submit">
        <div>
            <InputField
                name="name"
                :modelValue="tournament?.name"
                minlength="5"
                v-model="form.name"
            >
                Turnier
            </InputField>
            <InputField
                name="format"
                :modelValue="tournament?.format"
                v-model="form.format"
            >
                Turnierform
            </InputField>
            <InputField
                name="time_control"
                :modelValue="tournament?.time_control"
                v-model="form.time_control"
            >
                Zeitkontrolle
            </InputField>
            <InputField
                name="number_of_rounds"
                type="number"
                min="1"
                :modelValue="tournament?.number_of_rounds"
                v-model="form.number_of_rounds"
            >
                Anzahl Runden
            </InputField>

            <InputField
                name="chess_type"
                :modelValue="tournament?.chess_type"
                v-model="form.chess_type"
            >
                Kategorie
            </InputField>
            <InputField
                type="date"
                name="start_date"
                :modelValue="tournament?.start_date"
                v-model="form.start_date"
            >
                Startdatum
            </InputField>
            <InputField
                type="date"
                name="end_date"
                :modelValue="tournament?.end_date"
                v-model="form.end_date"
            >
                Enddatum
            </InputField>
            <InputField
                name="organizer"
                :modelValue="tournament?.organizer"
                :required="false"
                v-model="form.organizer"
            >
                Ausrichter
            </InputField>
            <InputField
                name="street"
                :modelValue="tournament?.street"
                :isRequired="false"
                v-model="form.street"
            >
                Straße
            </InputField>
            <InputField
                name="plz"
                :modelValue="tournament?.plz"
                :isRequired="false"
                v-model="form.plz"
            >
                PLZ
            </InputField>
            <InputField
                name="city"
                :modelValue="tournament?.city"
                v-model="form.city"
            >
                Ort
            </InputField>
            <InputField
                name="website_link"
                :modelValue="tournament?.website_link"
                :isRequired="false"
                v-model="form.website_link"
            >
                Link zu Turnierwebseite
            </InputField>
            <InputField
                name="chess_results_link"
                :modelValue="tournament?.chess_results_link"
                :isRequired="false"
                v-model="form.chess_results_link"
            >
                chess-results Link
            </InputField>
        </div>
        <button>Submit</button>
    </form>
</template>

<script setup>
import InputField from "./InputField.vue";
import { reactive, ref } from "vue";

const form = ref({});

function submit() {
    console.log(form);
}

defineProps({ tournament: Object });
</script>
