<!-- resources/views/patients/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier le Patient</h2>
        <form action="{{ route('patients.update', $patient->id_p) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Nom_p">Nom</label>
                <input type="text" class="form-control" id="Nom_p" name="Nom_p" value="{{ $patient->Nom_p }}" required>
            </div>
            <div class="form-group">
                <label for="Prenom_p">Prénom</label>
                <input type="text" class="form-control" id="Prenom_p" name="Prenom_p" value="{{ $patient->Prenom_p }}" required>
            </div>
            <div class="form-group">
                <label for="Adresse_p">Adresse</label>
                <input type="text" class="form-control" id="Adresse_p" name="Adresse_p" value="{{ $patient->Adresse_p }}" required>
            </div>
            <div class="form-group">
                <label for="Date_Naissance_p">Date de Naissance</label>
                <input type="date" class="form-control" id="Date_Naissance_p" name="Date_Naissance_p" value="{{ $patient->Date_Naissance_p }}" required>
            </div>
            <div class="form-group">
                <label for="Sexe_p">Sexe</label>
                <select class="form-control" id="Sexe_p" name="Sexe_p" required>
                    <option value="M" {{ $patient->Sexe_p == 'M' ? 'selected' : '' }}>Masculin</option>
                    <option value="F" {{ $patient->Sexe_p == 'F' ? 'selected' : '' }}>Féminin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Telephone_p">Téléphone</label>
                <input type="text" class="form-control" id="Telephone_p" name="Telephone_p" value="{{ $patient->Telephone_p }}">
            </div>
            <div class="form-group">
                <label for="Email_p">Email</label>
                <input type="email" class="form-control" id="Email_p" name="Email_p" value="{{ $patient->Email_p }}">
            </div>
            <div class="form-group">
                <label for="Situation_Familiale">Situation Familiale</label>
                <input type="text" class="form-control" id="Situation_Familiale" name="Situation_Familiale" value="{{ $patient->Situation_Familiale }}">
            </div>
            <div class="form-group">
                <label for="id_imm_assurance">ID Assurance</label>
                <input type="text" class="form-control" id="id_imm_assurance" name="id_imm_assurance" value="{{ $patient->id_imm_assurance }}">
            </div>
            <!-- Ajouter d'autres champs du formulaire si nécessaire -->
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
