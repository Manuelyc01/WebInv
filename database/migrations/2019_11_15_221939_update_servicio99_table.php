<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateServicio99Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cate_servicio_translations',function(Blueprint $table) {
            $table->text('slug');
        });

        Schema::table('servicio',function(Blueprint $table) {
            $table->dropColumn('tipo');
            $table->boolean('visible')->change()->nullable();
        });

        Schema::table('servicio_translations',function(Blueprint $table) {
            $table->string('tipo');
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
