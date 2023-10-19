<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function retrieveAll() {
        $tournaments = Tournament::all();
        return response()->json($tournaments);
    }
}
