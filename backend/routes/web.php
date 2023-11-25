<?php

use App\Http\Controllers\Web\TournamentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TournamentController::class, 'index'])->name('index');

Route::prefix('tournaments')->group(function() {
    Route::get('/', [TournamentController::class, 'index'])->name('tournaments.index');
    Route::get('/create', [TournamentController::class, 'create'])->name('tournaments.create');
    Route::get('/{tournament}', [TournamentController::class, 'show'])->name('tournaments.show');
    Route::get('/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
    Route::post('/', [TournamentController::class, 'store'])->name('tournaments.store');
    Route::put('/{tournament}', [TournamentController::class, 'update'])->name('tournaments.update');
    Route::delete('/{tournament}', [TournamentController::class, 'destroy'])->name('tournaments.destroy');
});

 
