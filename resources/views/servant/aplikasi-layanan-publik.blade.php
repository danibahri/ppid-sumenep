@extends('app')

@section('title', 'Aplikasi Layanan Publik')

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
        <div class="w-full bg-red-700 mt-10 p-4 px-20 h-100 rounded-sm">
            <h1 class="text-2xl font-bold text-center text-white">ADMIN PPID Pembantu</h1>
            <h2 class="text font-bold text-center text-white">Aplikasi Layanan Publik Dinas Komunikasi dan Informatika</h2>
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="flex flex-col mt-4">
                    <label for="username" class="text-white mb-1">Nama Aplikasi</label>
                    <input type="text" name="username" id="username" class="p-2 border border-gray-800 rounded"
                        placeholder="Nama Aplikasi">
                </div>
                <div class="flex flex-col mt-4">
                    <label for="username" class="text-white mb-1">Deskripsi Singkat tentang Aplikasi</label>
                    <textarea name="message" id="message" row="50   " class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        placeholder="Deskripsi Singkat tentang Aplikasi"></textarea>
                </div>
                <div class="flex flex-col mt-4">
                    <label for="username" class="text-white mb-1">Alamat Website</label>
                    <input type="text" name="username" id="username" class="p-2 border border-gray-800 rounded"
                        placeholder="Alamat Website">
                </div>
                <div class="felx flex-col mt-4">
                    <label for="user_avatar" class="text-white mb-1">Upload file</label>
                    <input class="w-full text-sm text-gray-900 border border-gray-800 rounded cursor-pointer bg-gray-50" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
                <div class="flex items-center mb-4">
                    <input checked id="checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                </div>
                <div class="flex justify-center mt-4">
                    <button type="submit"
                        class="w-full py-3 bg-red-400 border-2 border-red-400 text-white rounded hover:bg-red-500">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-black">
        <thead class="w-full bg-red-400 text-black">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Aplikasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi Singkat Tentang Aplikasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat Website / Download
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b  border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Edit</button>
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
