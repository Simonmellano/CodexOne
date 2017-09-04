<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('estado_id')->unsigned()->default('1');
            $table->integer('tipoCuenta_id')->unsigned();
            $table->integer('tipoDocumento_id')->unsigned()->nullable();
            $table->integer('sexo_id')->unsigned()->nullable();

            $table->integer('numDocumento')->nullable();
            
            $table->string('nombre');
            $table->string('apellido')->nullable();
            
            $table->string('domicilio')->nullable();

            $table->integer('cpostal')->nullable();
            $table->string('localidad')->nullable();
            $table->string('provincia')->nullable();
            $table->string('país')->nullable();

            $table->string('telefono')->nullable();
            $table->string('email')->unique()->nullable();

            $table->date('fechaNacimiento')->nullable();
            $table->date('fechaComienzo')->nullable();

            $table->timestamps();

        });

        DB::table('cuentas')->insert(
            array(
                'tipoCuenta_id' => '3',
                'nombre' => 'San Martino',
            )
        );

        DB::table('cuentas')->insert(
            array(
                'tipoCuenta_id' => '3',
                'nombre' => 'Musculito SA',
            )
        );

        DB::table('cuentas')->insert(
            array(
                'tipoCuenta_id' => '3',
                'nombre' => 'Fierros SRL',
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
        Schema::dropIfExists('cuentas');
    }
}
