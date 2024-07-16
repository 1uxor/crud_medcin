<!-- resources/views/patients/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un Patient</h2>
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nom_p">Nom</label>
                <input type="text" class="form-control" id="Nom_p" name="Nom_p" required>
            </div>
            <div class="form-group">
                <label for="Prenom_p">Prénom</label>
                <input type="text" class="form-control" id="Prenom_p" name="Prenom_p" required>
            </div>
            <div class="form-group">
                <label for="Adresse_p">Adresse</label>
                <input type="text" class="form-control" id="Adresse_p" name="Adresse_p" required>
            </div>
            <div class="form-group">
                <label for="Date_Naissance_p">Date de Naissance</label>
                <input type="date" class="form-control" id="Date_Naissance_p" name="Date_Naissance_p" required>
            </div>
            <div class="form-group">
                <label for="Sexe_p">Sexe</label>
                <select class="form-control" id="Sexe_p" name="Sexe_p" required>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Telephone_p">Téléphone</label>
                <input type="text" class="form-control" id="Telephone_p" name="Telephone_p">
            </div>
            <div class="form-group">
                <label for="Email_p">Email</label>
                <input type="email" class="form-control" id="Email_p" name="Email_p">
            </div>
            <div class="form-group">
                <label for="Situation_Familiale">Situation Familiale</label>
                <input type="text" class="form-control" id="Situation_Familiale" name="Situation_Familiale">
            </div>
            <div class="form-group">
                <label for="id_imm_assurance">ID Assurance</label>
                <input type="text" class="form-control" id="id_imm_assurance" name="id_imm_assurance">
            </div>
            <!-- Ajouter d'autres champs du formulaire si nécessaire -->
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
