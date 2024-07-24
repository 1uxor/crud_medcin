@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Factures et Rapports</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>ID</th>
                <th>Numéro de Téléphone</th>
                <th>Facture</th>
                <th>Situation de la Facture</th>
                <th>Rapport</th>
            </tr>
        </thead>
        <tbody>
            @forelse($patients as $patient)
            <tr>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->surname }}</td>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->telephone ?? 'N/A' }}</td>
                <td>
                    @if($patient->facture)
                    <a href="{{ route('invoices.download', $patient->facture->id_f) }}" target="_blank">
                        Télécharger la Facture
                    </a>
                    @else
                    Aucune facture disponible
                    @endif
                </td>
                <td>
                    @if($patient->facture)
                        @if($patient->facture->status == 'paid')
                        Payé
                        @elseif($patient->facture->status == 'partially_paid')
                        Partiellement Payé
                        @else
                        Non Payé
                        @endif
                    @else
                    N/A
                    @endif
                </td>
                <td>
                    @if($patient->facture && $patient->facture->status == 'paid' && $patient->hospitalizationReport)
                    <a href="{{ route('reports.download', $patient->hospitalizationReport->id) }}" target="_blank">
                        Télécharger le Rapport
                    </a>
                    @else
                    Facture non payée ou rapport non disponible
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">Aucun patient trouvé.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
