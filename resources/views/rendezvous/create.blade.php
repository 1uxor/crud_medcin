@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un Rendez-vous</h2>
        <form action="{{ route('rendezvous.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Date_heure">Date et Heure :</label>
                <input type="datetime-local" name="Date_heure" id="Date_heure" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_p">Patient :</label>
                <select name="id_p" id="id_p" class="form-control">
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id_p }}">{{ $patient->Nom_p }} {{ $patient->Prenom_p }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_m">Médecin :</label>
                <select name="id_m" id="id_m" class="form-control">
                    <!-- Ajoutez les options pour les médecins -->
                </select>
            </div>
            <div class="form-group">
                <label for="id_s"> Secrétaire :</label>
                <select name="id_s" id="id_s" class="form-control">
                    <!-- Ajoutez les options pour les secrétaires -->
                </select>
            </div>
            <div class="form-group">
                <label for="id_a">Acte (optionnel) :</label>
                <select name="id_a" id="id_a" class="form-control">
                    <!-- Ajoutez les options pour les actes si nécessaire -->
                </select>
            </div>
            <!-- Ajoutez d'autres champs du formulaire pour le rendez-vous ici -->

            <button type="submit" class="btn btn-primary">Ajouter Rendez-vous</button>
        </form>
    </div>
@endsection

