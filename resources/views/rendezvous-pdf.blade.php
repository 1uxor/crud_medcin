<!DOCTYPE html>
<html>
<head>
    <title>Rendez-vous</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        .hospital-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .hospital-logo {
            width: 100px; /* Ajuster la taille du logo selon vos besoins */
            margin-bottom: 10px;
        }
        h1 {
            font-size: 28px;
            margin-bottom: 10px;
            text-transform: uppercase;
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        .info {
            margin-bottom: 20px;
        }
        .info p {
            margin-bottom: 5px;
        }
        .message {
            margin-top: 20px;
        }
        .message p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="hospital-name">Hospital Ma Médecine</div>
            <img src="{{ asset('images/logo.png') }}"  class="hospital-logo">
            <h1>Rendez-vous</h1>
            <p>Date: {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
        </header>
        <div class="info">
            <p><strong>Nom:</strong> {{ $nom }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Téléphone:</strong> {{ $telephone }}</p>
            <p><strong>Date de Rendez-vous:</strong> {{ $date_rendezvous }}</p>
            <p><strong>Heure de Rendez-vous:</strong> {{ $heure_rendezvous }}</p>
        </div>
        <div class="message">
            <p><strong>Message:</strong></p>
            <p>{{ $message }}</p>
        </div>
    </div>
</body>
</html>
