<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\VideogameController;
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

Route::get('/', [PublicController::class,'welcome'])->name('welcome');

// Rotta get per richjiedere risorsa per inserimento giochi

Route::get('/videogame/form', [VideogameController::class,'videogameForm'])->name("videogame.form");
// Rotta di tipo post per recuperare la risorsa videogioco 

Route::post("/videogame/form/submit", [VideogameController::class, "videogameSubmit"])->name("videogame.submit");

// Rotta per richiedere la risorsa per la lista dei videogiochi salvati nel db 

Route::get("/videogame/index",[VideogameController::class, "videogameIndex"])->name("videogame.index");

// Rotta parametrica per il dettaglio del videogioco 

Route::get("/videogame/detail/{videogame}",[VideogameController::class,"videogameDetail"])->name("videogame.detail");