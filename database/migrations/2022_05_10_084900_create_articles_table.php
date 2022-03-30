<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("img");
            $table->longText("description");
            $table->string("auteur");
            $table->date("creation");
             // fk
            $table->unsignedBigInteger('categorie_article_id');
            $table->foreign('categorie_article_id')->references('id')->on("categorie_articles");

            // // FK
            // $table->unsignedBigInteger('tag_id');
            // $table->foreign('tag_id')->references('id')->on("tags");

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
        Schema::dropIfExists('articles');
    }
}
