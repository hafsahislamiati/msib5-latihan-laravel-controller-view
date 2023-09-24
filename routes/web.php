<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfokampusController;

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
    return redirect('/halaman');
});

Route::get('/halaman/frontpage', [HomeController::class, 'index']);
Route::get('/halaman/profile', [ProfileController::class, 'index']);
Route::get('/halaman/infokampus', [InfokampusController::class, 'index']);

