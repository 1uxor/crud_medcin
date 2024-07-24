<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\choiseController;
use App\Http\Controllers\onlineController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HospitalizationReportController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SecretaireController;



use App\Http\Controllers\InvoiceController;
use App\Models\HospitalizationReport;

// Routes pour les patients
Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('/patients/{id}', [PatientController::class, 'show'])->name('patients.show');
Route::get('/patients/{id}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{id}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('/patients/{id}', [PatientController::class, 'destroy'])->name('patients.destroy');
Route::get('/patients/search', [PatientController::class, 'search'])->name('patients.search');

// Routes pour les rendez-vous
Route::get('/rendez-vous', [RendezVousController::class, 'index'])->name('rendezvous.index');
Route::get('/rendez-vous/create', [RendezVousController::class, 'create'])->name('rendezvous.create');
Route::post('/rendez-vous', [RendezVousController::class, 'store'])->name('rendezvous.store');
Route::get('/rendez-vous/{id}', [RendezVousController::class, 'show'])->name('rendezvous.show');
Route::get('/rendez-vous/{id}/edit', [RendezVousController::class, 'edit'])->name('rendezvous.edit');
Route::put('/rendez-vous/{id}', [RendezVousController::class, 'update'])->name('rendezvous.update');
Route::delete('/rendez-vous/{id}', [RendezVousController::class, 'destroy'])->name('rendezvous.destroy');
// Routes pour les factures
Route::get('/factures', [FactureController::class, 'index'])->name('factures.index');
Route::get('/factures/create', [FactureController::class, 'create'])->name('factures.create');
Route::post('/factures', [FactureController::class, 'store'])->name('factures.store');
Route::get('/factures/{id}', [FactureController::class, 'show'])->name('factures.show');
Route::get('/factures/{id}/edit', [FactureController::class, 'edit'])->name('factures.edit');
Route::put('/factures/{id}', [FactureController::class, 'update'])->name('factures.update');
Route::delete('/factures/{id}', [FactureController::class, 'destroy'])->name('factures.destroy');




Route::post('/rendezvous', [RendezVousController::class, 'store'])->name('rendezvous.store');


Route::get('/user', [HomeController::class, 'index'])->name('utilisateur.acceuil');






//utilisateur

// Route::get('/register', [RegisterController::class, 'showLoginForm'])->name('utilisateur.register');




// Route::get('/demande', [onlineController::class, 'showForm'])->name('online.rendForm');
// Route::post('/demande', [onlineController::class, 'submitDemande'])->name('online.submitDemande');




//administrator

Route::get('/', [choiseController::class, 'choiseAdministrator'])->name('administrateur.choise');





// Affiche la liste des rapports
Route::get('/hospitalization-reports', [HospitalizationReportController::class, 'index'])->name('hospitalization-reports.index');

// Affiche le formulaire pour créer un nouveau rapport
Route::get('/hospitalization-reports/create', [HospitalizationReportController::class, 'create'])->name('hospitalization-reports.create');

// Enregistre un nouveau rapport dans la base de données
Route::post('/hospitalization-reports', [HospitalizationReportController::class, 'store'])->name('hospitalization-reports.store');

// Affiche les détails d'un rapport spécifique
Route::get('/hospitalization-reports/{hospitalizationReport}', [HospitalizationReportController::class, 'show'])->name('hospitalization-reports.show');

// Affiche le formulaire pour modifier un rapport existant
Route::get('/hospitalization-reports/{hospitalizationReport}/edit', [HospitalizationReportController::class, 'edit'])->name('hospitalization-reports.edit');

// Met à jour un rapport existant dans la base de données
Route::put('/hospitalization-reports/{hospitalizationReport}', [HospitalizationReportController::class, 'update'])->name('hospitalization-reports.update');

// Supprime un rapport existant de la base de données
Route::delete('/hospitalization-reports/{hospitalizationReport}', [HospitalizationReportController::class, 'destroy'])->name('hospitalization-reports.destroy');


Route::post('/submit-form', [FormController::class, 'submit'])->name('form.submit');
Route::get('/hospitalization-reports/{id}/pdf', [HospitalizationReportController::class, 'generatePdf'])->name('hospitalization-reports.generatePdf');








// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('utilisateur.register');
// Route::post('/register', [AuthController::class, 'register'])->name('utilisateur.register.post');

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('utilisateur.login');
// Route::post('/login', [AuthController::class, 'login'])->name('utilisateur.login.post');

// Route::post('/logout', [AuthController::class, 'logout'])->name('utilisateur.logout');

    Route::get('/demande', [OnlineController::class, 'showForm'])->name('online.rendForm');
    Route::post('/demande', [OnlineController::class, 'submitDemande'])->name('online.submitDemande');
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');








    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
    Route::get('registration', [AuthController::class, 'registration'])->name('register');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
    Route::get('dashboard', [AuthController::class, 'dashboard']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboardd', [AuthController::class, 'dashboardd'])->name('dashboardd');
    Route::get('dashboarddd', [AuthController::class, 'dashboarddd'])->name('dashboarddd');
    Route::get('/request', [RequestController::class, 'index'])->name('request.index');




    Route::get('/secretaire', [SecretaireController::class, 'index'])->name('secretaires.index');


    Route::get('/factures-et-rapports', [InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/invoices/download/{id}', [InvoiceController::class, 'downloadInvoice'])->name('invoices.download');
    Route::get('/reports/download/{id}', [HospitalizationReportController::class, 'downloadReport'])->name('reports.download');