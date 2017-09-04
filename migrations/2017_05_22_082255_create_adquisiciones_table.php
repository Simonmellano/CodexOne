<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdquisicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adquisiciones', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->integer('tipo_id')->unsigned();
            $table->integer('costo');
            $table->integer('cuenta_id')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned()->default('9');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adquisiciones');
    }
}
