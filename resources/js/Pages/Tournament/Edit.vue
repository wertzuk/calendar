<template>
    <div>
        <ButtonPrimary href="/tournaments" class="border">Zurück</ButtonPrimary>
    </div>

    <form action="/tournaments" method="POST">
        <form action="/tournaments" method="POST">
            <div>
                <label for="name">Turniername</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    :value="tournament.name"
                />
            </div>
            <div>
                <label for="mode">Turnierform</label>
                <input
                    type="text"
                    name="mode"
                    id="mode"
                    :value="tournament.mode"
                />
            </div>
            <div>
                <label for="time_control">Zeitkontrolle</label>
                <input
                    type="text"
                    name="time_control"
                    id="time_control"
                    :value="tournament.time"
                />
            </div>
            <div>
                <label for="category">Kategorie</label>
                <input
                    type="text"
                    name="category"
                    id="category"
                    :value="tournament.category"
                />
            </div>
            <div>
                <label for="dwz_rated">DWZ Auswertung</label>
                <input type="checkbox" name="dwz_rated" id="dwz_rated" />
            </div>
            <div>
                <label for="elo_rated">ELO Auswertung</label>
                <input type="checkbox" name="elo_rated" id="elo_rated" />
            </div>
            <div>
                <label for="street">Straße</label>
                <input type="text" name="street" id="street" />
            </div>
            <div>
                <label for="plz">PLZ</label>
                <input
                    type="number"
                    name="plz"
                    id="plz"
                    :value="tournament.location"
                />
            </div>
            <div>
                <label for="city">Ort</label>
                <input
                    type="text"
                    name="city"
                    id="city"
                    :value="tournament.city"
                />
            </div>
            <div>
                <label for="start_date">Datum Start</label>
                <input
                    type="date"
                    name="start_date"
                    id="start_date"
                    :value="tournament.start_date"
                />
            </div>
            <div>
                <label for="end_date">Datum Ende</label>
                <input
                    type="date"
                    name="end_date"
                    id="end_date"
                    :value="tournament.end_date"
                />
            </div>
        </form>
    </form>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import Layout from "../Layout.vue";
import ButtonPrimary from "../Components/ButtonPrimary.vue";

const props = defineProps({ tournament: Object });
</script>

<style lang="scss" scoped></style>
