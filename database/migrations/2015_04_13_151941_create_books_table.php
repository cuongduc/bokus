<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('isbn-13', 13)->nullable();
            $table->string('isbn-11', 11)->nullable();
            $table->string('publisher');
            $table->date('published_date')->nullable();
            $table->unsignedInteger('pages')->nullable();
            $table->string('version', 15)->nullable();
            $table->integer('discount_id')->nullable();
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
		Schema::drop('books');
	}

}
