<template>
    <form>
        <div>
            <InputText name="name" :value="tournament?.name">
                Turnier
            </InputText>
            <InputText name="format" :value="tournament?.format">
                Turnierform
            </InputText>
            <InputText name="time_control" :value="tournament?.time_control">
                Zeitkontrolle
            </InputText>
            <InputText name="chess_type" :value="tournament?.chess_type">
                Kategorie
            </InputText>
            <InputText
                name="organizer"
                :value="tournament?.organizer"
                :required="false"
            >
                Ausrichter
            </InputText>
            <InputText name="street" :value="tournament?.street">
                Straße
            </InputText>
            <InputText name="plz" :value="tournament?.plz" :required="false">
                PLZ
            </InputText>
            <InputText name="city" :value="tournament?.city"> Ort </InputText>
            <InputText
                name="chess_results_link"
                :value="tournament?.chess_results_link"
                :required="false"
            >
                chess-results Link
            </InputText>
        </div>
    </form>
</template>

<script setup>
import InputText from "./InputText.vue";

defineProps({ tournament: Object });
</script>
