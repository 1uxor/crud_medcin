<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalizationReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'cne',
        'hospitalization_start',
        'hospitalization_end',
        'reason',
        'history',
        'operation_date',
        'intervention_title',
        'progress',
        'discharge_decision',
        'discharge_date',
        'rehabilitation',
        'treatment',
        'follow_up_date'
    ];
}
