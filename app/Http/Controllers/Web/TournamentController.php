<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTournamentRequest;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Tournaments', [
            'tournaments' => Tournament::orderByDesc('start_date')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Tournament/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTournamentRequest $request)
    {
        // print_r($request->all());
        Tournament::create($request->all());
        return redirect(route('tournaments.index'));


    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $tournament = Tournament::findOrFail($id);
        return Inertia::render('Tournament/Show', [
            'tournament' => $tournament
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $tournament = Tournament::findOrFail($id);
        return Inertia::render('Tournament/Edit', [
            'tournament' => $tournament
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $tournament = Tournament::findOrFail($id);
        $tournament->update($request->all());
        return redirect(route('tournaments.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
