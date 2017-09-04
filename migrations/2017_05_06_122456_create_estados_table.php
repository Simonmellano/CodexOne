<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('estados', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('ambito_id')->unsigned();
            $table->string('nombre');
            $table->timestamps();
            
        });

        DB::table('estados')->insert(
            array(
                'ambito_id' => '1',
                'nombre' => 'Activo'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '1',
                'nombre' => 'Inactivo'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '2',
                'nombre' => 'Pendiente de Pago'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '2',
                'nombre' => 'Paga'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '2',
                'nombre' => 'Vencida'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '2',
                'nombre' => 'Cancelada'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '3',
                'nombre' => 'Actualizado'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '3',
                'nombre' => 'Anulado'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '4',
                'nombre' => 'Funcionando'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '4',
                'nombre' => 'Rota'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '4',
                'nombre' => 'Fuera de Servicio'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '5',
                'nombre' => 'Vigente'
            )
        );

        DB::table('estados')->insert(
            array(
                'ambito_id' => '5',
                'nombre' => 'Arreglada'
            )
        );

    }


    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
