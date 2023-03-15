<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArsipController;



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
    return view('home');
});
Route::get('/berkas', function () {
    return view('berkas');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});


Route::get('/rekap-absensi', function () {
    return view('rekap-absensi');
});

//crud berkas
Route::post('/berkas', [App\Http\Controllers\ArsipController::class, 'store'])->name('berkas.store');


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware('auth');

// Route::get('/user-profile', [UserDataController::class, 'edit'])->middleware('auth');
Route::patch('/user-profile/{id}', [ProfileController::class, 'update'])->name('update');
Route::get('/user-management', [UserDataController::class, 'index'])->middleware('auth');
Route::get('/edit-user/{id}', [UserDataController::class, 'edit']);
Route::patch('/update-user/{id}', [UserDataController::class, 'update'])->name('update');

