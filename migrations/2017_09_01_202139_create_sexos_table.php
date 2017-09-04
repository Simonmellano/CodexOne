<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sexos', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
            
        });


        DB::table('sexos')->insert(
            array(
                'nombre' => 'Masculino'
            )
        );

        DB::table('sexos')->insert(
            array(
                'nombre' => 'Femenino'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sexos');
    }
}
