<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAuth;
use App\Http\Controllers\AuthController;

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/visi-misi', [UserController::class, 'visi_misi'])->name('visi-misi');
Route::get('/tentang-ppid', [UserController::class, 'tentang_ppid'])->name('tentang-ppid');
Route::get('/dasar-hukum', [UserController::class, 'dasar_hukum'])->name('dasar-hukum');
Route::get('/tugas-dan-fungsi-ppid-sumenep', [UserController::class, 'tugas_dan_fungsi_ppid_sumenep'])->name('tugas-dan-fungsi-ppid-sumenep');
Route::get('/struktural-organisasi', [UserController::class, 'struktural_organisasi'])->name('struktural-organisasi');
Route::get('/informasi-public', [UserController::class, 'informasi_public'])->name('informasi-public');
Route::get('/informasi-grafis', [UserController::class, 'informasi_grafis'])->name('informasi-grafis');


// Auth
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// check auth
// Route::middleware(CheckAuth::class)->group(function () {
// });
