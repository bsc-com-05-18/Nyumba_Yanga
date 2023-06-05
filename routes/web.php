<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landlord\HomeController;

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
// LANDING PAGE ROUTES

Route::get('/', function () {
    return view('welcome');
});

Route::get('/option', [App\Http\Controllers\LandingPage::class, 'option'])->name('option');
Route::get('/rent', [App\Http\Controllers\LandingPage::class, 'rent'])->name('rent');
Route::get('/sell', [App\Http\Controllers\LandingPage::class, 'sell'])->name('sell');
Route::get('/contacts', [App\Http\Controllers\LandingPage::class, 'contacts'])->name('contacts');



Auth::routes();

Route::get('/home', [App\Http\Controllers\Landlord\HomeController::class, 'index'])->middleware('auth');

Route::get('post',[App\Http\Controllers\Landlord\HomeController::class, 'post']);

