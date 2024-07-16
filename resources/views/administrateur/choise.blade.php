<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/secretaire.jpg') }}" class="card-img-top" alt="Image Secrétaire Médical">
                    <div class="card-body">
                        <h5 class="card-title">Secrétaire Médical</h5>
                        <p class="card-text">Accédez aux fonctionnalités destinées aux secrétaires médicaux, la gestion des rendez-vous et des dossiers patients et la facturisation.</p>
                        <a href="{{route('login')}}" class="btn btn-primary">Allez à la page Secrétaire Médical</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/medecin.jpg') }}" class="card-img-top" alt="Image Médecin">
                    <div class="card-body">
                        <h5 class="card-title">Médecin</h5>
                        <p class="card-text">Accédez aux fonctionnalités destinées aux médecins, la consultation des dossiers patients et la planification des traitements.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Aller à la page Médecin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
