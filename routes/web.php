<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('public.pages.welcome');
})->name('home');

Route::get('/privacy', function () {
    return view('public.pages.privacy');
})->name('privacy');

Route::get('/about', function () {
    return view('public.pages.about');
})->name('about');

Route::post('/contact', [ContactController::class, 'post'])->name('contact.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/contact', function () {
    return view('contact');
})->name('contact.index');
