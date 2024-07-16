<!-- resources/views/doctors/index.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles des Médecins</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 15px;
    background-image: url({{asset('images/home.jpg')}});
    background-size: cover;
    background-position: center;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.doctor-profile {
    background-color: rgb(243, 246, 249);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin: 20px;
    padding: 20px;
    text-align: center;
    width: 350px;
    transition: all 1s ease;
}
.doctor-profile:hover{
    transform: scale(1.02);
}

.profile-photo {
    border-radius: 50%;
    height: 180px;
    width: 180px;
}
.imgLogo{
    width: 100px;
    height: 100px;
}
.contact-method {
    display: block;
    margin: 10px 0;
    text-decoration: none;
    color: #007bff;
    font-weight: 600;
    text-align: left;
}
p{
    font-weight: 700;
}
.contact-method:hover {
  color: #184b81;
}

    </style>
</head>
<body>
    <div class="container">
        @foreach ($doctors as $doctor)
            <div class="doctor-profile">
                <img src="{{ asset('images/' . $doctor['photo']) }}" alt="{{ $doctor['name'] }}" class="profile-photo">
                <h3>{{ $doctor['name'] }}</h3>
                <img src="{{asset('images/logo.png')}}" alt="" class="imgLogo">
                <p>{{ $doctor['specialty'] }}</p>
                <p>
                    <a href="tel:{{ $doctor['phone'] }}" class="contact-method">📞 {{ $doctor['phone'] }}</a>
                    <a href="{{ $doctor['google_meet'] }}" class="contact-method">💻 Google Meet</a>
                    <a href="mailto:{{ $doctor['email'] }}" class="contact-method">✉️ {{ $doctor['email'] }}</a>
                </p>
            </div>
        @endforeach
</body>
</html>
