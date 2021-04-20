<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden');            
            $table->timestamps();
        });

        Schema::create('banner_translations',function(Blueprint $table) {
            $table->increments('id');            
            $table->string('titulo');
            $table->text('des');
            $table->string('textoBtn');
            $table->text('enlaceBtn');
            $table->text('fondoDesktop');
            $table->text('fondoMobile');

            $table->integer('banner_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['banner_id', 'locale']);
            $table->foreign('banner_id')->references('id')->on('banner')->onDelete('cascade');
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
        Schema::dropIfExists('banner');
    }
}
