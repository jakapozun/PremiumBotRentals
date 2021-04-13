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
    return view('main.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function(){
        return view('admin.index');
    });
    Route::get('/add-bots', [\App\Http\Controllers\BotController::class, 'index'])->name('admin-bots');
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('admin-users');
    Route::get('/listings', [\App\Http\Controllers\ListingController::class, 'index'])->name('admin-listings');
    Route::get('/rentals', [\App\Http\Controllers\RentalController::class, 'index'])->name('admin-rentals');

    Route::post('/submit-bot', [\App\Http\Controllers\BotController::class, 'create'])->name('submit-bot');
});

Route::get('/{vue_capture?}', function () {
    return view('main.index');
})->where('vue_capture', '[\/\w\.-]*');

//Auth::routes();
