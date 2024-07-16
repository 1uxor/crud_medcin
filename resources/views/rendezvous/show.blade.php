<!-- resources/views/rendez-vous/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails du Rendez-vous</h2>
        <p><strong>Date et Heure :</strong> {{ $rdv->Date_heure }}</p>
        <p><strong>Patient :</strong> {{ $rdv->patient->Nom_p }} {{ $rdv->patient->Prenom_p }}</p>
        <p><strong>Médecin :</strong> {{ $rdv->medecin->Nom_m }} {{ $rdv->medecin->Prenom_m }}</p>
        <!-- Afficher d'autres détails du rendez-vous selon vos besoins -->
        <a href="{{ route('rendezvous.index') }}" class="btn btn-secondary">Retour à la liste des rendez-vous</a>
    </div>
@endsection
