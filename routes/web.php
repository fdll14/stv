<?php

use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
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

Route::get('/localization/{language}', [\App\Http\Controllers\LocalizationController::class, 'switch'])->name('localization.switch');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([
    'register' => true
]);

Route::group(['prefix' => 'dashboard', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
});
