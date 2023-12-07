<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
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


// Groupes de routes pour la réinitialisation du mot de passe
Route::prefix('')->group(function () {


    // Route pour demander la réinitialisation du mot de passe
    Route::get('', [HomePageController::class, 'index'])
        ->name('home');

    Route::post('contact', [ContactController::class, 'submitContactForm'])
        ->name('contact.send');


    /* TEST MAIL */
    Route::get('/test-mail', [HomePageController::class, 'testMail'])
        ->name('test.mail');

});
