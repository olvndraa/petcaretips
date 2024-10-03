<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

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


Route::get('/', function () {
    return view('petcaretips');
});
Route::get('/auth', [UserController::class,'authentication']);
Route::post('/login', [UserController::class,'login']);
Route::get('/login', [UserController::class,'loginn']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/petcaretips', [UserController::class, 'home']);
Route::get('/kucing', [UserController::class, 'kucing']);
Route::get('/anjing', [UserController::class, 'anjing']);
Route::get('/kelinci', [UserController::class, 'kelinci']);
Route::get('/hamster', [UserController::class, 'hamster']);
Route::get('/burung', [UserController::class, 'burung']);
Route::get('/raskucing', [UserController::class, 'raskucing']);
Route::get('/rasanjing', [UserController::class, 'rasanjing']);
Route::get('/raskelinci', [UserController::class, 'raskelinci']);
Route::get('/rashamster', [UserController::class, 'rashamster']);
Route::get('/rasburung', [UserController::class, 'rasburung']);
Route::get('/namakucing', [UserController::class, 'nama']);
Route::get('/namaanjing', [UserController::class, 'namaanjing']);
Route::get('/namaburung', [UserController::class, 'namaburung']);
Route::get('/namahamster', [UserController::class, 'namahamster']);
Route::get('/namakelinci', [UserController::class, 'namakelinci']);
Route::get('/artikelkucing2', [UserController::class, 'artikelkucing2']);
Route::get('/artikelanjing', [UserController::class, 'artikelanjing']);
Route::get('/artikelkelinci', [UserController::class, 'artikelkelinci']);
Route::get('/artikelburung', [UserController::class, 'artikelburung']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/artikel', [UserController::class, 'artikel']);
// Route::get('/artikel', [UserController::class, 'artikel']);
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/admin/dashboard', [ArtikelController::class, 'index'])->name('admin.dashboard');
Route::get('/artikelkucing{id}', [ArtikelController::class, 'indexx']);
Route::get('/artikel/kucing{id}', [ArtikelController::class, 'showPublished'])->name('artikel.show');
// Route::get('/admin/artikel/create', [ArtikelController::class, 'create'])->name('admin.artikel.create');
// Route::post('/admin/artikel/store', [ArtikelController::class, 'store'])->name('admin.artikel.store');
// Route::get('/admin/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
// Route::get('/admin/artikel/{id}', [ArtikelController::class, 'show'])->name('admin.artikel.show');
// Route::get('/admin/artikel', [ArtikelController::class, 'index'])->name('admin.artikel.index');
// Route::get('/artikel/{id}', [ArtikelController::class, 'showPublished'])->name('artikel.show');
// Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('admin.artikel.show');
// Route::put('/admin/artikel/{id}', [ArtikelController::class, 'update'])->name('admin.artikel.update');
// Route::delete('/admin/artikel/{id}', [ArtikelController::class, 'destroy'])->name('admin.artikel.destroy');
Route::prefix('admin')->group(function () {
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('admin.artikel.index');
    Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('admin.artikel.create');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('admin.artikel.store');
    Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('admin.artikel.show');
    // Route::get('/artikelkucing{id}', [ArtikelController::class, 'show'])->name('admin.artikel.show');
    Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
    Route::put('/artikel/{id}', [ArtikelController::class, 'update'])->name('admin.artikel.update');
    Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])->name('admin.artikel.destroy');
});




















