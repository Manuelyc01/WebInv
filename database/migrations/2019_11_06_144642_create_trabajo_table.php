<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamento', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('departamento_translations',function(Blueprint $table) {
            $table->increments('id'); 
            $table->string('nombre');           

            $table->integer('departamento_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['departamento_id', 'locale']);
            $table->foreign('departamento_id')->references('id')->on('departamento')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('trabajo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->boolean('visible');
            $table->integer('departamento_id')->unsigned()->nullable();
            $table->foreign('departamento_id')->references('id')->on('departamento')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('trabajo_translations',function(Blueprint $table) {
            $table->increments('id'); 

            $table->string('titulo');
            $table->string('des');                     
            $table->text('url')->nullable();   
            $table->text('pdf')->nullable();            

            $table->integer('trabajo_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['trabajo_id', 'locale']);
            $table->foreign('trabajo_id')->references('id')->on('trabajo')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('cate_servicio', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('cate_servicio_translations',function(Blueprint $table) {
            $table->increments('id'); 

            $table->string('nombre');           

            $table->integer('cate_servicio_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['cate_servicio_id', 'locale']);
            $table->foreign('cate_servicio_id')->references('id')->on('cate_servicio')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('servicio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->boolean('visible');
            $table->integer('departamento_id')->unsigned()->nullable();
            $table->foreign('departamento_id')->references('id')->on('departamento')->onDelete('set null');
            $table->integer('cate_servicio_id')->unsigned()->nullable();
            $table->foreign('cate_servicio_id')->references('id')->on('cate_servicio')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('servicio_translations',function(Blueprint $table) {
            $table->increments('id'); 

            $table->string('titulo');
            $table->string('des');                     
            $table->text('url')->nullable();   
            $table->text('pdf')->nullable();            

            $table->integer('servicio_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['servicio_id', 'locale']);
            $table->foreign('servicio_id')->references('id')->on('servicio')->onDelete('cascade');
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
        Schema::dropIfExists('trabajo');
    }
}
