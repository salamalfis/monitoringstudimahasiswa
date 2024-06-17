<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DosenWaliController;
use App\Http\Controllers\PermissionController;
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
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login'])->name('login');
    Route::get('/forgot-password', [ResetController::class, 'index'])->name('forgot-password');
    Route::post('/forgot-password', [ResetController::class, 'sendEmail'])->name('forgot-password');
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::get('/register', [RegisterController::class, 'index']);

    // #Prodi
    // Route::get('/register-prodi', [RegisterController::class, 'registerProdi'])->name('registerprodi');
    // Route::post('/register-prodi', [RegisterController::class, 'storeprodi'])->name('storeprodi');

    #Dosenwali
    // Route::get('/register-dosen-wali', [RegisterController::class, 'registerDosenWali'])->name('registerdosenwali');
    // Route::post('/register-dosen-wali', [RegisterController::class, 'storeDosenWali'])->name('storedosenwali');

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

    #Prodi
    Route::get('/program-studi', [ProgramStudiController::class, 'index'])->name('programstudi');

    #dosenWaliRouteAuth
    Route::get('/dosen-wali', [DosenWaliController::class, 'index'])->name('dosenwali');
    Route::post('/dosen-wali', [DosenWaliController::class, 'inputdosenwali'])->name('dosenwali');

    #menu


    Route::get('/menu',[MenuController::class, 'index'])->name('menu');

    Route::get('/tambah-menu',[MenuController::class, 'tambahmenu'])->name('menu');
    Route::post('/tambah-menu',[MenuController::class, 'registermenu'])->name('menu');

    Route::get('/edit-menu/{id}', [MenuController::class, 'editmenu'])->name('edit-menu');
    Route::put('/edit-menu/{id}',[MenuController::class, 'updatemenu'])->name('menu');

    Route::delete('/delete-menu/{id}',[MenuController::class, 'deletemenu'])->name('menu');


    #submenuRouteAuth
    Route::get('/sub-menu',[MenuController::class, 'submenu'])->name('submenu');
    Route::get('/tambah-sub-menu',[MenuController::class, 'tambahsubmenu'])->name('submenu');
    Route::post('/tambah-sub-menu',[MenuController::class, 'registersubmenu'])->name('submenu');

    Route::get('/edit-sub-menu/{id}',[MenuController::class, 'editsubmenu'])->name('submenu');
    Route::put('/edit-sub-menu/{id}',[MenuController::class, 'updatesubmenu'])->name('submenu');

    Route::delete('/delete-sub-menu/{id}',[MenuController::class, 'deletesubmenu'])->name('submenu');





    #Kelas
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
    Route::post('/kelas', [KelasController::class, 'inputkelas'])->name('kelas');

    #Approval
    Route::get('/approval-user', [ApprovalController::class, 'index'])->name('Aproval');


    #Permission
    Route::get('/permission', [PermissionController::class, 'index'])->name('permission');

    Route::get('/assign-permission', [PermissionController::class, 'assignpermission'])->name('assignpermission');

    #Roles
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');
    Route::post('/roles', [RoleController::class, 'storeRole'])->name('roles');
    Route::get('/assign-role', [RoleController::class, 'assignrole'])->name('assignrole');



   });








