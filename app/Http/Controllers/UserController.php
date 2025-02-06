<?php

namespace App\Http\Controllers;

use App\Models\DetailJenisInformasi;
use App\Models\Infografis;
use App\Models\InformasiPublik;
use App\Models\KlasifikasiInformasi;
use App\Models\JenisInformasi;
use App\Models\AplikasiLayanan;


class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
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

    public function maklumat_pelayanan()
    {
        return view('user.pages.maklumat-pelayanan');
    }

    public function prosedur_permintaan_informasi_ppid_sumenep()
    {
        return view('user.pages.prosedur-permintaan-informasi-ppid-sumenep');
    }

    public function prosedur_pengajuan_keberatan_ppid_sumenep()
    {
        return view('user.pages.prosedur-pengajuan-keberatan-ppid-sumenep');
    }

    public function prosedur_sengketa_informasi_ppid_sumenep()
    {
        return view('user.pages.prosedur-sengketa-informasi-ppid-sumenep');
    }

    public function informasi_publik()
    {   
        $klasifikasi_informasi = KlasifikasiInformasi::all();
        $jenis_informasi = JenisInformasi::all();
        $detail_jenis_informasi = DetailJenisInformasi::all();
        $informasi_publik = InformasiPublik::all();
        return view('servant.informasi_public', compact('klasifikasi_informasi', 'jenis_informasi', 'detail_jenis_informasi', 'informasi_publik'));
    }
    
    public function infografis()
    {
        $klasifikasi_informasi = KlasifikasiInformasi::all();
        $jenis_informasi = JenisInformasi::all();
        $detail_jenis_informasi = DetailJenisInformasi::all();
        $infografis = Infografis::all();
        return view('servant.infografis', compact('klasifikasi_informasi', 'jenis_informasi', 'detail_jenis_informasi', 'infografis'));
    }

    public function aplikasi_layanan_publik()
    {   
        $aplikasi_layanan_publik = AplikasiLayanan::all();
        return view('servant.aplikasi-layanan-publik', compact('aplikasi_layanan_publik'));
    }
}
