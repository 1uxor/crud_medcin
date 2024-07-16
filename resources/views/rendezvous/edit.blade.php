<!-- resources/views/rendez-vous/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier le Rendez-vous</h2>
        <form action="{{ route('rendezvous.update', $rdv->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Date_heure">Date et Heure :</label>
                <input type="datetime-local" id="Date_heure" name="Date_heure" class="form-control" value="{{ $rdv->Date_heure }}" required>
            </div>
            <div class="form-group">
                <label for="id_p">Patient :</label>
                <select id="id_p" name="id_p" class="form-control" required>
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}" {{ $rdv->id_p == $patient->id ? 'selected' : '' }}>{{ $patient->Nom_p }} {{ $patient->Prenom_p }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_m">Médecin :</label>
                <select id="id_m" name="id_m" class="form-control" required>
                    @foreach ($medecins as $medecin)
                        <option value="{{ $medecin->id }}" {{ $rdv->id_m == $medecin->id ? 'selected' : '' }}>{{ $medecin->Nom_m }} {{ $medecin->Prenom_m }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Ajouter d'autres champs comme nécessaires -->
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
