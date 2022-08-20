<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\Admin\AdminDataTes;
use App\Http\Controllers\User\UserDashboard;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\LandingpageController;

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


Route::group(['middleware' => 'guest'], function () {
	Route::post('/post_login', [AuthController::class, 'post_login']);
	Route::get('/', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth', 'Ceklevel:superadmin'], function () {
	Route::post('admin/dashboard/delete', [AdminDataTes::class, 'delete']);
	Route::post('admin/dashboard/update', [AdminDataTes::class, 'update']);
	Route::post('admin/dashboard/store', [AdminDataTes::class, 'store']);
	Route::post('admin/berita/store', [BeritaController::class, 'update']);
	Route::get('admin/dashboard/change/{id}', [AdminDataTes::class, 'change']);
	Route::get('admin/dashboard/add', [AdminDataTes::class, 'add']);
	Route::get('admin/dashboard', [AdminDataTes::class, 'dashboard']);

	Route::get('/user/admin/dashboard/checkSlug', [BeritaController::class], 'checkSlug');
	Route::get('admin/publikasi', [UserDashboard::class, 'publikasi']);
	Route::get('admin/agenda', [UserDashboard::class, 'agenda']);

	Route::get('/berita/{id}', [BeritaController::class, 'berita']);

	Route::get('admin/banner/', [UserDashboard::class, 'banner']);
	Route::get('admin/profil/', [ProfilController::class, 'index']);
	Route::get('/profilpimpinan', [LandingpageController::class, 'index']);
	Route::get('/siswa', [LandingpageController::class, 'siswa']);
	Route::get('/gurustaff', [LandingpageController::class, 'guru']);

	Route::get('/landingpage', [LandingpageController::class, 'index']);
	Route::get('/sejarah', [LandingpageController::class, 'sejarah']);
	Route::get('/beranda', [LandingpageController::class, 'index']);
	Route::get('/visimisi', [LandingpageController::class, 'visi']);
	Route::get('/ekskul', [LandingpageController::class, 'ekskul']);
	Route::get('/profilpimpinan', [LandingpageController::class, 'profilpimpinan']);
	Route::get('/sarpras', [LandingpageController::class, 'sarpras']);


	Route::get('/admin/ubah{id}', [UserDashboard::class, 'edit']);
	Route::delete('publikasi/{id}', [UserDashboard::class, 'delete']);
	Route::delete('/hapus/{id}', [UserDashboard::class, 'hapus']);
	Route::put('/updateberita/{id}', [UserDashboard::class, 'store']);
	Route::delete('/berita/{id}', [BeritaController::class, 'destroy']);
	Route::get('/editagenda/{id}', [UserDashboard::class, 'editagenda']);
	Route::post('show/{id}', [UserDashboard::class, 'show']);
	Route::get('add/agenda', [UserDashboard::class, 'tambah']);
	Route::get('admin/dashboard/tambah/', [UpdateController::class, 'update']);
	Route::get('admin/dashboard/agenda/', [UpdateController::class, 'tambah']);
	Route::put('admin/dashboard/update/{id}', [UpdateController::class, 'store']);
	Route::post('/admin/dashboard/tagenda', [UpdateController::class, 'tagenda']);
	Route::post('/admin/dashboard/tbanner/', [BannerController::class, 'store']);
	Route::get('/admin/dashboard/tbhbanner/', [BannerController::class, 'index']);

	Route::delete('/hapusbaner/{id}', [BannerController::class, 'destroy']);

	Route::resource('/profil', ProfilController::class);
});

Route::post('/logout', [AuthController::class, 'logout']);


Route::group(['middleware' => ['auth', 'Ceklevel:admin,superadmin']], function () {

	Route::get('/landingpage', [LandingpageController::class, 'index']);
});
