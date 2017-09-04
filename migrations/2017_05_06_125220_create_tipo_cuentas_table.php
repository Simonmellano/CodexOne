<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tipo_cuentas', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
            
        });


        DB::table('tipo_cuentas')->insert(
            array(
                'nombre' => 'Alumno'
            )
        );

        DB::table('tipo_cuentas')->insert(
            array(
                'nombre' => 'Profesor'
            )
        );

        DB::table('tipo_cuentas')->insert(
            array(
                'nombre' => 'Proveedor'
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
        Schema::dropIfExists('tipo_cuentas');
    }
}
