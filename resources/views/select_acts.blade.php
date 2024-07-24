<!DOCTYPE html>
<html>
<head>
    <title>Choisir les actes</title>
</head>
<body>
    <h1>Choisir les actes pour le patient</h1>
    <form action="{{ route('generate_invoice') }}" method="POST">
        @csrf
        @foreach($actes as $acte)
            <div>
                <input type="checkbox" name="actes[]" value="{{ $acte->id_a }}">
                <label>{{ $acte->description }} - {{ $acte->cout }} €</label>
            </div>
        @endforeach
        <button type="submit">Calculer et générer la facture</button>
    </form>
</body>
</html>
