<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class choiseController extends Controller
{
    public function choiseAdministrator(){
        return view('administrateur.choise');  // view : administrateur/choise
    }
}

//Controlleur de la premiere page de l'interface utilisateur.
