<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_nivel1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden');
            $table->timestamps();
        });

        Schema::create('gestion_nivel1_translations',function(Blueprint $table) {
            $table->increments('id'); 
            $table->string('nombre'); 
            $table->string('slug');           

            $table->integer('gestion_nivel1_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['gestion_nivel1_id', 'locale']);
            $table->foreign('gestion_nivel1_id')->references('id')->on('gestion_nivel1')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('gestion_nivel2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gestion_nivel1_id')->unsigned()->nullable();
            $table->foreign('gestion_nivel1_id')->references('id')->on('gestion_nivel1')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('gestion_nivel2_translations',function(Blueprint $table) {
            $table->increments('id'); 

            $table->string('titulo');
            $table->text('des');
            $table->text('array')->nullable(); //array
            

            $table->integer('gestion_nivel2_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['gestion_nivel2_id', 'locale']);
            $table->foreign('gestion_nivel2_id')->references('id')->on('gestion_nivel2')->onDelete('cascade');
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
        Schema::dropIfExists('gestion');
    }
}
