<template>
    <form method="post" @submit.prevent="submit" action="/tournaments">
        <input
            type="hidden"
            name="_token"
            :value="this.$page.props.csrf_token"
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
            <InputSelect name="chess_type" v-model="form.chess_type"
                >Kategorie</InputSelect
            >
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
        <button>Submit</button>
    </form>
</template>

<script setup>
import axios from "axios";
import InputField from "./InputField.vue";
import InputSelect from "./InputSelect.vue";
import { reactive, ref } from "vue";

const form = ref({});

const startDate = ref();

async function submit() {
    console.log(form);
    // const response = await axios.post("/tournaments");
    // form.submit();
}

defineProps({ tournament: Object });
</script>
