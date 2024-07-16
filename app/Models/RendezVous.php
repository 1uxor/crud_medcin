<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    protected $table = 'Rendez_Vous';
    protected $primaryKey = 'id_r';
    protected $fillable = [
        'Date_heure',
        'id_p',
        'id_m',
        'id_s',
        'id_a'
    ];

    // Relation avec le patient
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id_p', 'id_p');
    }

    // Relation avec le médecin
    public function medecin()
    {
        return $this->belongsTo(Medecin::class, 'id_m', 'id_m');
    }

    // Ajoutez d'autres relations au besoin
}
