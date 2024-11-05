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
Route::get ('/demandes', [Demande:: class,'Liste_Demandes']);
Route::get('/update-demandes/{id}', [Demande:: class,'update_Demandes']);
Route::get('/delete-demandes/{id}', [Demande:: class,'delete_Demandes']);
Route::Post('/update/traitement', [Demande:: class,'update_etudiant_Demandes']);
Route::get('/ajouter', [Demande:: class,'Ajouter_Demandes']);
Route::Post('/ajouter/traitement', [Demande:: class,'Ajouter_Demandes_traitement']);

//Fin  de la ligne de route  PERMETTANT DE GERER NOTRE APP


