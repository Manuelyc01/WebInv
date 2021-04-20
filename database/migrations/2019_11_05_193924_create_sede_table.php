<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSedeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sede', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imagenMapa');
            $table->timestamps();
        });

        Schema::create('sede_translations',function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');    
            $table->string('slug');
            $table->text('arraySucursal')->nullable();    
            $table->text('arrayAgencia')->nullable();  
            $table->text('arrayUnidad')->nullable();       

            $table->integer('sede_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['sede_id', 'locale']);
            $table->foreign('sede_id')->references('id')->on('sede')->onDelete('cascade');
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
        Schema::dropIfExists('sede');
    }
}
