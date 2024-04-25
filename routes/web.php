<?php

use App\Models\User;
use App\Models\Countries;
use App\Models\OfferCountry;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('index', [
        'countries' => OfferController::list(),
        'employees' => EmployeeController::list()
    ]);
});

Route::get('/countries', [CountryController::class, 'index']);
Route::get('/countries/{id}', [CountryController::class, 'show']);
Route::get('/admin/countries', [CountryController::class, 'indexAdmin']);

Route::get('/admin/countries/create', [CountryController::class, 'create']);
Route::post('/admin/countries/store', [CountryController::class, 'store']);

Route::get('/admin/countries/edit/{id}', [CountryController::class, 'edit']);
Route::post('/admin/countries/update', [CountryController::class, 'update']);

Route::get('/admin/reg', function() {
    $user = new User();
    $user -> name = 'Almat';
    $user -> email = 'test@gmail.com';
    $user -> password = 'Lokaloka99!';
    $user -> save();

    return redirect('/admin');
});

// 

Route::post('/admin/auth', [UserController::class, 'authenticate']);

//Offers
Route::get('/offers/{id}', [OfferController::class, 'show']);
Route::get('/admin/offers', [OfferController::class, 'index']);
Route::get('/admin/offers/create', [OfferController::class, 'create']);
Route::post('/admin/offers/store', [OfferController::class, 'store']);
Route::get('/admin/offers/edit/{id}', [OfferController::class, 'edit']);
Route::get('/admin/offers/drop/{id}', [OfferController::class, 'drop']);
Route::put('/admin/offers/update/{id}', [OfferController::class, 'update']);

// Promotions
Route::get('/admin/offers/offers/create', [PromotionController::class, 'create']);
Route::post('/admin/offers/offers/store', [PromotionController::class, 'store']);
Route::get('/admin/offers/offers/edit/{id}', [PromotionController::class, 'edit']);
Route::post('/admin/offers/offers/update/{id}', [PromotionController::class, 'update']);
Route::get('/admin/offers/offers/drop/{id}', [PromotionController::class, 'drop']);

// Hotels
Route::get('/admin/offers/hotels/create', [HotelController::class, 'create']);
Route::post('/admin/offers/hotels/store', [HotelController::class, 'store']);
Route::get('/admin/offers/hotels/edit/{id}', [HotelController::class, 'edit']);
Route::post('/admin/offers/hotels/update/{id}', [HotelController::class, 'update']);
Route::get('/admin/offers/hotels/drop/{id}', [HotelController::class, 'drop']);

//Empolyees
Route::get('/admin/employees', [EmployeeController::class, 'index']);
Route::get('/admin/employees/create', [EmployeeController::class, 'create']);
Route::post('/admin/employees/store', [EmployeeController::class, 'store']);
Route::get('/admin/employees/edit/{id}', [EmployeeController::class, 'edit']);
Route::post('/admin/employees/update/{id}', [EmployeeController::class, 'update']);
Route::get('/admin/employees/drop/{id}', [EmployeeController::class, 'drop']);

//Clients
Route::get('/admin', [ClientController::class, 'index']);
Route::post('/client/store', [ClientController::class, 'store']);