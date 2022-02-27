<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Welcome

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
//Page Features

Route::get('/pagefeatures', function () {
    return view('pagefeatures');
});
//Page Formulaire de reservation
Route::post('/FormulaireDeReservation', [App\Http\Controllers\ReservationController::class, 'index'])->name('formulaireDeReservation');
//Page Pricing

Route::get('/page_pricing', function () {
    return view('page_pricing');
});
//Page Blog

Route::get('/page_blog', function () {
    return view('page_blog');
});

//Page Blog single

Route::get('/page_blogsingle', function () {
    return view('page_blogsingle');
});
// Page Contact

Route::get('/page_contact', function () {
    return view('page_contact');
});
// Maps Api Test OK
Route::get('/maps', function () {
    return view('mapsapi/maps');
});

// Dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//webmaster-----------------------------------------------------------------------------------

Route::get('/AccueilWM', [App\Http\Controllers\WebmasterController::class, 'index']);
Route::get('/ajouter_societe', [App\Http\Controllers\WebmasterController::class, 'ajouter_societe'])->name('ajouter_societe');
Route::post('/ajouter_societe', [App\Http\Controllers\WebmasterController::class, 'ajouter_societe_post'])->name('ajouter_societe');


//Factures
Route::get('/facturewm', [App\Http\Controllers\FactureController::class, 'View'])->name('facturewm');
Route::get('/facturetrajet/{id}', [App\Http\Controllers\FactureController::class, 'trajet'])->name('facturetrajet');

Route::get('/factureCreate/{id}', [App\Http\Controllers\FactureController::class, 'factureItem']);
Route::get('/Factures/{id}', [App\Http\Controllers\FactureController::class, 'tous_lesfactures']);
Route::get('/ouvrirfacture/{idf}/{id}/{btn}', [App\Http\Controllers\FactureController::class, 'ouvrirfacture'])->name('ouvrirfacture');



// // Sociéte 
// Route::middleware(['societe'])-> group(function(){

//     Route::get('societe',[App\Http\Controllers\Societe\LoginController::class,'showViewSociete'])->name('societe');
// });
