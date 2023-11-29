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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstYear');
            $table->string('lastYear');
            $table->timestamps();
        });

        DB::table('cars')->insert([
            ['name' => 'GT', 'firstYear' => '1968', 'lastYear' => '1973'],
            ['name' => 'GT(re)', 'firstYear' => '2006', 'lastYear' => '2009'],
            ['name' => 'Ascona', 'firstYear' => '1970', 'lastYear' => '1988'],
            ['name' => 'Manta', 'firstYear' => '1970', 'lastYear' => '1988'],
            ['name' => 'Bedford Blitz', 'firstYear' => '1973', 'lastYear' => '1986'],
            ['name' => 'Monza', 'firstYear' => '1978', 'lastYear' => '1986'],
            ['name' => 'Senator', 'firstYear' => '1978', 'lastYear' => '1993'],
            ['name' => 'Vivaro', 'firstYear' => '1980', 'lastYear' => '2018'],
            ['name' => 'Chevette', 'firstYear' => '1980', 'lastYear' => '1982'],
            ['name' => 'Corsavan', 'firstYear' => '1983', 'lastYear' => '2018'],
            ['name' => 'Omega', 'firstYear' => '1986', 'lastYear' => '2003'],
            ['name' => 'Vectra', 'firstYear' => '1988', 'lastYear' => '2008'],
            ['name' => 'Calibra', 'firstYear' => '1989', 'lastYear' => '1997'],
            ['name' => 'Frontera', 'firstYear' => '1991', 'lastYear' => '2004'],
            ['name' => 'Campo', 'firstYear' => '1992', 'lastYear' => '2001'],
            ['name' => 'Monterey', 'firstYear' => '1992', 'lastYear' => '1999'],
            ['name' => 'Tigra', 'firstYear' => '1994', 'lastYear' => '2000'],
            ['name' => 'Tigra(re)', 'firstYear' => '2004', 'lastYear' => '2009'],
            ['name' => 'Sintra', 'firstYear' => '1996', 'lastYear' => '1999'],
            ['name' => 'Arena', 'firstYear' => '1997', 'lastYear' => '2001'],
            ['name' => 'Astravan', 'firstYear' => '1998', 'lastYear' => '2013'],
            ['name' => 'Zafira Tourer', 'firstYear' => '1999', 'lastYear' => '2019'],
            ['name' => 'Agila', 'firstYear' => '2000', 'lastYear' => '2015'],
            ['name' => 'Speedster', 'firstYear' => '2000', 'lastYear' => '2005'],
            ['name' => 'Meriva', 'firstYear' => '2003', 'lastYear' => '2017'],
            ['name' => 'Signum', 'firstYear' => '2003', 'lastYear' => '2008'],
            ['name' => 'Antara', 'firstYear' => '2006', 'lastYear' => '2015'],
            ['name' => 'Insignia', 'firstYear' => '2008', 'lastYear' => '2022'],
            ['name' => 'Ampera', 'firstYear' => '2011', 'lastYear' => '2015'],
            ['name' => 'Adam', 'firstYear' => '2012', 'lastYear' => '2019'],
            ['name' => 'Vivaro Tour', 'firstYear' => '2012', 'lastYear' => '2019'],
            ['name' => 'Karl', 'firstYear' => '2014', 'lastYear' => '2019'],
            ['name' => 'Ampera-e', 'firstYear' => '2017', 'lastYear' => '2019'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
