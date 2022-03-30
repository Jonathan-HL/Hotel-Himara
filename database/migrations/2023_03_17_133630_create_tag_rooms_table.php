<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_rooms', function (Blueprint $table) {
            $table->id();
            // // FK
            $table->unsignedBigInteger('tag_room_id');
            $table->foreign('tag_room_id')->references('id')->on("room_tags")->onDelete("cascade");

            // // FK
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on("rooms")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tag_rooms');
    }
}
