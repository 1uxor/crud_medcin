<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->all();

        // Générer le PDF
        $pdf = PDF::loadView('pdf', compact('data'));

        // Sauvegarder le PDF sur le serveur (optionnel)
        $pdf->save(storage_path('app/public/form.pdf'));

        // Télécharger le PDF
        return $pdf->download('form.pdf');
    }
    public function showPdf()
    {
        $data = [];

        return view('pdf', compact('data'));
    }
}
