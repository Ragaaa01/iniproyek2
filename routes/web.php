<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutdoorController;
use App\Http\Requests\Admin\OutdoorStoreRequests;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [HomeController::class, 'kontakStore'])->name('kontak_store');
Route::get('/detail', [HomeController::class, 'detail'])->name('detail');

//Admin Route
Route::get('admin/dashboard', [admDashboardController::class, 'index'])->middleware('is_admin');
Route::get('admin/outdoor', [OutdoorController::class, 'index']);
Route::get('admin/outdoor/create', [OutdoorController::class, 'create'])->name('outdoor_create');
Route::post('admin/outdoor/store', [OutdoorController::class, 'store'])->name('outdoor_store');
Auth::routes();


