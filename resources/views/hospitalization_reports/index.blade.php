@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Les Rapports d'Hospitalisation</h1>
    <a href="{{ route('hospitalization-reports.create') }}" class="btn btn-primary" style="margin-bottom: 20px; font-size:20px;">Ajouter un rapport</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif
    <table class="table ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>CNE</th>
                <th>Début d'hospitalisation</th>
                <th>Fin d'hospitalisation</th>
                <th>Actions</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->name }}</td>
                    <td>{{ $report->surname }}</td>
                    <td>{{ $report->cne }}</td>
                    <td>{{ $report->hospitalization_start }}</td>
                    <td>{{ $report->hospitalization_end }}</td>
                    <td>
                        <a href="{{ route('hospitalization-reports.show', $report->id) }}" class="btn btn-info"style="height: 38px; font-weight:700 ;color:#ffff;" >Voir</a>
                        <a href="{{ route('hospitalization-reports.edit', $report->id) }}" class="btn btn-warning" style="height: 38px; font-weight:700 ;color:#ffff;">Modifier</a>
                        <form action="{{ route('hospitalization-reports.destroy', $report->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="height: 38px; font-weight:700 ;color:#ffff;">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
