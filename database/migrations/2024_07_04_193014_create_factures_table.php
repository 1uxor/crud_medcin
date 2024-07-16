<?php

// database/migrations/YYYY_MM_DD_create_factures_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    public function up()
    {
        Schema::create('Facture', function (Blueprint $table) {
            $table->increments('id_f');
            $table->date('date_f');
            $table->decimal('Montant', 10, 2);
            $table->integer('id_p')->unsigned();
            $table->foreign('id_p')->references('id_p')->on('Patient');
            $table->integer('id_r')->unsigned()->nullable();
            // Ajoutez d'autres clés étrangères si nécessaire
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Facture');
    }
}

