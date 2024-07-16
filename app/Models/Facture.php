<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $table = 'Facture';
    protected $primaryKey = 'id_f';
    protected $fillable = [
        'date_f',
        'Montant',
        'id_p',
        'id_r'
    ];

    // Relation avec le patient
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id_p', 'id_p');
    }

    // Relation avec le rendez-vous (optionnelle si chaque facture est liée à un rendez-vous)
    public function rendezVous()
    {
        return $this->belongsTo(RendezVous::class, 'id_r', 'id_r');
    }

    // Ajoutez d'autres relations au besoin
}
