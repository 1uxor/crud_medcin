<?php

namespace App\Http\Controllers;
use App\Models\Patient;

use Illuminate\Http\Request;

class SecretaireController extends Controller
{

    public function index()
    {
        $patients = Patient::all();
        return view('secretaire.index', compact('patients'));
    }
}
