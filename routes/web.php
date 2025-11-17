<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('frontend.index2');
    return view('welcome');
});
Route::get('/portfolio', function () {
    return view('frontend.index');
});
Route::get('/portfolio2', function () {
    return view('frontend.index2');
})->name('home');



Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
