<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagazinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('magazines', function(Blueprint $table) {

            $table->string('issue')->unique();
            $table->text('summary')->nullable(); //Text published in 10 years ago section
            $table->date('fromDate'); //Data issued
            $table->date('toDate');
            $table->tinyInteger('year')->unsigned();
            //Media will be managed by another table (tapa, pdfs)

            // Timestamps
            $table->primary('issue');
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
        Schema::table('magazines', function(Blueprint $table)
        {
            Schema::drop('magazines');
        });
	}

}