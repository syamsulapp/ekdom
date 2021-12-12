<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\Pertanyaan;
use \App\Http\Controllers\Admin\crud_users\UsersManagement;
use App\Http\Controllers\Admin\jurusan\Jurusan;
use App\Http\Controllers\Admin\Kategori_evaluasi;

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

/** BEGIN:: routes untuk frontend */
Route::get('/', function () {
    return view('welcome');
});
/** END:: routes untuk frontend */
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('roledosen', 'rolemahasiswa');;

    /** routes untuk crud pertanyaan */
    Route::get('/pertanyaan', [Pertanyaan::class, 'index'])->name('allPertanyaan')->middleware('roledosen', 'rolemahasiswa');
    Route::get('/form_pertanyaan', [Pertanyaan::class, 'create'])->name('formPertanyaan')->middleware('roledosen', 'rolemahasiswa');
    Route::post('/tambah_pertanyaan', [Pertanyaan::class, 'store'])->name('addPertanyaan')->middleware('roledosen', 'rolemahasiswa');
    Route::get('/edit_pertanyaan/{edit_data}/edit', [Pertanyaan::class, 'edit'])->name('editPertanyaan')->middleware('roledosen', 'rolemahasiswa');
    Route::put('/update_data/{datalama}/ubah', [Pertanyaan::class, 'update'])->name('updatePertanyaan')->middleware('roledosen', 'rolemahasiswa');
    Route::delete('/hapus_data/{hapusData}/delete', [Pertanyaan::class, 'delete'])->name('deletePertanyaan')->middleware('roledosen', 'rolemahasiswa');
    // routes import pertanyaan
    Route::post('/imports_pertanyaan',[Pertanyaan::class , 'imports'])->name('imports_pertanyaan')->middleware('roledosen', 'rolemahasiswa');

    // users management
    Route::get('/users_view', [UsersManagement::class, 'index'])->name('lihat_users')->middleware('roledosen', 'rolemahasiswa');
    Route::get('/users_tambah', [UsersManagement::class, 'create'])->name('form_users')->middleware('roledosen', 'rolemahasiswa');
    Route::post('/users_insert', [UsersManagement::class, 'store'])->name('addUsers')->middleware('roledosen', 'rolemahasiswa');
    Route::get('/users/{edit_data}/edit', [UsersManagement::class, 'edit'])->name('edit_users')->middleware('roledosen', 'rolemahasiswa');
    Route::put('/users/{datalama}/update', [UsersManagement::class, 'update'])->middleware('roledosen', 'rolemahasiswa');
    Route::delete('/users/{hapus_data}/delete', [UsersManagement::class, 'destroy'])->middleware('roledosen', 'rolemahasiswa');
    // import data users
    Route::post('/import_akun_users', [UsersManagement::class, 'import_users'])->name('importData')->middleware('roledosen', 'rolemahasiswa');

    /** crud kategori  */
    Route::get('/kategori_evaluasi/view', [Kategori_evaluasi::class, 'index'])->middleware('roledosen', 'rolemahasiswa')->name('kategori-evaluasi');
    Route::get('/kategori_evaluasi/forms', [Kategori_evaluasi::class, 'create'])->middleware('roledosen', 'rolemahasiswa')->name('kategori-evaluasi-forms');
    Route::post('/kategori_evaluasi/insert', [Kategori_evaluasi::class, 'store'])->middleware('roledosen', 'rolemahasiswa')->name('kategori-evaluasi-insert');
    Route::get('/kategori_evaluasi/{edit}/edit', [Kategori_evaluasi::class, 'edit'])->middleware('roledosen', 'rolemahasiswa');
    Route::put('/kategori_evaluasi/{datalama}/update', [Kategori_evaluasi::class, 'update'])->middleware('roledosen', 'rolemahasiswa');
    Route::delete('/kategori_evaluasi/{delete}/delete', [Kategori_evaluasi::class, 'destroy'])->middleware('roledosen', 'rolemahasiswa');

     /** crud jurusan */
    // routes jurusan
    Route::get('/jurusan/view',[Jurusan::class , 'index'])->name('jurusan')->middleware('roledosen', 'rolemahasiswa');
    Route::get('/jurusan/forms',[Jurusan::class , 'create'])->name('forms_jurusan')->middleware('roledosen', 'rolemahasiswa');
    Route::post('/jurusan/insert',[Jurusan::class , 'store'])->name('jurusan_insert')->middleware('roledosen', 'rolemahasiswa');
    Route::get('/jurusan/{edit}/edit',[Jurusan::class , 'edit'])->middleware('roledosen', 'rolemahasiswa');
    Route::put('/jurusan/{datalama}/update',[Jurusan::class , 'update'])->middleware('roledosen', 'rolemahasiswa');
    Route::delete('/jurusan/{hapus_data}/hapus',[Jurusan::class , 'destroy'])->middleware('roledosen', 'rolemahasiswa');

    // import jurusan
    Route::post('/jurusan/import/data',[Jurusan::class , 'import_jurusan'])->name('import_data_jurusan')->middleware('roledosen', 'rolemahasiswa');

});
Route::prefix('dosen')->group(function () {
    Route::get('/pertanyaan', [Pertanyaan::class, 'index'])->middleware('roleadmin', 'rolemahasiswa');
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('roleadmin', 'rolemahasiswa');
    Route::get('/form_pertanyaan', [Pertanyaan::class, 'create'])->middleware('roleadmin', 'rolemahasiswa');
    Route::post('/tambah_pertanyaan', [Pertanyaan::class, 'store'])->middleware('roleadmin', 'rolemahasiswa');

    // isi evaluasi prasarana dan tendik(tenaga pendidik)
});
Route::prefix('mahasiswa')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'mahasiswa'])->name('mahasiswaDashboard')->middleware('roleadmin', 'roledosen');
    // isi evaluasi kinerja dosen
});
require __DIR__ . '/auth.php';
