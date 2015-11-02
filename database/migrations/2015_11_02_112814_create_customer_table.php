<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer', function (Blueprint $table) {
			$table->increments('customer_id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('phone');
			$table->string('address1');
			$table->string('address2')->nullable();
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('country');
			$table->string('birthday')->nullable();
			$table->string('gender')->nullable();
			$table->string('occupation')->nullable();
			$table->string('race')->nullable();
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
		Schema::drop('customer');
	}

}
