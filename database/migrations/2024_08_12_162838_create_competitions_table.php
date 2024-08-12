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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('competition_name');
            $table->enum('competition_type', ['League', 'Team Knockout Cup', 'Singles Cup', 'Pairs Cup']);
            $table->foreignId('season_id')->constrained()->onDelete('cascade'); // SeasonID
            $table->date('start_date');
            $table->date('end_date');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};
