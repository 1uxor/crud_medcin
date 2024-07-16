<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretaire', function (Blueprint $table) {
            $table->id('id_s');
            $table->string('Nom_s');
            $table->string('Prenom_s');
            $table->string('Email_s')->unique();
            $table->string('Telephone_s');
            $table->string('CIN')->unique();
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
        Schema::dropIfExists('secretaire');
    }
}
