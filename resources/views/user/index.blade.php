@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
    <div class="container">
        <!-- Hero Section -->
        <div class="jumbotron text-center bg-light my-4 py-5">
            <h1 class="display-4">Selamat Datang di PPID Sumenep</h1>
            <p class="lead">Pejabat Pengelola Informasi dan Dokumentasi Kabupaten Sumenep</p>
            <hr class="my-4">
            <p>Akses informasi publik dengan mudah dan transparan</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Permohonan Informasi</a>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-center mb-4">Layanan Kami</h2>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-file-alt fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Permohonan Informasi</h5>
                        <p class="card-text">Ajukan permohonan informasi publik secara online</p>
                        <a href="#" class="btn btn-outline-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-bar fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Data & Statistik</h5>
                        <p class="card-text">Lihat data dan statistik informasi publik</p>
                        <a href="#" class="btn btn-outline-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-newspaper fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Berita Terkini</h5>
                        <p class="card-text">Update informasi dan berita terbaru</p>
                        <a href="#" class="btn btn-outline-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-center mb-4">Informasi Terbaru</h2>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Pengumuman</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="#">Pengumuman Layanan PPID Tahun 2023</a>
                            </li>
                            <li class="mb-2">
                                <a href="#">Jadwal Pelayanan PPID</a>
                            </li>
                            <li class="mb-2">
                                <a href="#">Prosedur Permohonan Informasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Berita Terkini</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="#">Launching Website PPID Sumenep</a>
                            </li>
                            <li class="mb-2">
                                <a href="#">Sosialisasi Keterbukaan Informasi Publik</a>
                            </li>
                            <li class="mb-2">
                                <a href="#">Pelatihan Admin PPID</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
