<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de Gestion des Patients</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    @yield('styles')
    <style>
        body {
            background-color: #ffffff;
            padding-top: 150px; /* Adjust this value to match your navbar height */
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
        }
        .nav-link {
            font-weight: bold;
        }
        .content {
            margin-top: 70px; /* Adjust this value to match your navbar height */
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 90px; width: 90px;">
            Gestion des Patients
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('patients.index') }}"> Menu </a>
                    {{-- <a class="nav-link" href="{{ route('rendezvous.index') }}"> Rendez vous </a> --}}
                </li>
                <!-- Ajouter d'autres liens de navigation si nécessaire -->
            </ul>
        </div>
    </nav>
    <div class="col-md-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-patients-tab" data-toggle="pill" href="#v-pills-patients" role="tab" aria-controls="v-pills-patients" aria-selected="true">Patients</a>
            <a class="nav-link" id="v-pills-rendezvous-tab" href="{{ route('rendezvous.index') }}">Rendez-vous</a>
            <a class="nav-link" id="v-pills-factures-tab" href="#">Factures et Rapports</a>

        </div>
    </div>

    <div class="container mt-4 content">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-N5VOvEdaqaJ+bGzQD8+weF3V0x3akM7eJyX3VlzA6Aq8uDe3Jkix4v98+uWYVKsK" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Tp0k7Wb+3N9Q9IuVvGJkzXnGxhXj1c2HdQ" crossorigin="anonymous"></script>
</body>
</html>
