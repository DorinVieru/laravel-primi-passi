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

Route::get('/', function () {
    $welcome = "Ciao visitatore fortunato!"; //DEFINISCO LA VARIABILE CON UN CERTO NOME..
    $winner = "Non hai vinto un bel niente.";

    return view('home', compact('welcome', 'winner')); //QUESTO NOME DEVE ESSERE UTILIZZATO SENZA IL DOLLARO DAVANTI DENTRO LA FUNZIONE COMPACT
})->name('homepage');