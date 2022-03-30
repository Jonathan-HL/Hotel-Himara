<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->datetime('debut');
            $table->datetime('fin');
            $table->integer('adult');
            $table->integer('enfant');
            $table->boolean('valide');
            $table->string("commentaire")->nullable();
            $table->string("telephone")->nullable();
            $table->string("country")->nullable();
            $table->foreignId('category_room_id')->nullable()->constrained();
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
        Schema::dropIfExists('reservations');
    }
}
