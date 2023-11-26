<template>
    <ButtonPrimary href="/tournaments" class="border">Zurück</ButtonPrimary>

    <form action="/tournaments" method="POST">
        <div>
            <label for="name">Turniername</label>
            <input type="text" name="name" id="name" />
        </div>
        <div>
            <label for="mode">Turnierform</label>
            <input type="text" name="mode" id="mode" />
        </div>
        <div>
            <label for="time_control">Zeitkontrolle</label>
            <input type="text" name="time_control" id="time_control" />
        </div>
        <div>
            <label for="category">Kategorie</label>
            <input type="text" name="category" id="category" />
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
            <input type="number" name="plz" id="plz" />
        </div>
        <div>
            <label for="city">Ort</label>
            <input type="text" name="city" id="city" />
        </div>
        <div>
            <label for="start_date">Datum Start</label>
            <input type="date" name="start_date" id="start_date" />
        </div>
        <div>
            <label for="end_date">Datum Ende</label>
            <input type="date" name="end_date" id="end_date" />
        </div>
    </form>
</template>

<script>
export default { layout: Layout };
</script>

<script setup>
import Layout from "../Layout.vue";
import ButtonPrimary from "../Components/ButtonPrimary.vue";
</script>

<style lang="scss" scoped></style>
