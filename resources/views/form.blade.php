<!DOCTYPE html>
<html>
<head>
    <title>Compte Rendu d'Hospitalisation</title>
    <link rel="stylesheet" href="{{ asset('css/rapport.css') }}">
</head>
<body>
    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <div class="form-container">
            <div class="form-column">
                <div class="head">
                    <img src="{{asset('images/logo.png')}}" alt="">
                    <h1>Rapport de Hospitalisation</h1>
                </div>
                <div>
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="surname">Prénom:</label>
                    <input type="text" id="surname" name="surname" required>
                </div>
                <div>
                    <label for="cne">CNE:</label>
                    <input type="text" id="cne" name="cne" required>
                </div>
                <div>
                    <label for="hospitalization_start">Hospitalisation du:</label>
                    <input type="date" id="hospitalization_start" name="hospitalization_start" required>
                </div>
                <div>
                    <label for="hospitalization_end">au:</label>
                    <input type="date" id="hospitalization_end" name="hospitalization_end" required>
                </div>
                <div>
                    <label for="reason">Motif d'hospitalisation:</label>
                    <textarea id="reason" name="reason" required></textarea>
                </div>
                <div>
                    <label for="history">Antécédents:</label>
                    <textarea id="history" name="history" required></textarea>
                </div>
                <div>
                    <label for="operation_date">Opéré le:</label>
                    <input type="date" id="operation_date" name="operation_date">
                </div>
            </div>
            <div class="form-column">
                <div>
                    <label for="intervention_title">Titre de l'intervention:</label>
                    <textarea id="intervention_title" name="intervention_title"></textarea>
                </div>
                <div>
                    <label for="progress">Évolution:</label>
                    <textarea id="progress" name="progress" required></textarea>
                </div>
                <div>
                    <label for="discharge_decision">Décision de sortie:</label>
                    <textarea id="discharge_decision" name="discharge_decision" required></textarea>
                </div>
                <div>
                    <label for="discharge_date">Sortie autorisée le:</label>
                    <input type="date" id="discharge_date" name="discharge_date" required>
                </div>
                <div>
                    <label for="rehabilitation">Consignes de rééducation:</label>
                    <textarea id="rehabilitation" name="rehabilitation"></textarea>
                </div>
                <div>
                    <label for="treatment">Traitement de sortie:</label>
                    <textarea id="treatment" name="treatment" required></textarea>
                </div>
                <div>
                    <label for="follow_up_date">Rendez-vous de consultation le:</label>
                    <input type="date" id="follow_up_date" name="follow_up_date" required>
                </div>
            </div>
        </div>
        <div class="form-footer">
            <button type="submit" style="font-weight: 700; font-size:20px;">Soumettre</button>
        </div>
    </form>
</body>
</html>
