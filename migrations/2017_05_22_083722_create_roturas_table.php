<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roturas', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('adquisicion_id')->unsigned();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->integer('estado_id')->unsigned()->default(12);
            //Una vez arreglada, los siguientes campos se llenan
            $table->integer('costoArreglo')->nullable();
            $table->string('responsableArreglo')->nullable();
            $table->text('observaciones')->nullable();
            //Mi created_at sería cuando generé la rotura y mi updated_at sería cuando la arreglé
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
        Schema::dropIfExists('roturas');
    }
}
