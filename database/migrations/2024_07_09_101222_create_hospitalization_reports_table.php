<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalizationReportsTable extends Migration
{
    public function up()
    {
        Schema::create('hospitalization_reports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('cne');
            $table->date('hospitalization_start');
            $table->date('hospitalization_end');
            $table->text('reason');
            $table->text('history');
            $table->date('operation_date')->nullable();
            $table->string('intervention_title')->nullable();
            $table->text('progress')->nullable();
            $table->text('discharge_decision');
            $table->date('discharge_date');
            $table->text('rehabilitation')->nullable();
            $table->text('treatment')->nullable();
            $table->date('follow_up_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hospitalization_reports');
    }
}
