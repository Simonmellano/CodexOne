<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('ambitos', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
            
        });

        DB::table('ambitos')->insert(
            array(
                'nombre' => 'Personas'
            )
        );

        DB::table('ambitos')->insert(
            array(
                'nombre' => 'Cuotas'
            )
        );

        DB::table('ambitos')->insert(
            array(
                'nombre' => 'Movimientos'
            )
        );

        DB::table('ambitos')->insert(
            array(
                'nombre' => 'Adquisiciones'
            )
        );

        DB::table('ambitos')->insert(
            array(
                'nombre' => 'Roturas'
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
        Schema::dropIfExists('ambitos');
    }
}
