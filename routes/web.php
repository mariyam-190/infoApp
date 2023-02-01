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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () { return view('p-one');
});


Route::get('search',[App\Http\Controllers\Frontend\FrontendController::class, 'search']);
Route::get('flight-details',[App\Http\Controllers\Frontend\FrontendController::class, 'fdetails']);
Route::get('map',[App\Http\Controllers\Frontend\FrontendController::class, 'map']);
Route::get('send',[App\Http\Controllers\Frontend\FrontendController::class, 'send']);
Route::get('attach',[App\Http\Controllers\Frontend\FrontendController::class, 'attach']);

Route::post('send/message',[App\Http\Controllers\SendMessageController::class, 'sendmessage'])->name('send.msg');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('flight',[App\Http\Controllers\Admin\FlightController::class, 'index']);
    Route::get('add-flight', [App\Http\Controllers\Admin\FlightController::class, 'create']);
    Route::post('add-flight', [App\Http\Controllers\Admin\FlightController::class, 'store']);
    Route::get('edit-flight/{flight_id}', [App\Http\Controllers\Admin\FlightController::class, 'edit']);
    Route::put('update-flight/{flight_id}', [App\Http\Controllers\Admin\FlightController::class, 'update']);
    Route::get('delete-flight/{flight_id}', [App\Http\Controllers\Admin\FlightController::class, 'delete']);

});


