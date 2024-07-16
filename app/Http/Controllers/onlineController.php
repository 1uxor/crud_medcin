<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVousModel;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class onlineController extends Controller
{
    public function showForm()
    {
        return view('online.rendForm');
    }

    public function submitDemande(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'date_rendezvous' => 'required|date',
            'heure_rendezvous' => 'required|string|max:5',
            'message' => 'nullable|string',
        ]);

        // Créer une nouvelle instance de RendezVousModel et sauvegarder les données
        $rendezVous = new RendezVousModel();
        $rendezVous->nom = $validatedData['nom'];
        $rendezVous->email = $validatedData['email'];
        $rendezVous->telephone = $validatedData['telephone'];
        $rendezVous->date_rendezvous = $validatedData['date_rendezvous'];
        $rendezVous->heure_rendezvous = $validatedData['heure_rendezvous'];
        $rendezVous->message = $validatedData['message'];
        $rendezVous->save();

        // Générer le PDF et télécharger
        $pdf = PDF::loadView('rendezvous-pdf', $validatedData);
        return $pdf->download('Rendezvous.pdf');
    }
}
