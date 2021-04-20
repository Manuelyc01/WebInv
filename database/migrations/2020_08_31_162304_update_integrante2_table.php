<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateIntegrante2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('integrante_translations',function(Blueprint $table) {
            $table->text('telefono')->change()->nullable();
            $table->text('correo')->change()->nullable();
            $table->text('direccion')->change()->nullable();
            $table->text('des')->change()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
