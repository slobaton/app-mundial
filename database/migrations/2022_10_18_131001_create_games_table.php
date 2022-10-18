<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stadium_id')
                ->constrained('stadiums');
            $table->foreignId('team1_id')
                ->constrained('teams')
                ->nullable();
            $table->foreignId('team2_id')
                ->constrained('teams')
                ->nullable();
            $table->date('date');
            $table->json('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
