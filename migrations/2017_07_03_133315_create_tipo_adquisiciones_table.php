<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoAdquisicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_adquisiciones', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
            
        });


        DB::table('tipo_adquisiciones')->insert(
            array(
                'nombre' => 'Máquina'
            )
        );

        DB::table('tipo_adquisiciones')->insert(
            array(
                'nombre' => 'Barra'
            )
        );

        DB::table('tipo_adquisiciones')->insert(
            array(
                'nombre' => 'Mancuerna'
            )
        );

        DB::table('tipo_adquisiciones')->insert(
            array(
                'nombre' => 'Banco'
            )
        );

        DB::table('tipo_adquisiciones')->insert(
            array(
                'nombre' => 'Accesorios'
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
        Schema::dropIfExists('tipo_adquisiciones');
    }
}
