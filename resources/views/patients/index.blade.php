<!-- resources/views/patients/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-30">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-patients" role="tabpanel" aria-labelledby="v-pills-patients-tab">
                    <h2>Liste des Patients</h2>
                    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">Ajouter un Patient</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
                                <th>Date de Naissance</th>
                                <th>Sexe</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Situation Familiale</th>
                                <th>ID Assurance</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $patient->id_p }}</td>
                                    <td>{{ $patient->Nom_p }}</td>
                                    <td>{{ $patient->Prenom_p }}</td>
                                    <td>{{ $patient->Adresse_p }}</td>
                                    <td>{{ $patient->Date_Naissance_p }}</td>
                                    <td>{{ $patient->Sexe_p }}</td>
                                    <td>{{ $patient->Telephone_p }}</td>
                                    <td>{{ $patient->Email_p }}</td>
                                    <td>{{ $patient->Situation_Familiale }}</td>
                                    <td>{{ $patient->id_imm_assurance }}</td>
                                    <td>
                                        <div style="display: flex; gap: 6px; align-items: center;">
                                        <a href="{{ route('patients.show', $patient->id_p) }}" class="btn btn-info " style="height: 38px; font-weight:700">Voir</a>
                                        <a href="{{ route('patients.edit', $patient->id_p) }}" class="btn btn-warning " style="height: 38px; font-weight:700 ;color:#ffff;">Modifier</a>
                                        <form action="{{ route('patients.destroy', $patient->id_p) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce patient?')" style="height: 38px; font-weight:700">Supprimer</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Autres onglets (Rendez-vous, Factures, Rapports) à compléter -->
            </div>
        </div>
    </div>
</div>
@endsection
