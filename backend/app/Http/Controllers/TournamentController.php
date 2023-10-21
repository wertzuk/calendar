<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function retrieveAll(Request $request) {
        $tournaments = [];
        if ($request->query('sort')) {
            // TODO: create enum for all possible sort values
            $sorting = $request->query('sort');
            if($sorting === 'desc') {
                $tournaments = Tournament::orderByDesc('start_date')->get();
            }
        }
        else {
            $tournaments = Tournament::all();
        }

        return response()->json($tournaments);
    }

    public function find(Tournament $tournament) {
        return response()->json($tournament);
    }
}
