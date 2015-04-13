<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('code', 20);
            $table->string('name');
            $table->string('slug', 255)->unique();
            $table->text('description')->nullable();
            $table->unsignedInteger('status')->default(0);
            $table->unsignedInteger('quantity')->default(1);
            $table->decimal('weight', 9, 2)->nullable();
            $table->string('dimension_unit', 10);
            $table->decimal('width', 5, 2)->nullable();
            $table->decimal('length', 5, 2)->nullable();
            $table->decimal('height', 5, 2)->nullable();
            $table->unsignedInteger('max_per_order')->nullable();
            $table->unsignedInteger('min_per_order')->nullable()->default(1);
            $table->decimal('price', 15, 2);
            $table->string('price_unit');
            $table->unsignedInteger('total_votes');
            $table->decimal('average_score', 2, 1);
            $table->string('avatar', 500);
            $table->string('main_image', 500);
            $table->integer('productable_id');
            $table->string('productable_type');
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
		Schema::drop('products');
	}

}
