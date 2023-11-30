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
    Schema::create('users_cars', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('userID');
        $table->unsignedBigInteger('carID');
        $table->unsignedBigInteger('fuelID');
        $table->unsignedBigInteger('chassiID');
        $table->timestamps();

        // Correct the foreign key reference to 'cars' table
        $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('carID')->references('id')->on('cars')->onDelete('cascade');

        $table->foreign('fuelID')->references('id')->on('fuels')->onDelete('cascade');
        $table->foreign('chassiID')->references('id')->on('chassis')->onDelete('cascade');
    });
}




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_cars', function (Blueprint $table) {
            $table->dropForeign(['userID']);
            $table->dropForeign(['carID']);
            $table->dropForeign(['fuelID']);
            $table->dropForeign(['chassiID']);
        });

        Schema::dropIfExists('users_cars');
    }

};
