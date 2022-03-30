<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string("img");
            $table->string("titre");
            $table->longText("description");
            $table->string("prix");
            $table->integer("litMax");
            $table->integer("personMax");
             // fk
            $table->unsignedBigInteger('category_room_id');
            $table->foreign('category_room_id')->references('id')->on("category_rooms")
            ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rooms');
    }
}