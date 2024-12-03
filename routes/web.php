<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

//? rotte home 
Route::get('/', [FrontController::class, 'homepage'])->name('homepage');

//? rotte service 
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service/{id}', [ServiceController::class, 'detail'])->name('detail-service');

//? rotte about
Route::get('/about-us', [AboutController::class, 'aboutindex'])->name('about-us');
Route::post('/contatti/invio', [AboutController::class, 'invioContatto'])->name('contatto.invio');