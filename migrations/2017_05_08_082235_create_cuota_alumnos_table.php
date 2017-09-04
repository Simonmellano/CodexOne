<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuotaAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuota_alumnos', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('persona_id')->unsigned();
            
            $table->integer('cuota_id')->unsigned();
            
            $table->integer('estado_id')->unsigned()->default(3);
            
            $table->date('fechaVencimiento');
            $table->tinyinteger('noAsistio')->default('0');
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
        Schema::dropIfExists('cuota_alumnos');
    }
}
