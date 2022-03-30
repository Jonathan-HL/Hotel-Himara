<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_articles', function (Blueprint $table) {
            $table->id();
            // $table->string("nom");
            // // FK
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on("tags")->onDelete("cascade");

            // // FK
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on("articles")->onDelete("cascade");
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
        Schema::dropIfExists('tag_articles');
    }
}
