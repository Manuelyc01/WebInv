<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictionaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionaries', function (Blueprint $table) {
			$table->increments('id');
			$table->text('slug');
		});

		Schema::create('dictionary_translations', function (Blueprint $table) {
			$table->increments('id');
			$table->text('static_text');

			$table->integer('dictionary_id')->unsigned();
			$table->string('locale')->index();
			$table->unique(['dictionary_id','locale']);
			$table->foreign('dictionary_id')->references('id')->on('dictionaries')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_translations');
        Schema::dropIfExists('dictionaries');
    }
}
