<!DOCTYPE html>
<html>
<head>
    <title>Compte Rendu d'Hospitalisation PDF</title>
    <style>
        /* Styles CSS pour votre PDF */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        /* Ajoutez d'autres styles selon vos besoins */
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Compte Rendu d'Hospitalisation</h1>
            <p>Date: {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
        </header>
        <p><strong>Nom:</strong> {{ $hospitalizationReport->name }}</p>
        <p><strong>Prénom:</strong> {{ $hospitalizationReport->surname }}</p>
        <p><strong>CNE:</strong> {{ $hospitalizationReport->cne }}</p>
        <p><strong>Hospitalisation du:</strong> {{ $hospitalizationReport->hospitalization_start }} <strong>au:</strong> {{ $hospitalizationReport->hospitalization_end }}</p>
        <p><strong>Motif d'hospitalisation:</strong> {{ $hospitalizationReport->reason }}</p>
        <p><strong>Antécédents:</strong> {{ $hospitalizationReport->history }}</p>
        <p><strong>Opéré le:</strong> {{ $hospitalizationReport->operation_date }}</p>
        <p><strong>Titre de l'intervention:</strong> {{ $hospitalizationReport->intervention_title }}</p>
        <p><strong>Évolution:</strong> {{ $hospitalizationReport->progress }}</p>
        <p><strong>Décision de sortie:</strong> {{ $hospitalizationReport->discharge_decision }}</p>
        <p><strong>Sortie autorisée le:</strong> {{ $hospitalizationReport->discharge_date }}</p>
        <p><strong>Consignes de rééducation:</strong> {{ $hospitalizationReport->rehabilitation }}</p>
        <p><strong>Traitement de sortie:</strong> {{ $hospitalizationReport->treatment }}</p>
        <p><strong>Rendez-vous de consultation le:</strong> {{ $hospitalizationReport->follow_up_date }}</p>
    </div>
</body>
</html>
