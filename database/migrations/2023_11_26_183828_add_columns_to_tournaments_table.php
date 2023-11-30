<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tournaments', function (Blueprint $table) {
            $table->string('format')->nullable();
            $table->string('street')->nullable();
            $table->string('organizer')->nullable();
            $table->integer('plz')->nullable();
            $table->integer('number_of_rounds')->nullable();
            $table->tinyInteger('elo_rated')->nullable();
            $table->tinyInteger('dwz_rated')->nullable();
            $table->string('chess_results_link')->nullable();
            $table->string('website_link')->nullable();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tournaments', function (Blueprint $table) {
            //
        });
    }
};
