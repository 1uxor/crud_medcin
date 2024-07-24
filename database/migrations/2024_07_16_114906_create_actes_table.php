<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actes', function (Blueprint $table) {
            $table->id('id_a'); // ID de l'acte
            $table->decimal('cout', 10, 2); // Coût de l'acte
            $table->text('description')->nullable(); // Description de l'acte (optionnel)
            $table->timestamps(); // Ajouter automatiquement les colonnes 'created_at' et 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actes');
    }
}