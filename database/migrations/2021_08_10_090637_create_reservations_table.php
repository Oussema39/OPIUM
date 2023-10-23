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
            $table->bigIncrements('id');
            $table->string('nom_prenom');
            $table->string('telephone');
            $table->integer('nbr_fille');
            $table->integer('nbr_garcon');
            $table->date('date');
            $table->unsignedBigInteger('id_evenement');
            $table->foreign('id_evenement')->references('id')->on('evenements')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('date')->references('date')->on('evenements')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('id_evenement')->references('id')->on('events');
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
