<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('Patient', function (Blueprint $table) {
            $table->increments('id_p');
            $table->string('Nom_p');
            $table->string('Prenom_p');
            $table->string('Adresse_p');
            $table->date('Date_Naissance_p');
            $table->string('Sexe_p');
            $table->string('Telephone_p');
            $table->string('Email_p');
            $table->string('Situation_Familiale');
            $table->integer('id_imm_assurance')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Patient');
    }
}

