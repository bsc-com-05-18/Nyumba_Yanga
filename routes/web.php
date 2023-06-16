<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\Auth\LoginController;
use App\Http\Controllers\Landlord\PropertyController;
use App\Http\Controllers\Landlord\TenantController;

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


//update product
Route::get('/edit/{id}', [PropertyController::class, 'updateform']);
Route::put('/update/{id}',[PropertyController::class, 'update']);
Route::get('/delete/{id}',[PropertyController::class, 'removeProperty']);

// HOME PAGE

Route::get('/option', [App\Http\Controllers\OptionController::class, 'index'])->name('option');


Route::get('/sell', [App\Http\Controllers\SellController::class, 'index'])->name('sell');
Route::get('/viewbuyproperty/{id}', [App\Http\Controllers\SellController::class, 'display'])->name('buyproperty');


Route::get('/rent', [App\Http\Controllers\RentController::class, 'index'])->name('rent');
Route::get('/viewproperty/{id}', [App\Http\Controllers\RentController::class, 'display'])->name('viewproperty');
Route::post('/viewproperty/{id}/book', [App\Http\Controllers\RentController::class, 'book']);


Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Tenant Routes
Route::get('/landlord', [App\Http\Controllers\Tenant\LandlordController::class, 'show']);
Route::get('tenantprofile', [App\Http\Controllers\HomeController::class, 'profile']);
Route::post('/rate/{id}/{tid}', [App\Http\Controllers\Tenant\RatingController::class, 'rate']);




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

    //Landlord Routes
        Route::middleware('landlord')->group(function(){
            Route::get('home','HomeController@index')->name('home');
        });

        Route::get('profile', [App\Http\Controllers\Landlord\HomeController::class, 'profile']);


        //Uploading the property
        Route::get('image-upload', [PropertyController::class, 'create'])->name('property.create');
        route::post('image-upload', [PropertyController::class, 'store'])->name('property.store');

        // Route::get('/notification', [App\Http\Controllers\Landlord\BookingController::class, 'display'])->name('notification');

        
        //Displaying property
        Route::get('/myproperties', [App\Http\Controllers\Landlord\PropertyController::class, 'display'])->name('myproperties');


        Route::get('/rent', [App\Http\Controllers\Landlord\RentController::class, 'index'])->name('rent');

        Route::get('/maintenance', [App\Http\Controllers\Landlord\MaintenanceController::class, 'index'])->name('maintenance');

        Route::get('/addtenant', [App\Http\Controllers\Landlord\TenantController::class, 'index'])->name('tenant');
        Route::get('/tenant', [App\Http\Controllers\Landlord\TenantController::class, 'show']);
        route::post('assign-tenant', [TenantController::class, 'assign'])->name('tenant.assign');

        Route::get('/property', [App\Http\Controllers\Landlord\PropertyController::class, 'index'])->name('property');

        Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');


});