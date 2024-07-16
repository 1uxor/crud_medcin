<?php

// database/migrations/YYYY_MM_DD_create_rapports_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportsTable extends Migration
{
    public function up()
    {
        Schema::create('Rapport', function (Blueprint $table) {
            $table->increments('id_rapport');
            $table->integer('id_p')->unsigned();
            $table->foreign('id_p')->references('id_p')->on('Patient');
            $table->text('contenu');
            $table->integer('id_m')->unsigned()->nullable();
            // Ajoutez d'autres clés étrangères si nécessaire
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Rapport');
    }
}

