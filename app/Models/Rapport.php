<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    protected $table = 'Rapport';
    protected $primaryKey = 'id_rapport';
    protected $fillable = [
        'id_p',
        'contenu',
        'id_m'
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
