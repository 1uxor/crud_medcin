<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = [
            [
                'name' => 'Dr. Jean Dupont',
                'photo' => 'doctor1.png',
                'specialty' => 'Cardiologue',
                'phone' => '123-456-7890',
                'email' => 'maouhoubisoumia@gmail.com',
                'google_meet' => 'https://meet.google.com'
            ],
            [
                'name' => 'Dr. Marie Curie',
                'photo' => 'doctor2.png',
                'specialty' => 'Oncologue',
                'phone' => '123-456-7891',
                'email' => 'marie.curie@gmail.com',
                'google_meet' => 'https://meet.google.com'
            ],

            [
                'name' => 'Dr. Marie Curie',
                'photo' => 'doctor7.png',
                'specialty' => 'Oncologue',
                'phone' => '123-456-7891',
                'email' => 'marie.curie@gmail.com',
                'google_meet' => 'https://meet.google.com'
            ],

            [
                'name' => 'Dr. Marie Curie',
                'photo' => 'doctor1.png',
                'specialty' => 'Oncologue',
                'phone' => '123-456-7891',
                'email' => 'marie.curie@gmail.com',
                'google_meet' => 'https://meet.google.com'
            ],
            [
                'name' => 'Dr. Marie Curie',
                'photo' => 'doctor5.png',
                'specialty' => 'Oncologue',
                'phone' => '123-456-7891',
                'email' => 'marie.curie@gmail.com',
                'google_meet' => 'https://meet.google.com'
            ],
            [
                'name' => 'Dr. Marie Curie',
                'photo' => 'doctor7.png',
                'specialty' => 'Oncologue',
                'phone' => '123-456-7891',
                'email' => 'marie.curie@gmail.com',
                'google_meet' => 'https://meet.google.com'
            ],

            [
                'name' => 'Dr. Marie Curie',
                'photo' => 'doctor4.png',
                'specialty' => 'Oncologue',
                'phone' => '123-456-7891',
                'email' => 'marie.curie@gmail.com',
                'google_meet' => 'https://meet.google.com'
            ],
            [
                'name' => 'Dr. Marie Curie',
                'photo' => 'doctor5.png',
                'specialty' => 'Oncologue',
                'phone' => '123-456-7891',
                'email' => 'marie.curie@gmail.com',
                'google_meet' => 'https://meet.google.com'
            ],
            [
                'name' => 'Dr. Marie Curie',
                'photo' => 'doctor2.png',
                'specialty' => 'Oncologue',
                'phone' => '123-456-7891',
                'email' => 'marie.curie@gmail.com',
                'google_meet' => 'https://meet.google.com'
            ],


        ];

        return view('doctors.index', compact('doctors'));
    }
}
