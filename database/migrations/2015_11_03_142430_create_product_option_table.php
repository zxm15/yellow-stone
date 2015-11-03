<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_options', function(Blueprint $table)
		{
			$table->increments('product_options_id');
			$table->integer('company_id')->unsigned();
			$table->foreign('company_id')->references('company_id')->on('company');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('product_id')->on('product');
			$table->string('name')->index();
			$table->string('size');
			$table->string('color');
			$table->string('sku');
			$table->decimal('price');
			$table->decimal('shipping_price');
			$table->decimal('cost');
			$table->string('description');
			$table->string('image');
			$table->string('advertisement');
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
		Schema::drop('product_options');
	}

}
