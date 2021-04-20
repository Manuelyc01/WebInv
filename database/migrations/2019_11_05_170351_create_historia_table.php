<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia', function (Blueprint $table) {
            $table->increments('id');

            $table->text('imagenIzqB1');
            $table->text('imagenDerB1');

            $table->text('imgHojaIzqB2');
            $table->text('imgHojaDerB2');

            $table->text('imgB4');
            $table->timestamps();
        });

        Schema::create('historia_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('tituloB1');
            $table->text('desB1');
            $table->text('arrayB1')->nullable(); //array

            $table->string('tituloMisionB2');
            $table->string('subtituloMisionB2');
            $table->text('desMisionB2');
            $table->string('tituloVisionB2');
            $table->string('subtituloVisionB2');
            $table->text('desVisionB2');

            $table->string('tituloB3');
            $table->text('arrayB3')->nullable();

            $table->string('tituloB4');
            $table->text('desB4');
            $table->text('arrayB4')->nullable(); //array

            $table->string('tituloB5');
            $table->string('textoBtn1B5');
            $table->text('array1B5')->nullable(); //array
            $table->string('titulo1B5');
            $table->string('subtitulo1B5');
            $table->text('des1B5');
            $table->string('textoBtn2B5');
            $table->text('array2B5')->nullable(); //array
            $table->string('titulo2B5');
            $table->string('subtitulo2B5');
            $table->text('des2B5');
            

            $table->integer('historia_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['historia_id', 'locale']);
            $table->foreign('historia_id')->references('id')->on('historia')->onDelete('cascade');
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
        Schema::dropIfExists('historia');
    }
}
