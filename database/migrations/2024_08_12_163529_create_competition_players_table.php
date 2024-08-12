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
        Schema::create('competition_players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('competition_id')->constrained()->onDelete('cascade'); // CompetitionID
            $table->foreignId('player_id')->constrained()->onDelete('cascade'); // PlayerID
            $table->foreignId('team_id')->nullable()->constrained()->onDelete('cascade'); // TeamID
            $table->string('result')->nullable(); // e.g., Win, Loss
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competition_players');
    }
};
