<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestion3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_nivel3', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gestion_nivel2_id')->unsigned()->nullable();
            $table->foreign('gestion_nivel2_id')->references('id')->on('gestion_nivel2')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('gestion_nivel3_translations',function(Blueprint $table) {
            $table->increments('id'); 
            $table->string('nombre');
            $table->string('slug');
            $table->integer('gestion_nivel3_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['gestion_nivel3_id', 'locale']);
            $table->foreign('gestion_nivel3_id')->references('id')->on('gestion_nivel3')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('gestion_nivel3b', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gestion_nivel3_id')->unsigned()->nullable();
            $table->foreign('gestion_nivel3_id')->references('id')->on('gestion_nivel3')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('gestion_nivel3b_translations',function(Blueprint $table) {
            $table->increments('id'); 
            $table->string('titulo');
            $table->text('des')->nullable();
            $table->text('array')->nullable(); //array
            $table->integer('gestion_nivel3b_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['gestion_nivel3b_id', 'locale']);
            $table->foreign('gestion_nivel3b_id')->references('id')->on('gestion_nivel3b')->onDelete('cascade');
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
        Schema::dropIfExists('gestion3');
    }
}
