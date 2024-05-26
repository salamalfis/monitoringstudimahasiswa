<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
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

Route::group(['middleware' => 'guest'], function () {

    Route::get('/', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login'])->name('login');
    Route::get('/forgot-password', [ResetController::class, 'index'])->name('forgot-password');
    Route::post('/forgot-password', [ResetController::class, 'sendEmail'])->name('forgot-password');
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::get('/register', [RegisterController::class, 'index']);
    
    // #Prodi
    // Route::get('/register-prodi', [RegisterController::class, 'registerProdi'])->name('registerprodi');
    // Route::post('/register-prodi', [RegisterController::class, 'storeprodi'])->name('storeprodi');

    #Dosenwali
    Route::get('/register-dosen-wali', [RegisterController::class, 'registerDosenWali'])->name('registerdosenwali');
    Route::post('/register-dosen-wali', [RegisterController::class, 'storeDosenWali'])->name('storedosenwali');

    #Mahasiswa
    Route::get('/register-mahasiswa', [RegisterController::class, 'registerMahasiswa'])->name('registermahasiswa');
    Route::post('/register-mahasiswa', [RegisterController::class, 'storeMahasiswa'])->name('storemahasiswa');
});

Route::group(['middleware' => 'auth'],function () {

    #sessionRouteAuth
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [SessionController::class, 'dashboard'])->name('dashboard');

    #ProfileRouteAuth
    Route::get('/profile/{id}',[ProfileController::class, 'index'])->name('profile');


    #Mahasiswa

   });


