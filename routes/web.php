<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\Auth\LoginController;
use App\Http\Controllers\Landlord\ImageController;
use App\Http\Controllers\Landlord\PropertyController;
use App\Http\Controllers\HouseController;

// use App\Http\Controllers\Landlord\AuthenticatedSessionController;

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


//update product and save route
Route::get('/edit/{id}', [PropertyController::class, 'updateform']);
Route::put('/update/{id}',[PropertyController::class, 'update']);

//delete property route
Route::get('/delete/{id}',[PropertyController::class, 'removeProperty']);



// HOME PAGE

Route::get('/option', [App\Http\Controllers\OptionController::class, 'index'])->name('option');


Route::get('/sell', [App\Http\Controllers\SellController::class, 'index'])->name('sell');

Route::get('/rent', [App\Http\Controllers\RentController::class, 'index'])->name('rent');


Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Landlord
Route::namespace('Landlord')->prefix('landlord')->name('landlord.')->group(function(){
    Route::namespace('Auth')->middleware('guest:landlord')->group(function(){
        //login
        // Route::get('login',[App\Http\Controllers\Landlord\Auth\AuthenticatedSessionController::class, 'create'])->name('create');
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('landlordlogin');
        Route::get('register','RegisteredLandlordController@create')->name('register');
        Route::post('register','RegisteredLandlordController@store')->name('register');


    });
        Route::middleware('landlord')->group(function(){
            Route::get('home','HomeController@index')->name('home');
        });


        // adding an image
        Route::get('image-upload', [ImageController::class, 'create'])->name('image.create');
        route::post('image-upload', [ImageController::class, 'store'])->name('image.store');



        Route::get('/myproperties', [App\Http\Controllers\Landlord\PropertyController::class, 'index'])->name('myproperties');


        Route::get('/rent', [App\Http\Controllers\Landlord\RentController::class, 'index'])->name('rent');

        Route::get('/maintenance', [App\Http\Controllers\Landlord\MaintenanceController::class, 'index'])->name('maintenance');

        Route::get('/tenant', [App\Http\Controllers\Landlord\TenantController::class, 'index'])->name('tenant');

        Route::get('/property', [App\Http\Controllers\Landlord\PropertyController::class, 'index'])->name('property');

        Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');

        //for rent

        Route::get('/houses', [HouseController::class, 'index'])->name('houses.index');
        Route::view('/house-cards', 'houses.index')->name('house-cards');

});
