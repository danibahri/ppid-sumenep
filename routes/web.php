<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});

Route::get('/visi-misi', function () {
    return view('user.pages.visi-misi');
});

Route::get('/tentang-ppid', function () {
    return view('user.pages.tentang-ppid');
});

Route::get('/dasar-hukum', function () {
    return view('user.pages.dasar-hukum');
});

Route::get('/tugas-dan-fungsi-ppid-sumenep', function () {
    return view('user.pages.tugas-dan-fungsi-ppid-sumenep');
});


Route::get('/stuktural-organisasi', function () {
    return view('user.pages.stuktural-organisasi');
});
