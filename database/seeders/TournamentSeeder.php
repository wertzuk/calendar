<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tournament::insert([
        [
            'name' => 'GRENKE-Open',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'city' => 'Karlsruhe',
            'chess_type' => 'Klassisch',
            'time_control' => '1h 30min',
            'start_date' => '2024-04-15',
            'end_date' => '2024-04-19',
            'format' => 'Schweizer System',
            'street' => null,
            'organizer' => 'GRENKE',
            'plz' => null,
            'number_of_rounds' => 9,
            'chess_results_link' => null,
            'website_link' => null,
            'description' => null,
            'prize_fund' => null,
            'starting_fee' => null,
        ], [
            'name' => '72. Offene Osnabrücker Stadtmeisterschaft 2023',
             'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'city' => 'Osnabrück',
            'chess_type' => 'Klassisch',
            'time_control' => '2h / 40 Züge - 30 min Rest',
            'start_date' => '2024-08-18',
            'end_date' => '2024-12-08',
            'format' => 'Schweizer System',
            'street' => null,
            'organizer' => 'SG Osnabrück',
            'plz' => null,
            'number_of_rounds' => 9,
            'chess_results_link' => null,
            'website_link' => null,
            'description' => null,
            'prize_fund' => null,
            'starting_fee' => null,
        ], [
            'name' => 'Schachkreuzfahrt Portugal - Brasilien',
             'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'city' => 'Schiff Norwegian Star',
            'chess_type' => 'Klassisch',
            'time_control' => '2h / 40 Züge - 30 min Rest',
            'start_date' => '2023-11-24',
            'end_date' => '2023-12-12',
            'format' => 'Schweizer System',
            'street' => null,
            'organizer' => null,
            'plz' => null,
            'number_of_rounds' => 9,
            'chess_results_link' => null,
            'website_link' => null,
            'description' => null,
            'prize_fund' => null,
            'starting_fee' => null,
        ], [
            'name' => '17. Paderborner Schachtürken-Cup',
             'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'city' => 'Paderborn',
            'chess_type' => 'Klassisch',
            'time_control' => '90 Minuten für 40 Züge, 15 Minuten für den Rest der Partie',
            'start_date' => '2023-12-27',
            'end_date' => '2023-12-30',
            'format' => 'Schweizer System',
            'street' => 'Fürstenallee',
            'organizer' => null,
            'plz' => 33102,
            'number_of_rounds' => 7,
            'chess_results_link' => null,
            'website_link' => 'www.schachtuerken-cup.de',
            'description' => null,
            'prize_fund' => null,
            'starting_fee' => null,
        ], [
            'name' => '8. Internationales Bad Schwartauer Schachopen',
             'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'city' => 'Bad Schwartau',
            'chess_type' => 'Klassisch',
            'time_control' => '1h 30min',
            'start_date' => '2023-12-27',
            'end_date' => '2023-12-30',
            'format' => 'Schweizer System',
            'street' => 'Schulstr. 8-10',
            'organizer' => null,
            'plz' => 23611,
            'number_of_rounds' => 7,
            'chess_results_link' => null,
            'website_link' => null,
            'description' => null,
            'prize_fund' => null,
            'starting_fee' => null,
        ], [
            'name' => 'Krefelder Neujahrsopen 2024',
             'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'city' => 'Krefeld',
            'chess_type' => 'Blitz',
            'time_control' => '3+2',
            'start_date' => '2024-01-01',
            'end_date' => '2024-01-01',
            'format' => 'Schweizer System',
            'street' => null,
            'organizer' => null,
            'plz' => null,
            'number_of_rounds' => 21,
            'chess_results_link' => null,
            'website_link' => null,
            'description' => null,
            'prize_fund' => null,
            'starting_fee' => null,
        ]]);

    }
}
