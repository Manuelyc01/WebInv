<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNivelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveles', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('slug');
            $table->timestamps();
        });

        Schema::table('integrante', function (Blueprint $table) {
            $table->integer('niveles_id')->unsigned()->nullable();
            $table->foreign('niveles_id')->references('id')->on('niveles')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('niveles');
    }
}
