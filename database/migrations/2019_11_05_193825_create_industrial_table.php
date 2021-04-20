<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrial', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagenListado');
            $table->timestamps();
        });

        Schema::create('industrial_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('tituloListado');  
            $table->text('desListado');   
            $table->string('slug');
            
            $table->string('tituloB1');
            $table->text('desB1');   

            $table->integer('industrial_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['industrial_id', 'locale']);
            $table->foreign('industrial_id')->references('id')->on('industrial')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('subcat_indus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('subcat_indus_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');            

            $table->integer('subcat_indus_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['subcat_indus_id', 'locale']);
            $table->foreign('subcat_indus_id')->references('id')->on('subcat_indus')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('etiqueta_indus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('etiqueta_indus_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');            

            $table->integer('etiqueta_indus_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['etiqueta_indus_id', 'locale']);
            $table->foreign('etiqueta_indus_id')->references('id')->on('etiqueta_indus')->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('prod_indus', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagenListado');
            $table->text('imagenFondo');
            $table->text('imagenBeneficios');


            $table->integer('subcat_indus_id')->unsigned()->nullable();
            $table->foreign('subcat_indus_id')->references('id')->on('subcat_indus')->onDelete('set null');

            $table->integer('etiqueta_indus_id')->unsigned()->nullable();
            $table->foreign('etiqueta_indus_id')->references('id')->on('etiqueta_indus')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('prod_indus_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre'); 
            $table->string('slug');    
            $table->text('des');  
            $table->text('arrayPresentaciones')->nullable();
            $table->text('fichaPDF')->nullable();
            $table->text('arrayBeneficios')->nullable();  
            $table->string('tituloRelacionados');      

            $table->integer('prod_indus_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['prod_indus_id', 'locale']);
            $table->foreign('prod_indus_id')->references('id')->on('prod_indus')->onDelete('cascade');
            $table->timestamps();
        });

        //un producto está relacionado con otros productos (Completos) MANY TO MANY

        Schema::create('prod_indus_relacionado', function(Blueprint $table) {
            $table-> increments('id');
            $table->integer('prod_indus_id')->unsigned()->index();
            $table->foreign('prod_indus_id')->references('id')->on('prod_indus')->onDelete('cascade');
            $table->integer('rel_indus_id')->unsigned()->index();
            $table->foreign('rel_indus_id')->references('id')->on('prod_indus')->onDelete('cascade');
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
        Schema::dropIfExists('industrial');
    }
}
