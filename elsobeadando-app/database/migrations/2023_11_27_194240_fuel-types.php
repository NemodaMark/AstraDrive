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
        Schema::create('fuels', function (Blueprint $table) {
            $table->id();
            $table->string('fuel_name');
            $table->timestamps();
        });

        DB::table('fuels')->insert([
            ['fuel_name' => 'benzin'],
            ['fuel_name' => 'dizel'],
            ['fuel_name' => 'elektromos'],
            ['fuel_name' => 'hibrid'],
            ['fuel_name' => 'LPG']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuel_name');
    }
};
