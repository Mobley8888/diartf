<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route principal si non de départ ou par defaut
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/sidebar', function () {
    return view('sidebar');
});

// GESTION DES ROUTES PERMETTANT DE GERER NOTRE APP
Route::get ('/demandes', [DemandeController:: class,'Liste_Demande']);
Route::get('/update-demandes/{id}', [DemandeController:: class,'update_Demande']);
Route::get('/delete-demandes/{id}', [DemandeController:: class,'delete_Demande']);
Route::Post('/update/traitement', [DemandeController:: class,'update_etudiant_Demande']);
Route::get('/ajouter', [DemandeController:: class,'Ajouter_Demande']);
Route::Post('/ajouter/traitement', [DemandeController:: class,'Ajouter_Demande_traitement']);


