<!DOCTYPE html>
<html>
<head>
    <title>Facture</title>
</head>
<body>
    <h1>Facture</h1>
    <table>
        <thead>
            <tr>
                <th>Acte</th>
                <th>Coût</th>
            </tr>
        </thead>
        <tbody>
            @foreach($actes as $acte)
                <tr>
                    <td>{{ $acte->description }}</td>
                    <td>{{ $acte->cout }} €</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h2>Total: {{ $total }} €</h2>
</body>
</html>
