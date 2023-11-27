<template>
    <form>
        <div>
            <InputField name="name" :value="tournament?.name" minlength="5">
                Turnier
            </InputField>
            <InputField name="format" :value="tournament?.format">
                Turnierform
            </InputField>
            <InputField name="time_control" :value="tournament?.time_control">
                Zeitkontrolle
            </InputField>
            <InputField name="chess_type" :value="tournament?.chess_type">
                Kategorie
            </InputField>
            <InputField
                type="date"
                name="start_date"
                :value="tournament?.start_date"
            >
                Startdatum
            </InputField>
            <InputField
                type="date"
                name="end_date"
                :value="tournament?.end_date"
            >
                Enddatum
            </InputField>
            <InputField
                name="organizer"
                :value="tournament?.organizer"
                :required="false"
            >
                Ausrichter
            </InputField>
            <InputField name="street" :value="tournament?.street">
                Straße
            </InputField>
            <InputField name="plz" :value="tournament?.plz" :isRequired="false">
                PLZ
            </InputField>
            <InputField name="city" :value="tournament?.city"> Ort </InputField>
            <InputField
                name="chess_results_link"
                :value="tournament?.chess_results_link"
                :isRequired="false"
            >
                chess-results Link
            </InputField>
        </div>
        <button>Submit</button>
    </form>
</template>

<script setup>
import InputField from "./InputField.vue";

defineProps({ tournament: Object });
</script>
