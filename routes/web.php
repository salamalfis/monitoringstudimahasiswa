<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\MetlitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\LabRisetController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DosenWaliController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeminatanController;
use App\Http\Controllers\UndurDiriController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\TugasAkhirController;
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
    Route::post('/profile/{id}',[ProfileController::class, 'store'])->name('profile');

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
    Route::get('/detail-approval-user/{id}',[ApprovalController::class, 'detailapprovaluser'])->name('Aproval');
    Route::post('/approval-user', [ApprovalController::class, 'approve'])->name('Aproval');


    Route::get('/approval-metode-penelitian', [ApprovalController::class, 'approvalmetlit'])->name('Aproval');
    Route::post('/approval-metode-penelitian', [ApprovalController::class, 'inputapprovalmetlit'])->name('Aproval');
    Route::get('/approval-tugas-akhir', [ApprovalController::class, 'approvaltugasakhir'])->name('Aproval');
    Route::post('/approval-tugas-akhir', [ApprovalController::class, 'inputapprovaltugasakhir'])->name('Aproval');
    Route::get('/approval-undur-diri', [ApprovalController::class, 'approvalundurdiri'])->name('Aproval');
    Route::post('/approval-undur-diri', [ApprovalController::class, 'inputapprovalundurdiri'])->name('Aproval');




    #Permission
    Route::get('/permission', [PermissionController::class, 'index'])->name('permission');
    Route::get('/tambah-permission',[PermissionController::class, 'tambahpermission'])->name('permission');
    Route::post('/tambah-permission',[PermissionController::class, 'storePermission'])->name('permission');

    Route::get('/edit-permission/{id}',[PermissionController::class, 'editPermission'])->name('permission');
    Route::put('/edit-permission/{id}', [PermissionController::class, 'updatePermission'])->name('permission');

    Route::delete('/delete-permission/{id}', [PermissionController::class, 'deletePermission'])->name('permission');

    Route::post('/permission-roles/{id}', [PermissionController::class, 'assignpermissionrole'])->name('assignpermission');
    Route::delete('/delete-permission-roles/{id}/{idpermission}', [PermissionController::class, 'deletepermissionrole'])->name('assignpermission');


    #Roles
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');
    Route::get('/tambah-role',[RoleController::class, 'tambahrole'])->name('roles');
    Route::post('/tambah-role', [RoleController::class, 'storeRole'])->name('roles');

    Route::get('/edit-role/{id}', [RoleController::class, 'editRole'])->name('roles');
    Route::put('/edit-role/{id}', [RoleController::class, 'updateRole'])->name('roles');

    Route::delete('/delete-role/{id}', [RoleController::class, 'deleteRole'])->name('roles');

    Route::post('/roles-permission/{id}', [RoleController::class, 'assignpermision'])->name('roles');

    Route::delete('/delete-roles-permission/{id}/{idrole}', [RoleController::class, 'deleterolepermission'])->name('roles');


    #undur diri

    Route::get('/undur-diri', [UndurDiriController::class, 'index'])->name('undurdiri');
    Route::post('/undur-diri', [UndurDiriController::class, 'inputundurdiri'])->name('undurdiri');
    Route::get('/approval-undur-diri',[UndurDiriController::class,'approvalundur'])->name('undurdiri');
    Route::get('/alasan-undur-diri', [UndurDiriController::class, 'alasanundurdiri'])->name('alasanundurdiri');
    Route::get('/tambah-alasan-undur-diri', [UndurDiriController::class, 'tambahalasanundurdiri'])->name('alasanundurdiri');
    Route::post('/tambah-alasan-undur-diri', [UndurDiriController::class, 'storealasanundurdiri'])->name('alasanundurdiri');
    Route::get('edit-alasan-undur-diri/{id}', [UndurDiriController::class, 'editalasan'])->name('alasanundurdiri');
    Route::put('edit-alasan-undur-diri/{id}', [UndurDiriController::class, 'updatealasan'])->name('alasanundurdiri');
    Route::delete('/delete-alasan-undur-diri/{id}', [UndurDiriController::class, 'deletealasan'])->name('alasanundurdiri');


   #dosen
   Route::get('/dosen',[RegisterController::class, 'dosen'])->name('dosen');

   #labriset
   Route::get('/lab-riset',[LabRisetController::class, 'index'])->name('labriset');
    Route::get('/tambah-lab-riset',[LabRisetController::class, 'tambahlabriset'])->name('labriset');
    Route::post('/tambah-lab-riset',[LabRisetController::class, 'storelabriset'])->name('labriset');
    Route::get('/edit-lab-riset/{id}',[LabRisetController::class, 'editlabriset'])->name('labriset');
    Route::put('/edit-lab-riset/{id}',[LabRisetController::class, 'updatelabriset'])->name('labriset');
    Route::delete('/delete-lab-riset/{id}',[LabRisetController::class, 'deletelabriset'])->name('labriset');
    

   #Mahasiswa
   Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa');

   #Kelas
   Route::get('/kelas',[KelasController::class, 'index'])->name('kelas');
   Route::get('tambah-kelas',[KelasController::class, 'tambahkelas'])->name('kelas');
   Route::post('/tambah-kelas', [KelasController::class, 'storekelas'])->name('kelas');
    Route::get('/edit-kelas/{id}',[KelasController::class, 'editkelas'])->name('kelas');
    Route::put('/edit-kelas/{id}',[KelasController::class, 'updatekelas'])->name('kelas');
    Route::delete('/delete-kelas/{id}',[KelasController::class, 'deletekelas'])->name('kelas');


   #Peminatan
   Route::get('/peminatan',[PeminatanController::class, 'index'])->name('peminatan');
    Route::get('/tambah-peminatan',[PeminatanController::class, 'tambahpeminatan'])->name('peminatan');
    Route::post('/tambah-peminatan',[PeminatanController::class, 'storepeminatan'])->name('peminatan');
    Route::get('/edit-peminatan/{id}',[PeminatanController::class, 'editpeminatan'])->name('peminatan');
    Route::put('/edit-peminatan/{id}',[PeminatanController::class, 'updatepeminatan'])->name('peminatan');
    Route::delete('/delete-peminatan/{id}',[PeminatanController::class, 'deletepeminatan'])->name('peminatan');

   #angkatan
   Route::get('/angkatan',[AngkatanController::class, 'index'])->name('angkatan');
    Route::get('/tambah-angkatan',[AngkatanController::class, 'tambahangkatan'])->name('angkatan');
    Route::post('/tambah-angkatan',[AngkatanController::class, 'storeangkatan'])->name('angkatan');
    Route::get('/edit-angkatan/{id}',[AngkatanController::class, 'editangkatan'])->name('angkatan');
    Route::put('/edit-angkatan/{id}',[AngkatanController::class, 'updateangkatan'])->name('angkatan');
    Route::delete('/delete-angkatan/{id}',[AngkatanController::class, 'deleteangkatan'])->name('angkatan');

   #metode penelitian
   Route::get('/anggota-kelompok-metode-penelitian',[MetlitController::class, 'index'])->name('metlit');
    Route::post('/anggota-kelompok-metode-penelitian',[MetlitController::class, 'inputmetlit'])->name('metlit');
    Route::get('/bimbingan-metode-penelitian',[MetlitController::class, 'bimbinganmetlit'])->name('metlit');
    Route::post('/bimbingan-metode-penelitian',[MetlitController::class, 'inputbimbinganmetlit'])->name('metlit');
    Route::get('/pilih-topik-metode-penelitian',[MetlitController::class, 'pilihtopikmetlit'])->name('metlit');
    Route::post('/pilih-topik-metode-penelitian',[MetlitController::class, 'inputpilihtopikmetlit'])->name('metlit');
    Route::get('/progress-metode-penelitian',[MetlitController::class, 'progressmetlit'])->name('metlit');
    Route::post('/progress-metode-penelitian',[MetlitController::class, 'inputprogressmetlit'])->name('metlit');
    Route::get('/topik-metode-penelitian',[MetlitController::class, 'topikmetlit'])->name('metlit');
    Route::post('/topik-metode-penelitian',[MetlitController::class, 'inputtopikmetlit'])->name('metlit');
    Route::get('/approval-metode-penelitian',[ApprovalController::class, 'approvalmetlit'])->name('metlit');

   #tugas akhir
    Route::get('/anggota-kelompok-tugas-akhir',[TugasAkhirController::class, 'index'])->name('tugasakhir');
     Route::post('/anggota-kelompok-tugas-akhir',[TugasAkhirController::class, 'inputtugasakhir'])->name('tugasakhir');
     Route::get('/bimbingan-tugas-akhir',[TugasAkhirController::class, 'bimbingantugasakhir'])->name('tugasakhir');
     Route::post('/bimbingan-tugas-akhir',[TugasAkhirController::class, 'inputbimbingantugasakhir'])->name('tugasakhir');
     Route::get('/progress-tugas-akhir',[TugasAkhirController::class, 'progresstugasakhir'])->name('tugasakhir');
     Route::post('/progress-tugas-akhir',[TugasAkhirController::class, 'inputprogresstugasakhir'])->name('tugasakhir');
     Route::get('/topik-tugas-akhir',[TugasAkhirController::class, 'topiktugasakhir'])->name('tugasakhir');
     Route::post('/topik-tugas-akhir',[TugasAkhirController::class, 'inputtopiktugasakhir'])->name('tugasakhir');


    #user
    Route::get('/user',[UserController::class, 'index'])->name('user');
    Route::get('/assign-user/{iduser}',[UserController::class, 'assignuser'])->name('user');
    Route::post('/assign-user-role/{iduser}',[UserController::class, 'assignuserrole'])->name('user');
    Route::delete('/delete-user-role/{iduser}/{idrole}',[UserController::class, 'deleteuserrole'])->name('user');
    Route::post('/assign-user-permission/{iduser}',[UserController::class, 'assignuserpermission'])->name('user');
    Route::delete('/delete-user-permission/{iduser}/{idpermission}',[UserController::class, 'deleteuserpermission'])->name('user');

    Route::delete('/delete-user/{id}',[UserController::class, 'deleteuser'])->name('user');
});
