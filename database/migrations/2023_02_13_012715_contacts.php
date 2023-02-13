<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacts extends Migration
{
	/**
		* Run the migrations.
		*
		* @return void
		*/
	public function up()
	{
		Schema::create('contacts', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('email')->unique();
			$table->string('code_area',3);
			$table->string('number_phone',11)->unique();
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
		//
	}
}
