<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleAuthorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
		Schema::create('article_author', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('author_id')->unsigned();
            //timestamps
            $table->timestamps();

            //Foreign keys
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('author_id')->references('id')->on('authors');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
    {
        Schema::drop('article_author');
	}

}
