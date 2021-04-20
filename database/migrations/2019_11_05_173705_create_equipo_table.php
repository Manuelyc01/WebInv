<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen');
            $table->timestamps();
        });

        Schema::create('equipo_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo'); 
            $table->string('subtitulo'); 
            $table->string('textoBtn');           

            $table->integer('equipo_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['equipo_id', 'locale']);
            $table->foreign('equipo_id')->references('id')->on('equipo')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('cargo', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('cargo_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');           

            $table->integer('cargo_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['cargo_id', 'locale']);
            $table->foreign('cargo_id')->references('id')->on('cargo')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('integrante', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagen');
            $table->text('orden');
            $table->integer('cargo_id')->unsigned()->nullable();
            $table->foreign('cargo_id')->references('id')->on('cargo')->onDelete('set null');

            $table->timestamps();
        });

        Schema::create('integrante_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombreCompleto');        

            $table->integer('integrante_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['integrante_id', 'locale']);
            $table->foreign('integrante_id')->references('id')->on('integrante')->onDelete('cascade');
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
        Schema::dropIfExists('equipo');
    }
}
