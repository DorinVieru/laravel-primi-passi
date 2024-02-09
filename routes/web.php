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

// RUOTE HOMEPAGE
Route::get('/', function () {
    $welcome = "Ciao visitatore fortunato!"; 
    $winner = "Non hai vinto un bel niente.";

    return view('home', compact('welcome', 'winner'));
})->name('homepage');

// RUOTE CHI SONO
Route::get('/chi-sono', function () {
    $data = [
        'nome' => 'Dorin',
        'cognome' => 'Vieru',
    ];

    return view('chi_sono', $data);
})->name('chi_sono');

// RUOTE PROGETTI
Route::get('/progetti', function () {
    $project = "Un bellissimo progetto!";

    return view('progetti', compact('project'));
})->name('progetti');

// RUOTE BLOG
Route::get('/blog', function () {
    $blog = "Qui il blog bellissimo!";

    return view('blog', compact('blog'));
})->name('blog');

// RUOTE CONTATTI
Route::get('/contatti', function () {
    $contatto = "Qui il mio bellissimo contatto!";

    return view('contatti', compact('contatto'));
})->name('contatti');