<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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
    return view('welcome');
});

Route::group(['prefix' => 'search'], function() {
    Route::get('/getdata',[SearchController::class,'search'])->name('search.index');
    Route::get('/getinfo/{currentLocation}/{destinationLocation}',[SearchController::class,'show'] )->name('search.show');
});