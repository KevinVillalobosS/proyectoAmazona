<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Catastrophe Controllers
Route::get('catastrophes/disable/{id}', 'CatastropheController@endCatastrophe');
Route::get('catastrophes/getSectorsFrom/{id}', 'CatastropheController@showAllSectorsFrom');
Route::resource('catastrophes', 'CatastropheController');

//Sector Controllers
Route::get('sectors/getAllVehiclesOf/{id}', 'SectorController@showAllVehiclesFromSector');
Route::get('sectors/getAllDonationsOf/{id}', 'SectorController@showAllDonationsFromSector');
Route::get('sectors/getCatastropheOf/{id}', 'SectorController@showCatastrophe');
Route::resource('sectors', 'SectorController');

//Donation Controllers
Route::get('donations/getDonationTypeOf/{id}', 'DonationController@showDonationType');
Route::get('donations/getSectorOfDonation/{id}', 'DonationController@showSector');
Route::resource('donations', 'DonationController');

//Vehicle Controllers
Route::get('donations/getSectorOfVehicle/{id}', 'VehicleController@getSector');
Route::resource('vehicles', 'VehicleController');

//Donation Type Controllers
Route::get('donationTypes/getDonationsOf/{id}', 'DonationTypeController@showAllDonationsFromType');
Route::resource('donationTypes', 'DonationTypeController');
