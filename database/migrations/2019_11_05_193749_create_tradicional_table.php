<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradicionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradicional', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagenFondoListado');
            $table->text('imagenCaladaListado');
            $table->text('imagenIzqB1');
            $table->text('imagenDerB1');
            $table->timestamps();
        });

        Schema::create('tradicional_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('tituloListado');  
            $table->text('desListado');  
            $table->string('slug'); 
            
            $table->string('tituloB1');
            $table->text('desB1');                                                                             
            $table->text('arrayB1')->nullable(); //array

            $table->string('tituloB2');
            $table->text('desB2');       

            $table->integer('tradicional_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['tradicional_id', 'locale']);
            $table->foreign('tradicional_id')->references('id')->on('tradicional')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('etiqueta_tradi', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('etiqueta_tradi_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');    

            $table->integer('etiqueta_tradi_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['etiqueta_tradi_id', 'locale']);
            $table->foreign('etiqueta_tradi_id')->references('id')->on('etiqueta_tradi')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('prod_tradi', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagenListado');

            $table->integer('etiqueta_tradi_id')->unsigned()->nullable();
            $table->foreign('etiqueta_tradi_id')->references('id')->on('etiqueta_tradi')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('prod_tradi_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('slug');
            $table->text('des');
            $table->string('zonaVenta');
            $table->text('array')->nullable();
            $table->string('tituloRelacionados');

            $table->integer('prod_tradi_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['prod_tradi_id', 'locale']);
            $table->foreign('prod_tradi_id')->references('id')->on('prod_tradi')->onDelete('cascade');
            $table->timestamps();
        });

        //un producto está relacionado con otros productos (Completos) MANY TO MANY

        Schema::create('prod_tradi_relacionado', function(Blueprint $table) {
            $table-> increments('id');
            $table->integer('prod_tradi_id')->unsigned()->index();
            $table->foreign('prod_tradi_id')->references('id')->on('prod_tradi')->onDelete('cascade');
            $table->integer('rel_tradi_id')->unsigned()->index();
            $table->foreign('rel_tradi_id')->references('id')->on('prod_tradi')->onDelete('cascade');
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
        Schema::dropIfExists('tradicional');
    }
}
