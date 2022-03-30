<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatutRoomFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statut_room_features', function (Blueprint $table) {

            $table->id();

            // // FK
            $table->unsignedBigInteger('statut_id');
            $table->foreign('statut_id')->references('id')->on("statuts")->onDelete("cascade");

            // // FK
            $table->unsignedBigInteger('feature_id');
            $table->foreign('feature_id')->references('id')->on("features")->onDelete("cascade");

            // // FK
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on("rooms")->onDelete("cascade");

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
        Schema::dropIfExists('statut_room_features');
    }
}
