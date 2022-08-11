<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/services', [App\Http\Controllers\ServicesController::class, 'showUserRelatedServices']);
Route::get('/services/add', [App\Http\Controllers\ServicesController::class, 'showServiceAdditionFrom']);
Route::post('/services', [App\Http\Controllers\ServicesController::class, 'checkAndSaveNewUserRelatedServices']);


Route::get('/measurers', [App\Http\Controllers\MeasurerController::class, 'showUserRelatedMeasurers']);
Route::post('/measurers', [App\Http\Controllers\MeasurerController::class, 'checkAndSaveNewUserRelatedMesaurers']);
Route::get('/measurers/add', [App\Http\Controllers\MeasurerController::class, 'showMeasurerAdditionFrom']);


Route::get('/measurments', [App\Http\Controllers\MeasurmentController::class, 'showUserRelatedMeasurements']);
Route::post('/measurments', [App\Http\Controllers\MeasurmentController::class, 'checkAndSaveNewUserRelatedMeasurments']);
Route::get('/measurments/add', [App\Http\Controllers\MeasurmentController::class, 'showMeasurmentsAdditionFrom']);