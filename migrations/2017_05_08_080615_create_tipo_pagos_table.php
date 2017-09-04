<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tipo_pagos', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
            
        });


        DB::table('tipo_pagos')->insert(
            array(
                'nombre' => 'Adelanto'
            )
        );

        DB::table('tipo_pagos')->insert(
            array(
                'nombre' => 'Pago Sueldo'
            )
        );

        DB::table('tipo_pagos')->insert(
            array(
                'nombre' => 'Luz'
            )
        );

        DB::table('tipo_pagos')->insert(
            array(
                'nombre' => 'Gas'
            )
        );

        DB::table('tipo_pagos')->insert(
            array(
                'nombre' => 'Alquiler'
            )
        );

        DB::table('tipo_pagos')->insert(
            array(
                'nombre' => 'Otros'
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
        Schema::dropIfExists('tipo_pagos');
    }
}