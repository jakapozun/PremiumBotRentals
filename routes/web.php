<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('main.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function(){
        return view('admin.index');
    });
    Route::get('/add-bots', [\App\Http\Controllers\BotController::class, 'indexAdmin'])->name('admin-bots');
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('admin-users');
    Route::get('/listings', [\App\Http\Controllers\ListingController::class, 'index'])->name('admin-listings');
    Route::get('/rentals', [\App\Http\Controllers\RentalController::class, 'index'])->name('admin-rentals');
    Route::post('/submit-bot', [\App\Http\Controllers\BotController::class, 'create'])->name('submit-bot');
});

//main - bots
Route::get('/all-bots', [\App\Http\Controllers\BotController::class, 'index'])->name('all-bots');
Route::get('/bot/{bot}', [\App\Http\Controllers\BotController::class, 'show'])->name('show-bot');

//main - listings

//main - rentals
Route::post('/submit-rental/{listing}', [\App\Http\Controllers\RentalController::class, 'create'])->name('submit-rental');

//main - legal
Route::get('/legal', function(){
    return view('main.legal');
})->name('legal');

//main - settings
Route::get('/settings/{user}', [\App\Http\Controllers\SettingController::class, 'index'])->name('settings');

Route::get('/{vue_capture?}', function () {
    return view('main.index');
})->where('vue_capture', '[\/\w\.-]*');


