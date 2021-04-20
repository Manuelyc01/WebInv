<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->increments('id');

            $table->text('imgIzqB2');
            $table->text('imgDerB2');

            $table->text('imgHojaB3');
            $table->text('imgIzqB3');
            $table->text('imgDer1B3');
            $table->text('imgDer2B3');

            $table->text('imgFondoB4');
            $table->text('coverVideoB4');

            $table->text('imgHojaB5');

            $table->timestamps();
        });

        Schema::create('home_translations',function(Blueprint $table) {
            $table->increments('id'); 

            $table->string('tituloB2');
            $table->text('desB2');
            $table->string('textoBtnB2');

            $table->string('tituloB3');
            $table->string('subtituloB3');            

            $table->string('tituloB4');
            $table->text('desB4');
            $table->text('enlaceVideoB4');
            $table->string('textoBtnB4');

            $table->string('tituloB5');
            $table->string('subtituloB5');
            $table->string('textoBtnB5');
            $table->text('enlaceBtnB5');

            $table->string('tituloB6');
            $table->string('placeHolderB6');
            $table->string('textoBtnB6');

            $table->integer('home_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['home_id', 'locale']);
            $table->foreign('home_id')->references('id')->on('home')->onDelete('cascade');
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
        Schema::dropIfExists('home');
    }
}
