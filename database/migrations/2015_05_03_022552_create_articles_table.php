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
            $table->smallInteger('section_id');
            $table->string('magazine_Id');
            $table->string('title', 255);
            $table->mediumText('description'); //a short description to reference in the page
            $table->string('page_number'); //Which page is the article located
            $table->string('picture_url'); //picture
            //We could group main articles to give them more importance
            $table->boolean('is_main'); //is one of the main magazine articles?
            //Authors are in pivot table
            //$table->text('content'); //To be implemented after release 1
			$table->timestamps();
            $table->foreign('magazine_id')->references('issues')->on('magazines');
            $table->foreign('section_id')->references('id')->on('sections');
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
