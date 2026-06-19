<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [AboutController::class, 'index'])->name('about');
Route::get('/kegiatan', [ActivityController::class, 'index'])->name('activity.index');
Route::get('/proker', [ProgramController::class, 'index'])->name('program.index');
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/struktur-organisasi', [OrganizationController::class, 'index'])->name('organization.index');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');
