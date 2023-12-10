<template>
    <form method="post" @submit.prevent="submit" :action="submitURL">
        <input
            type="hidden"
            name="_token"
            :value="this.$page.props.csrf_token"
        />
        <input
            v-if="method === 'put'"
            type="hidden"
            name="_method"
            value="put"
        />
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
                name="time_control"
                :modelValue="tournament?.time_control"
                v-model="form.time_control"
            >
                Zeitkontrolle
            </InputField>
            <InputSelect
                name="chess_type"
                v-model="form.chess_type"
                :options="['Klassisch', 'Schnellschach', 'Blitz']"
                :value="tournament?.chess_type"
            >
                Kategorie
            </InputSelect>
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
                name="city"
                :modelValue="tournament?.city"
                v-model="form.city"
            >
                Ort
            </InputField>
            <InputField
                name="number_of_rounds"
                type="number"
                min="1"
                :isRequired="false"
                :modelValue="tournament?.number_of_rounds"
                v-model="form.number_of_rounds"
            >
                Anzahl Runden
            </InputField>
            <InputField
                name="format"
                :modelValue="tournament?.format"
                v-model="form.format"
                :isRequired="false"
            >
                Turniersystem
            </InputField>
            <InputField
                name="starting_fee"
                :modelValue="tournament?.starting_fee"
                v-model="form.starting_fee"
                :isRequired="false"
            >
                Startgeld
            </InputField>
            <InputField
                name="prize_fund"
                :modelValue="tournament?.prize_fund"
                v-model="form.prize_fund"
                :isRequired="false"
            >
                Preisfonds
            </InputField>
            <InputField
                name="organizer"
                :modelValue="tournament?.organizer"
                :isRequired="false"
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
        <ButtonPrimary>Submit</ButtonPrimary>
    </form>
</template>

<script setup>
import axios from "axios";
import InputField from "./InputField.vue";
import InputSelect from "./InputSelect.vue";
import ButtonPrimary from "./ButtonPrimary.vue";
import { reactive, ref } from "vue";

const props = defineProps({
    tournament: Object,
    method: {
        validator(value) {
            // The value must match one of these strings
            return ["post", "put"].includes(value);
        },
    },
});

let submitURL = "/tournaments";
if (props.method === "put") {
    submitURL = `/tournaments/${props.tournament.id}`;
}

const form = ref({});

const startDate = ref();

async function submit(e) {
    // TODO: some additional validation

    e.target.submit();
}
</script>
