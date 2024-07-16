<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousTable extends Migration
{
    public function up()
    {
        Schema::create('Rendez_Vous', function (Blueprint $table) {
            $table->increments('id_r');
            $table->dateTime('Date_heure');
            $table->integer('id_p')->unsigned();
            $table->foreign('id_p')->references('id_p')->on('Patient');
            $table->integer('id_m')->unsigned();
            // Ajoutez d'autres clés étrangères si nécessaire
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Rendez_Vous');
    }
}
