<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discounts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('type');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->dateTime('published_at');
            $table->decimal('flat_amount', 15, 2)->nullable();
            $table->decimal('percent_amount', 3, 2)->nullable();
            $table->unsignedInteger('used_times')->default(0);
            $table->unsignedInteger('minimum_product')->default(1);
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
		Schema::drop('discounts');
	}

}
