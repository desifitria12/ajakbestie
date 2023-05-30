<?php

use App\Http\Controllers\UserAkunController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\FaktorController;
use App\Http\Controllers\InfromasiJabatanController;
use App\Http\Controllers\ManajerialController;
use App\Http\Controllers\AnalisisJabatanController;
use App\Http\Controllers\BebanKerjaController;
use App\Http\Controllers\BiodataJabatanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KompetensiJabatanController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\KompetensiTeknisController;
use App\Http\Controllers\KorelasiJabatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PetaJabatanController;
use App\Models\Dinas;

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

// testing

Route::get('/', [FirstController::class, 'index'])->name('beranda');
Route::get('/tentang', [FirstController::class, 'tentang'])->name('tentang');
// Route::get('kontak', [FirstController::class, 'kontak'])->name('kontak');
Route::get('login', [FirstController::class, 'login'])->name('login');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('upgrade', function () {
//     return view('pages.upgrade');
// })->name('upgrade');
// Route::get('map', function () {
//     return view('pages.maps');
// })->name('map');
// Route::get('icons', function () {
//     return view('pages.icons');
// })->name('icons');
// Route::get('table-list', function () {
//     return view('pages.tables');
// })->name('table');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);


    // Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::group(['middleware' => 'role:superadmin'], function () {
        Route::resource('dinas', DinasController::class)->except(['create', 'show', 'edit']);

        Route::get('/faktor-jabatan', [FaktorController::class, 'index']);
        // Route::get('/faktor-jabatan-struktural', [FaktorController::class, 'indexstruktural']);
        // Route::get('/create-faktor-struktural', [FaktorController::class, 'createstruktural']);
        Route::get('/create-faktor', [FaktorController::class, 'create']);
        Route::post('/insert-faktor', [FaktorController::class, 'store']);
        Route::delete('/faktor-jabatan/{id}', [FaktorController::class, 'destroy']);
        Route::put('/faktor-jabatan/{id}', [FaktorController::class, 'update']);

        Route::get('/manajerial', [ManajerialController::class, 'index']);
        Route::put('/manajerial/{id}', [ManajerialController::class, 'update']);
        Route::post('/manajerial', [ManajerialController::class, 'store']);
        Route::delete('/manajerial/{id}', [ManajerialController::class, 'destroy']);
    });
    Route::group(['middleware' => 'roleSA'], function () {

        Route::get('/users', [UserAkunController::class, 'index']);
        Route::delete('/users/{id}', [UserAkunController::class, 'delete']);
        Route::get('/create-user', [UserAkunController::class, 'create']);
        Route::post('/insert-user', [UserAkunController::class, 'insert']);
        Route::put('/users/{id}', [UserAkunController::class, 'update']);

        Route::resource('jabatan', JabatanController::class)->except(['index']);
        Route::get('/jabatan-pelaksana', [JabatanController::class, 'pelaksana'])->name('pelaksana');
        Route::get('/jabatan-fungsional', [JabatanController::class, 'fungsional'])->name('fungsional');
        Route::get('/jabatan-struktural', [JabatanController::class, 'struktural'])->name('struktural');
        Route::get('/tambah-jabatan', [JabatanController::class, 'create']);

        Route::resource('/informasi-faktor', InfromasiJabatanController::class)->except(['create', 'show', 'index', 'store']);
        Route::get('/informasi-faktor-jabatan-struktural', [InfromasiJabatanController::class, 'struktural'])->name('informasi-faktor-struktural');
        Route::get('/informasi-faktor-jabatan-pelaksana', [InfromasiJabatanController::class, 'pelaksana'])->name('informasi-faktor-pelaksana');
        Route::get('/informasi-faktor-jabatan-fungsional', [InfromasiJabatanController::class, 'fungsional'])->name('informasi-faktor-fungsional');
        // Route::get('/informasi-faktor/{id}/edit', [InfromasiJabatanController::class, 'edit'])->name('informasi-faktor-edit');

        Route::get('/standar-kompetensi-jabatan-struktural', [KompetensiJabatanController::class, 'struktural']);
        Route::get('/standar-kompetensi-jabatan-pelaksana', [KompetensiJabatanController::class, 'pelaksana']);
        Route::get('/standar-kompetensi-jabatan-fungsional', [KompetensiJabatanController::class, 'fungsional']);
        Route::resource('/standar-kompetensi', KompetensiJabatanController::class)->except(['create', 'show', 'index', 'store']);
    });

    Route::resource('/analisis_jabatan', AnalisisJabatanController::class)->except(['show', 'create']);
    Route::post('/ambil-data-jabatan', [AnalisisJabatanController::class, 'datajabatan'])->name('datajabatan');
    Route::post('/ambil-code-jabatan', [AnalisisJabatanController::class, 'getcodeparent'])->name('getcodeparent');
    Route::post('/ambil-code-child', [AnalisisJabatanController::class, 'getcodechild'])->name('getcodechild');
    Route::post('/analisis_jabatan_child', [AnalisisJabatanController::class, 'storechild'])->name('storechild');


    Route::resource('/analisis_korelasi', KorelasiJabatanController::class)->except(['show', 'create', 'store']);
    Route::resource('/analisis_beban_kerja', BebanKerjaController::class)->except(['show', 'create', 'store']);
    Route::resource('/analisis_kompetensi_teknis', KompetensiTeknisController::class)->except(['show', 'create', 'store']);
    Route::resource('/biodata_jabatan', BiodataJabatanController::class)->except(['show', 'create', 'store']);

    Route::get('/laporan-informasi/{kode_jabatan}', [LaporanController::class, 'informasiJabatan'])->name('laporaninformasi');
    Route::get('/laporan-faktor/{kode_jabatan}', [LaporanController::class, 'faktorJabatan'])->name('laporanfaktor');
    Route::get('/laporan-kompetensi/{kode_jabatan}', [LaporanController::class, 'standarkompetensi'])->name('laporankompetensi');
    Route::get('/laporan-informasi-jabatan', [LaporanController::class, 'indexinformasijabatan']);
    Route::get('/laporan-faktor-jabatan', [LaporanController::class, 'indexfaktorjabatan']);
    Route::get('/laporan-kompetensi-jabatan', [LaporanController::class, 'indexkompetensijabatan']);
    Route::get('/laporan-rekap', [LaporanController::class, 'indexrekapabk']);
    Route::get('/cetak-laporan-rekap', [LaporanController::class, 'rekapitulasi']);
    Route::get('/laporan-biodata', [LaporanController::class, 'indexrekapbiodatajabatan']);
    Route::get('/detail_rekap_biodata/{id}', [LaporanController::class, 'detailrekapbiodata']);
    Route::get('/cetak-laporan-biodata', [LaporanController::class, 'biodata']);
    Route::get('/peta-jabatan', [PetaJabatanController::class, 'index']);
    Route::get('/detail_peta/{id}', [PetaJabatanController::class, 'detail']);
    Route::get('/cetak-peta/{id}', [PetaJabatanController::class, 'peta']);
});
