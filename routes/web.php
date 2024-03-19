<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\TambahUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index')->with('title', 'Home');
})->name('home');

Route::get('/tes-dashboard', function () {
    return view('tes-dashboard')->with('title', 'Test');
})->name('Test');

Route::get('/artikel', function () {
    return view('artikel')->with('title', 'Artikel');
})->name('artikel');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/kelola-userr', [RegisterController::class, 'index'])->name('kelola-user');
Route::post('/dashboard/kelola-userr', [RegisterController::class, 'store']);

Route::resource('/dashboard/kelola-user', TambahUserController::class);
Route::resource('/dashboard/admin', DashboardAdminController::class);
