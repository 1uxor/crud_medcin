<?php
namespace App\Http\Controllers;
use App\Models\Patient;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
           'Nom_p' => 'required|string',
        'Prenom_p' => 'required|string',
        'Adresse_p' => 'required|string',
        'Date_Naissance_p' => 'required|date',
        'Sexe_p' => 'required|string',
        'Telephone_p' => 'required|string',
        'Email_p' => 'required|email',
        'Situation_Familiale' => 'required|string',
        'id_imm_assurance' => 'required|string',
            // Ajoutez les autres champs avec leurs règles de validation
        ]);

        Patient::create($validatedData);

        return redirect()->route('patients.index')
            ->with('success', 'Patient ajouté avec succès.');
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.show', compact('patient'));
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Nom_p' => 'required|string',
        'Prenom_p' => 'required|string',
        'Adresse_p' => 'required|string',
        'Date_Naissance_p' => 'required|date',
        'Sexe_p' => 'required|string',
        'Telephone_p' => 'required|string',
        'Email_p' => 'required|email',
        'Situation_Familiale' => 'required|string',
        'id_imm_assurance' => 'required|string',
            // Ajoutez les autres champs avec leurs règles de validation
        ]);

        $patient = Patient::findOrFail($id);
        $patient->update($validatedData);

        return redirect()->route('patients.index')
            ->with('success', 'Patient modifié avec succès.');
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('patients.index')
            ->with('success', 'Patient supprimé avec succès.');
    }
}
