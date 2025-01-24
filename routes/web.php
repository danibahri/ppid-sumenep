<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/visi-misi', [UserController::class, 'visi_misi'])->name('visi-misi');
Route::get('/tentang-ppid', [UserController::class, 'tentang_ppid'])->name('tentang-ppid');
Route::get('/dasar-hukum', [UserController::class, 'dasar_hukum'])->name('dasar-hukum');
Route::get('/tugas-dan-fungsi-ppid-sumenep', [UserController::class, 'tugas_dan_fungsi_ppid_sumenep'])->name('tugas-dan-fungsi-ppid-sumenep');
Route::get('/struktural-organisasi', [UserController::class, 'struktural_organisasi'])->name('struktural-organisasi');

// Auth
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
