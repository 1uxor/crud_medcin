<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Rendez-vous</title>
    <link rel="stylesheet" href="{{ asset('css/rendForm.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales/fr.js'></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const text = "Planifier votre RDV Facilement";
    const paragraph = document.querySelector('.firstDiv p');
    let index = 0;

    function typeLetter() {
        if (index < text.length) {
            paragraph.textContent += text.charAt(index);
            index++;
            setTimeout(typeLetter, 100); // Adjust the speed by changing the timeout value
        } else {
            setTimeout(resetText, 1000); // Wait for 1 second before resetting
        }
    }

    function resetText() {
        paragraph.textContent = '';
        index = 0;
        typeLetter();
    }

    typeLetter();
});

    </script>
    <style>
        #calendar {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            margin-right: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif
    <div class="firstDiv">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <p>Planifier votre RDV Facilement</p>
    </div>
    <div class="container">
        <div id="calendar"></div>
        <div class="second">
            <form id="appointmentForm" action="{{ route('online.submitDemande') }}" method="post">
                @csrf
                <div class="headRend">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </div>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="telephone">Téléphone:</label>
                <input type="text" id="telephone" name="telephone" required><br>

                <label for="date_rendezvous">Date de Rendez-vous:</label>
                <input type="date" id="date_rendezvous" name="date_rendezvous" required><br>

                <label for="heure_rendezvous">Heure de Rendez-vous:</label>
                <select id="heure_rendezvous" name="heure_rendezvous" required>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="11:00">12:00</option>
                    <option value="11:00">14:00</option>
                    <option value="11:00">15:00</option>
                </select><br>

                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea><br>

                <input type="hidden" id="selected_date" name="selected_date">

                <button type="submit" style="font-weight: 600">Envoyer la demande</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'fr',
                initialView: 'dayGridMonth',
                selectable: true,
                events: [
                    {
                        title: 'Disponible',
                        start: '2024-07-15',
                        end: '2024-07-17',
                        color: 'green'
                    },
                    {
                        title: 'Non Disponible',
                        start: '2024-07-18',
                        end: '2024-07-18',
                        color: 'red'
                    },
                    {
                        title: 'Disponible',
                        start: '2024-07-20',
                        end: '2024-07-20',
                        color: 'green'
                    },
                    {
                        title: 'Disponible',
                        start: '2024-07-30',
                        end: '2024-07-30',
                        color: 'green'
                    },
                    {
                        title: 'Disponible',
                        start: '2024-08-15',
                        end: '2024-08-15',
                        color: 'green'
                    },
                    {
                        title: 'Disponible',
                        start: '2024-08-02',
                        end: '2024-08-03',
                        color: 'green'
                    },
                    {
                        title: 'Non Disponible',
                        start: '2024-08-18',
                        end: '2024-08-18',
                        color: 'red'
                    },
                ],
                select: function(info) {
                    // Update the selected date in the hidden input field
                    document.getElementById('selected_date').value = info.startStr;

                    // Optionally update the visible date input field
                    document.getElementById('date_rendezvous').value = info.startStr;
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>
