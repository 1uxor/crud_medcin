<!-- resources/views/patients/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails du Patient</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $patient->id_p }}</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ $patient->Nom_p }}</td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td>{{ $patient->Prenom_p }}</td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td>{{ $patient->Adresse_p }}</td>
                </tr>
                <tr>
                    <th>Date de Naissance</th>
                    <td>{{ $patient->Date_Naissance_p }}</td>
                </tr>
                <tr>
                    <th>Sexe</th>
                    <td>{{ $patient->Sexe_p }}</td>
                </tr>
                <tr>
                    <th>Téléphone</th>
                    <td>{{ $patient->Telephone_p }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $patient->Email_p }}</td>
                </tr>
                <tr>
                    <th>Situation Familiale</th>
                    <td>{{ $patient->Situation_Familiale }}</td>
                </tr>
                <tr>
                    <th>ID Assurance</th>
                    <td>{{ $patient->id_imm_assurance }}</td>
                </tr>
                <!-- Ajouter d'autres détails du patient si nécessaire -->
            </tbody>
        </table>
        <a href="{{ route('patients.edit', $patient->id_p) }}" class="btn btn-primary">Modifier</a>
        <form action="{{ route('patients.destroy', $patient->id_p) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce patient?')">Supprimer</button>
        </form>
    </div>
@endsection
