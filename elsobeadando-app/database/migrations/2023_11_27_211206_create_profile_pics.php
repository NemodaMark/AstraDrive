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
        Schema::create('profile_pics', function (Blueprint $table) {
            $table->id();
            $table->string('jpg');
            $table->timestamps();
        });
        DB::table('profile_pics')->insert([
            ['jpg' => '01.jpg'],
            ['jpg' => '02.jpg'],
            ['jpg' => '03.jpg'],
            ['jpg' => '04.jpg'],
            ['jpg' => '05.jpg'],
            ['jpg' => '06.jpg'],
            ['jpg' => '07.jpg'],
            ['jpg' => '08.jpg'],
            ['jpg' => '09.jpg'],
            ['jpg' => '10.jpg']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_pics');
    }
};
