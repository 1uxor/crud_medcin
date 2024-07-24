<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actes extends Model
{
    use HasFactory;

    protected $table = 'actes'; // Indiquez explicitement le nom de la table
    protected $primaryKey = 'id_a'; // Indiquez la clé primaire
    protected $fillable = ['cout', 'description']; // Ajoutez les colonnes que vous pouvez remplir
}
