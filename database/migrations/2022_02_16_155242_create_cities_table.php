<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('cities')->insert([
            [
                'id'=> 1,
                'name' => 'Belgrade'
            ],
            [
                'id'=> 2,
                'name' => 'Madrid'
            ],
            [
                'id'=> 3,
                'name' => 'Rome'
            ],
            [
                'id'=> 4,
                'name' => 'London'
            ],
            [
                'id'=> 5,
                'name' => 'New York'
            ],
            [
                'id'=> 6,
                'name' => 'Paris'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
