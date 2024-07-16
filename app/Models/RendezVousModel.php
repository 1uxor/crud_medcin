<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVousModel extends Model
{
    protected $table = 'onlineRendezVous'; // Nom de la table dans la base de données

    protected $fillable = [
        'nom', 'email', 'telephone', 'date_rendezvous', 'heure_rendezvous', 'message'
    ];

    // Vous pouvez ajouter d'autres propriétés, relations ou méthodes ici selon vos besoins
}
