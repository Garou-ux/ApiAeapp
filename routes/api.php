<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\EventsController;
use App\Http\Controllers\API\PackageController;
use App\Http\Controllers\API\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



// Route::post('logout', [CustomSanctumLogoutController::class, 'logout'])->middleware('auth:sanctum');

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::get('getUsers', 'getUsers');
    Route::post('logout', 'logout');
});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('products', ProductController::class);
});

Route::controller(EventsController::class)->group(function () {
    Route::get('events', 'getEventsFromMonthAndYear');
});


Route::controller(PackageController::class)->group(function () {
    Route::get('getPackages', 'getPackages');
    Route::post('createPackage', 'createPackage');
    Route::get('package/{id}', 'getPackageById');
});

Route::controller(CustomerController::class)->group(function (){
    Route::get('getCustomers', 'getCustomers');
    Route::get('customer/{id}', 'getCustomer');
    Route::post('createCustomer', 'createCustomer');
});
