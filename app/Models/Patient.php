<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'Patient';
    protected $primaryKey = 'id_p';
    protected $fillable = [
        'Nom_p',
        'Prenom_p',
        'Adresse_p',
        'Date_Naissance_p',
        'Sexe_p',
        'Telephone_p',
        'Email_p',
        'Situation_Familiale',
        'id_imm_assurance'
    ];

    // Relation avec les rendez-vous
    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class, 'id_p', 'id_p');
    }

    public function facture()
    {
        return $this->hasOne(Facture::class, 'id_p', 'id');
    }

    public function hospitalizationReport()
    {
        return $this->hasOne(HospitalizationReport::class, 'id_p', 'id');
    }
}
