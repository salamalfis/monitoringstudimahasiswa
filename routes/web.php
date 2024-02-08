<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MahasiswaController;

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
    Route::post('/', [SessionController::class, 'login'])->name('login');
    Route::get('/forgot-password', [ResetController::class, 'index'])->name('forgot-password');
    Route::post('/forgot-password', [ResetController::class, 'sendEmail'])->name('forgot-password');
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::get('/home', function () {
        return redirect('/dashboard');
    })->name('Dashboard');

});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('Dashboard');
    Route::get('/home', function () {
        return redirect('/dashboard');
    })->name('Dashboard');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/user', function () {
        return view('user');
    })->name('user');
    Route::get('/user', function () {
        return view('user.index');
    })->name('useredit');
    Route::get('/mata-kuliah', function () {
        return view('matakuliah.index');
    })->name('matakuliah');
    Route::get('/mata-kuliah-pilihan', function () {
        return view('matakuliah.pilihan');
    })->name('matakuliahs');
});

Route::get('/home', function () {
    return redirect('/dashboard');
})->name('Dashboard');
