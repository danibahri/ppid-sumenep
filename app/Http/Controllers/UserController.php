<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function visi_misi()
    {
        return view('user.pages.visi-misi');
    }

    public function tentang_ppid()
    {
        return view('user.pages.tentang-ppid');
    }

    public function dasar_hukum()
    {
        return view('user.pages.dasar-hukum');
    }

    public function tugas_dan_fungsi_ppid_sumenep()
    {
        return view('user.pages.tugas-dan-fungsi-ppid-sumenep');
    }

    public function struktural_organisasi()
    {
        return view('user.pages.stuktural-organisasi');
    }
    
}
