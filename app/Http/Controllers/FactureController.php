<?php
namespace App\Http\Controllers;

use App\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::all();
        return view('factures.index', compact('factures'));
    }

    public function create()
    {
        return view('factures.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_f' => 'required|date',
            'Montant' => 'required|numeric',
            'id_p' => 'required|exists:patients,id',
            'id_r' => 'nullable|exists:rendez_vous,id',
            // Ajoutez les autres champs avec leurs règles de validation
        ]);

        Facture::create($validatedData);

        return redirect()->route('factures.index')
            ->with('success', 'Facture ajoutée avec succès.');
    }

    public function show($id)
    {
        $facture = Facture::findOrFail($id);
        return view('factures.show', compact('facture'));
    }

    public function edit($id)
    {
        $facture = Facture::findOrFail($id);
        return view('factures.edit', compact('facture'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'date_f' => 'required|date',
            'Montant' => 'required|numeric',
            'id_p' => 'required|exists:patients,id',
            'id_r' => 'nullable|exists:rendez_vous,id',
            // Ajoutez les autres champs avec leurs règles de validation
        ]);

        $facture = Facture::findOrFail($id);
        $facture->update($validatedData);

        return redirect()->route('factures.index')
            ->with('success', 'Facture modifiée avec succès.');
    }

    public function destroy($id)
    {
        $facture = Facture::findOrFail($id);
        $facture->delete();

        return redirect()->route('factures.index')
            ->with('success', 'Facture supprimée avec succès.');
    }
}
