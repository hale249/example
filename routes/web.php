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
    return view('welcome');
});

Route::post('/export', [\App\Http\Controllers\ExportMultipleSheetsController::class, 'index'])->name('export');

Route::get('/pdf', [\App\Http\Controllers\Controller::class, 'exportPDF']);

Route::get('/google-analytic/{all:.*}', [\App\Http\Controllers\GoogleAnalyticController::class, 'index']);

