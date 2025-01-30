@extends('app')

@section('title', 'Register PPID Sumenep')

@section('content')
    <div class="my-40">
        <div class="max-w-screen-sm mx-auto">
            <div class="flex justify-center h-16 md:h-28 p-1">
                <img src="{{ asset('logo/logo_ppid.png') }}" alt="logo_ppid" class="h-full"><span
                    class="border-l-4 md:border-l-8-2 border-black"></span>
                <h1 class="flex flex-col justify-center w-fit md:text-3xl font-bold ml-4">
                    <span>Sistem Informasi dan</span>
                    <span>Dokumentasi Publik</span>
                </h1>
            </div>
            <div class="w-full bg-red-700 mt-10 py-10 pb-20 px-10 md:px-20 rounded-sm">
                <h1 class="text-2xl font-bold text-center text-white">DAFTAR</h1>
                <form action="POST">
                    @csrf
                    <div class="flex flex-col mt-4">
                        <label for="perangkat_desa" class="text-white mb-1">Pilih Nama Perangkat Desa</label>
                        <input type="text" name="perangkat_desa" id="perangkat_desa"
                            class="p-2 border-2 border-red-800 rounded">
                    </div>
                    <div class="flex flex-col mt-4">
                        <label for="username" class="text-white mb-1">Operator PPID</label>
                        <input type="text" name="username" id="username" class="p-2 border-2 border-red-800 rounded">
                    </div>
                    <div class="flex flex-col mt-4">
                        <label for="nomor" class="text-white mb-1">Nomor Whatsapp</label>
                        <input type="text" name="nomor" id="nomor" class="p-2 border-2 border-red-800 rounded">
                    </div>
                    <div class="flex flex-col mt-4">
                        <label for="email" class="text-white mb-1">Email</label>
                        <input type="email" name="email" id="email" class="p-2 border-2 border-red-800 rounded">
                    </div>
                    <div class="flex flex-col mt-4">
                        <label for="file" class="text-white mb-1">Upload Surat Tugas</label>
                        <input type="file" name="file" id="file"
                            class="p-2 border border-white rounded bg-red-700 text-white cursor-pointer">
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="w-full py-3 bg-red-400 border-2 border-red-400 text-white rounded font-bold md:text-xl hover:bg-red-500">Daftar</button>
                    </div>
                    <p class="text-white mt-10 text-center"> Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-white text-center mt-4 underline hover:text-red-200">
                            Login Sekarang</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
