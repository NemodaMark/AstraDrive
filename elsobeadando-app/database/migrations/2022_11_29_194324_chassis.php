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
            Schema::create('chassis', function (Blueprint $table) {
                $table->id();
                $table->string('type');
                $table->timestamps();
            });

            DB::table('chassis')->insert([
                ['type' => 'pickup'],
                ['type' => 'terepjáró'],
                ['type' => 'buggy'],
                ['type' => 'cabrio'],
                ['type' => 'coupe'],
                ['type' => 'egyterű'],
                ['type' => 'ferdehátú'],
                ['type' => 'hot rod'],
                ['type' => 'kisbusz'],
                ['type' => 'kombi'],
                ['type' => 'lépcsőhátú'],
                ['type' => 'mopedautó'],
                ['type' => 'sedan'],
                ['type' => 'sport'],
                ['type' => 'városi terepjáró (crossover)'],
                ['type' => 'egyéb'],
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chassis');
    }
};
