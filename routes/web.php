<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landlord\HomeController;
use App\Http\Controllers\PropertyController;

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

Route::get('/rent', [App\Http\Controllers\LandingPage::class, 'rent'])->name('rent');
Route::get('/sell', [App\Http\Controllers\LandingPage::class, 'sell'])->name('sell');
Route::get('/property-review', [App\Http\Controllers\LandingPage::class, 'details'])->name('property-review');
Route::get('/contacts', [App\Http\Controllers\LandingPage::class, 'contacts'])->name('contacts');



Auth::routes();

Route::namespace('Auth')->middleware('auth')->group(function(){
   
    Route::get('/home', [App\Http\Controllers\Landlord\HomeController::class, 'index']);
    Route::get('/profile', [App\Http\Controllers\Landlord\HomeController::class, 'profile']);
    Route::get('/addProperty', [App\Http\Controllers\PropertyController::class, 'index']);
    Route::post('/uploadProperty',[App\Http\Controllers\PropertyController::class, 'store']);
    Route::get('/myproperties', [App\Http\Controllers\PropertyController::class, 'display']);
    Route::get('/product-images/{id}', [App\Http\Controllers\PropertyController::class, 'images'])->name('landlord.images');


    Route::get('/edit/{id}', [PropertyController::class, 'updateform']);
    Route::put('/update/{id}',[PropertyController::class, 'update']);
    Route::get('/delete/{id}',[PropertyController::class, 'removeProperty']);

    Route::get('/tenant/home', [App\Http\Controllers\Tenant\HomeController::class, 'index']);

    Route::get('/tenant/profile', [App\Http\Controllers\Tenant\HomeController::class, 'profile']);

    

    // Worked but didnt pass the url
    // Route::get('/addProperty', [App\Http\Controllers\MultipleImageController::class, 'index']);
    // Route::get('save-multiple-image', [App\Http\Controllers\MultipleImageController::class, 'save']);



    


});

