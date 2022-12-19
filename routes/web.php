<?php

use App\Http\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/catalogue', [PageController::class, "getMovies"])->name('catalogue');

//show: metodo per chiamare dettagli di un singolo elemento
Route::get('/catalogue/{id}', [PageController::class, 'show'])->name('singlemovie');