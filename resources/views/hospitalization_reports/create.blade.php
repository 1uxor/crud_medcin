<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Hospitalization Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Include any other CSS files here -->
</head>
<body>
    <div class="container">
        <form action="{{ route('hospitalization-reports.store') }}" method="POST">
            @csrf
            @include('form')
        </form>
    </div>
    <div class="mt-4">
        @if (isset($hospitalizationReport))
            <a href="{{ route('hospitalization-reports.generatePdf', ['id' => $hospitalizationReport->id]) }}" class="btn btn-secondary">Télécharger PDF</a>
        @endif
    </div>
    <!-- Include any necessary JavaScript files here -->
</body>
</html>
