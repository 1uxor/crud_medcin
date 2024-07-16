<!-- resources/views/rendez-vous/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Rendez-vous</h2>
        <a href="{{ route('rendezvous.create') }}" class="btn btn-primary mb-3">Ajouter un Rendez-vous</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Date et Heure</th>
                    <th>Patient</th>
                    <th>Médecin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rendezVous as $rdv)
                    <tr>
                        <td>{{ $rdv->Date_heure }}</td>
                        <td>{{ $rdv->patient->Nom_p }} {{ $rdv->patient->Prenom_p }}</td>
                        <td>{{ $rdv->medecin->Nom_m }} {{ $rdv->medecin->Prenom_m }}</td>
                        <td>
                            <a href="{{ route('rendezvous.show', $rdv->id) }}" class="btn btn-info ">Voir</a>
                            <a href="{{ route('rendezvous.edit', $rdv->id) }}" class="btn btn-primary ">Modifier</a>
                            <!-- Ajouter un bouton pour supprimer si nécessaire -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
