<?php

use App\Http\Controllers\DemandeController;
use App\Http\Controllers\EmplyeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RealisationController;
use App\Models\Emplaye;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\MessageConverter;

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
    return view('welcome');
});


Route::get('/apropos', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/services', function () {
    return view('services');
});


Route::get('/realisations', [RealisationController::class, 'all']);


Route::get('/realisations/{id}', [RealisationController::class, 'show']);


Route::get('/equipe', [EmplyeController::class, 'all'])->name('team');


Route::post('/message', [MessageController::class, 'store'])->name('message.new');


Route::post('/demande', [DemandeController::class, 'store'])->name('demande');
