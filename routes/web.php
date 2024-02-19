<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SideBarController;
use App\Http\Controllers\DosenWaliController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProgramStudiController;

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




});

Route::group(['middleware' => 'auth'],function () {

    #sessionRouteAuth

    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [SessionController::class, 'dashboard'])->name('dashboard');


    #ProfileRouteAuth
    Route::get('/profile',[ProfileController::class, 'index'])->name('profile');

    #MahasiswaRouteAuth
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa');
    Route::post('/mahasiswa-create', [MahasiswaController::class, 'registermahasiswa'])->name('mahasiswa');

    #userRouteAuth
    Route::get('/user', [UserController::class, 'index'])->name('user');

    #menuRouteAuth
    Route::get('/menu',[MenuController::class, 'index'])->name('menu');
    Route::post('/menu-tambah',[MenuController::class, 'registermenu'])->name('menu');
    Route::post('/menu-edit',[MenuController::class, 'editmenu'])->name('menu');
    Route::post('/menu-delete',[MenuController::class, 'deletemenu'])->name('menu');


    #submenuRouteAuth
    Route::get('/sub-menu',[MenuController::class, 'submenu'])->name('submenu');
    Route::post('/sub-menu',[MenuController::class, 'registersubmenu'])->name('submenu');


    #roleRouteAuth


    #roleAksesRouteAuth


    #mataKuliahRouteAuth



    #mataKuliahPilihanRouteAuth


    #kelasRouteAuth
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
    Route::post('/kelas', [KelasController::class, 'inputkelas'])->name('kelas');


    #dosenWaliRouteAuth
    Route::get('/dosen-wali', [DosenWaliController::class, 'index'])->name('dosenwali');
    Route::post('/dosen-wali', [DosenWaliController::class, 'inputdosenwali'])->name('dosenwali');

    #programStudiRouteAuth




    Route::get('/mata-kuliah', function () {
        return view('matakuliah.index');
    })->name('matakuliah');
    Route::get('/mata-kuliah-pilihan', function () {
        return view('matakuliah.pilihan');
    })->name('matakuliahs');


    Route::post('/mata-kuliah', [MataKuliahController::class, 'inputmatkul'])->name('matakuliah');
    Route::post('/mata-kuliah-pilihan', [MataKuliahController::class, 'inputmatkulpilihan'])->name('matakuliahs');
    Route::get('/mata-kuliah-pilihan', [MataKuliahController::class, 'matkul_pilihan'])->name('matakuliahs');
    Route::get('/mata-kuliah', [MataKuliahController::class, 'index'])->name('matakuliah');
    Route::get('/role', [RoleController::class, 'index'])->name('role');
    Route::post('/role', [RoleController::class, 'registerrole'])->name('role');
    Route::get('/role-akses', [RoleController::class, 'assignrole'])->name('role');
    Route::post('/role-akses', [RoleController::class, 'assignrole'])->name('role');
    Route::get('/program-studi', [ProgramStudiController::class, 'index'])->name('programstudi');



});


