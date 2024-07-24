<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('hospitalization_reports', function (Blueprint $table) {
        $table->unsignedBigInteger('id_p');

        $table->foreign('id_p')->references('id')->on('patients')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('hospitalization_reports', function (Blueprint $table) {
        $table->dropForeign(['id_p']);
        $table->dropColumn('id_p');
    });
    }
};
