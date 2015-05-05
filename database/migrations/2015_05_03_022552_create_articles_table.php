<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('section_id')->unsigned();
            $table->integer('magazine_id')->unsigned();
            $table->string('title', 255)->index();
            $table->mediumText('description')->nullable(); //a short description to reference in the page
            $table->string('page_number', 4); //Which page is the article located
            $table->string('picture_url', 255)->nullable(); //picture
            //We could group main articles to give them more importance
            $table->boolean('is_main')->default(0); //is one of the main magazine articles?
            //Authors are in pivot table
            //$table->text('content'); //To be implemented after release 1
			$table->timestamps();
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('magazine_id')->references('id')->on('magazines');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}
}
