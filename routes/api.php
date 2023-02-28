<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post-pengumuman-paud', [\App\Http\Controllers\FrontendController::class, 'postPengumuman']);
Route::get('/post-berita-paud', [\App\Http\Controllers\FrontendController::class, 'postBerita']);
Route::get('/post-artikel-paud', [\App\Http\Controllers\FrontendController::class, 'postArtikel']);
Route::get('/post-kegiatan-paud', [\App\Http\Controllers\FrontendController::class, 'postKegiatan']);
Route::get('/post-artikel-detail-paud/{slug}', [\App\Http\Controllers\FrontendController::class, 'artikelJson']);
Route::get('/post-berita-detail-paud/{slug}', [\App\Http\Controllers\FrontendController::class, 'beritaJson']);
Route::get('/post-kegiatan-detail-paud/{slug}', [\App\Http\Controllers\FrontendController::class, 'kegiatanJson']);
Route::get('/post-pengumuman-detail-paud/{slug}', [\App\Http\Controllers\FrontendController::class, 'pengumumanJson']);
Route::get('/artikel-detail-paud/{slug}', [\App\Http\Controllers\FrontendController::class, 'artikel'])->name('detail-artikel');
Route::get('/berita-detail-paud/{slug}', [\App\Http\Controllers\FrontendController::class, 'berita'])->name('detail-berita');
Route::get('/kegiatan-detail-paud/{slug}', [\App\Http\Controllers\FrontendController::class, 'kegiatan'])->name('detail-kegiatan');
Route::get('/pengumuman-detail-paud/{slug}', [\App\Http\Controllers\FrontendController::class, 'pengumuman'])->name('detail-pengumuman');
Route::get('/post-pengumuman-prioritas-paud', [\App\Http\Controllers\FrontendController::class, 'postPengumumanPrioritas']);
Route::get('/post-berita-prioritas-paud', [\App\Http\Controllers\FrontendController::class, 'postBeritaPrioritas']);
Route::get('/post-artikel-prioritas-paud', [\App\Http\Controllers\FrontendController::class, 'postArtikelPrioritas']);
Route::get('/post-kegiatan-prioritas-paud', [\App\Http\Controllers\FrontendController::class, 'postKegiatanPrioritas']);
