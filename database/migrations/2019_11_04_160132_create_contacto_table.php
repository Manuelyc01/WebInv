<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_global', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('empresa')->nullable();
            $table->string('ruc')->nullable();
            $table->string('telefono');
            $table->string('correo');
            $table->string('fecha');
            $table->text('mensaje')->nullable();
            $table->boolean('check');
            $table->timestamps();
        });

        Schema::create('contacto_sugerencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('correo');
            $table->string('nombres');
            $table->string('telefono');
            $table->string('documento');
            $table->string('nacionalidad');
            $table->text('mensaje')->nullable();
            $table->boolean('check');
            $table->string('formaContacto');
            $table->string('fecha');
            $table->timestamps();
        });

        Schema::create('contacto_denuncia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sede');
            $table->string('tipo');
            $table->boolean('identificarse');
            $table->string('nombres')->nullable();
            $table->string('dni')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->text('arrayInvolucrados')->nullable();
            $table->string('sospecha');
            $table->text('denunciaMensaje')->nullable();
            $table->boolean('checkTerminos');
            $table->text('archivo')->nullable();
            $table->string('fecha');
            $table->timestamps();
        });

        Schema::create('contacto_suscripcion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correo');            
            $table->string('fecha');
            $table->timestamps();
        });

        Schema::create('sede_denuncia', function (Blueprint $table) {
            $table->increments('id');            
            $table->timestamps();
        });

        Schema::create('sede_denuncia_translations',function(Blueprint $table) {
            $table->increments('id');            
            $table->string('nombre');

            $table->integer('sede_denuncia_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['sede_denuncia_id', 'locale']);
            $table->foreign('sede_denuncia_id')->references('id')->on('sede_denuncia')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('tipo_denuncia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden');            
            $table->timestamps();
        });

        Schema::create('tipo_denuncia_translations',function(Blueprint $table) {
            $table->increments('id');            
            $table->string('nombre');

            $table->integer('tipo_denuncia_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['tipo_denuncia_id', 'locale']);
            $table->foreign('tipo_denuncia_id')->references('id')->on('tipo_denuncia')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('tipo_sugerencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden');            
            $table->timestamps();
        });

        Schema::create('tipo_sugerencia_translations',function(Blueprint $table) {
            $table->increments('id');            
            $table->string('nombre');

            $table->integer('tipo_sugerencia_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['tipo_sugerencia_id', 'locale']);
            $table->foreign('tipo_sugerencia_id')->references('id')->on('tipo_sugerencia')->onDelete('cascade');
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
        Schema::dropIfExists('contacto');
    }
}
