<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correoWeb');
            $table->string('correoFormSuscribete');
            $table->string('correoFormContactanos');
            $table->string('correoFormSugerencias');
            $table->string('correoFormDenuncias');
            $table->timestamps();
        });

        Schema::create('info_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('enlaceBlog')->nullable();
            $table->string('enlaceTransparencia')->nullable();
            $table->string('enlaceCocaleros')->nullable();
            $table->string('enlaceFE')->nullable();
            $table->text('codEticaPDF')->nullable();
            $table->text('terminosPDF')->nullable();
            $table->text('privacidadDatosPDF')->nullable();
            $table->string('facebookEnaco')->nullable();
            $table->string('facebookDelisse')->nullable();
            $table->string('facebookKintu')->nullable();
            $table->string('ciudadBase')->nullable();
            $table->string('tlfCiudadBase')->nullable();
            $table->string('celCiudadBase')->nullable();
            $table->string('ciudadProv')->nullable();
            $table->string('tlfCiudadProv')->nullable();
            $table->string('celCiudadProv')->nullable();

            $table->string('tituloProductos');
            $table->string('subtituloProductos');

            $table->string('tituloGracias');
            $table->text('desGracias');

            $table->string('tituloSedes');

            $table->string('tituloContactanos');
            $table->text('desContactanos');
            $table->text('arrayContactanos')->nullable(); //array

            $table->string('tituloGestion');
            $table->string('subtituloGestion');

            $table->string('tituloTrabajo');
            $table->string('subtituloTrabajo');

            $table->string('tituloServiciosB1');
            $table->string('subtituloServiciosB1');
            $table->string('tituloServiciosB2');
            $table->text('desServiciosB2');
            $table->text('pdfServiciosB2');

            $table->string('tituloSugerencia');

            $table->string('tituloDenuncia');
            $table->text('desDenuncia');

            $table->integer('info_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['info_id', 'locale']);
            $table->foreign('info_id')->references('id')->on('info')->onDelete('cascade');
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
        Schema::dropIfExists('info_translations');
        Schema::dropIfExists('info');
    }
}
