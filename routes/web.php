<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilSMKNJController;
use App\Http\Controllers\ProgramSMKNJController;

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


Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('profil-smknj', [ProfilSMKNJController::class, 'index'])->name('smknj.index');
Route::get('visi-misi-smknj', [ProfilSMKNJController::class, 'vimisi'])->name('smknj.vimisi');
Route::get('identitas-smknj', [ProfilSMKNJController::class, 'identitas'])->name('smknj.identitas');

Route::get('program-keahlian', [ProgramSMKNJController::class, 'keahlian'])->name('program.keahlian');

// alumni

Route::get('galeri-video', [GaleriController::class, 'video'])->name('galeri.video');

Route::get('daftar-berita', [BeritaController::class, 'index'])->name('berita-sekolah');
Route::get('detail-berita/{id}', [BeritaController::class, 'detail_berita'])->name('detail-berita');

Route::get('kontak', function () {
    return view('kontak');
})->name('kontak_kami');
