@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
    {{-- header --}}
    <section class="bg-red-700 mt-10 md:pt-0" style="height: 75vh">
        <div class="flex flex-col h-full w-full md:flex-row md:items-center md:justify-center">
            <div class="mx-10 h-full flex items-center justify-center order-1 md:order-0">
                <img src="{{ asset('logo/header2.png') }}" class="h-full md:h-screen" alt="kantor_pemda"
                    style="filter: drop-shadow(0.5rem 0.5rem 0rem black);" />
            </div>
            <div class="flex flex-col items-center justify-center h-full order-0 md:w-1/2 md:order-1">
                <h1 class="text-white font-bold text-3xl p-5 my-5 text-center md:text-left md:text-6xl">Selamat Datang di
                    Portal PPID
                    Kabupaten Sumenep
                </h1>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl mx-auto my-40 p-10 md:p-0">
        <div class="mx-auto">
            <div class="p-4">
                <h1 class="font-bold text-2xl md:text-4xl my-10">Layanan Publik</h1>
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-8">
                    <a href="#"
                        class="flex flex-col justify-between items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-chat-right-text w-24 h-24 mb-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                            <path
                                d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                        </svg>
                        <span class="text-center font-bold text-sm md:text-xl truncate">Lapor</span>
                    </a>
                    <a href="#"
                        class="flex flex-col justify-between items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-hospital w-24 h-24 mb-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25z" />
                            <path
                                d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1zm2 14h2v-3H7zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zm0-14H6v1h4zm2 7v7h3V8zm-8 7V8H1v7z" />
                        </svg>
                        <span class="text-center font-bold text-sm md:text-xl truncate">Klinik Hoax</span>
                    </a>
                    <a href="#"
                        class="flex flex-col justify-between items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-people w-24 h-24 mb-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                        </svg>
                        <span class="text-center font-bold text-sm md:text-xl truncate">Survey Kepuasan</span>
                    </a>
                    <a href="#"
                        class="flex flex-col justify-center items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-lightning w-24 h-24"
                            viewBox="0 0 16 16">
                            <path
                                d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-64 bg-red-700 my-40">
        <div class="max-w-screen-xl mx-auto p-10 md:px-0 md:py-5">
            <h1 class="text-white font-bold text-2xl mb-3">Permohonan Informasi</h1>
            <div class="flex flex-shrink-0 overflow-x-auto gap-10 cursor-grab flex-nowrap no-scrollbar" id="scrollable">
                <div class="p-6 bg-white border border-gray-200 rounded-sm shadow w-[288px] flex-shrink-0">
                    <a href="javascript:void(0)">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 select-none">Noteworthy technology
                            acquisitions
                            2021</h5>
                    </a>
                    <p class="select-none mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                        acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="javascript:void(0)"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border-2 border-red-700 rounded-sm hover:bg-red-700 focus:ring-4 hover:text-white focus:outline-none focus:ring-red-300">
                        Lihat Selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-sm shadow w-[288px] flex-shrink-0">
                    <a href="javascript:void(0)">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 select-none">Noteworthy technology
                            acquisitions
                            2021</h5>
                    </a>
                    <p class="select-none mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                        acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="javascript:void(0)"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border-2 border-red-700 rounded-sm hover:bg-red-700 focus:ring-4 hover:text-white focus:outline-none focus:ring-red-300">
                        Lihat Selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-sm shadow w-[288px] flex-shrink-0">
                    <a href="javascript:void(0)">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 select-none">Noteworthy technology
                            acquisitions
                            2021</h5>
                    </a>
                    <p class="select-none mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                        acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="javascript:void(0)"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border-2 border-red-700 rounded-sm hover:bg-red-700 focus:ring-4 hover:text-white focus:outline-none focus:ring-red-300">
                        Lihat Selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-sm shadow w-[288px] flex-shrink-0">
                    <a href="javascript:void(0)">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 select-none">Noteworthy technology
                            acquisitions
                            2021</h5>
                    </a>
                    <p class="select-none mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                        acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="javascript:void(0)"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border-2 border-red-700 rounded-sm hover:bg-red-700 focus:ring-4 hover:text-white focus:outline-none focus:ring-red-300">
                        Lihat Selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-sm shadow w-[288px] flex-shrink-0">
                    <a href="javascript:void(0)">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 select-none">Noteworthy technology
                            acquisitions
                            2021</h5>
                    </a>
                    <p class="select-none mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                        acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="javascript:void(0)"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border-2 border-red-700 rounded-sm hover:bg-red-700 focus:ring-4 hover:text-white focus:outline-none focus:ring-red-300">
                        Lihat Selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-sm shadow w-[288px] flex-shrink-0">
                    <a href="javascript:void(0)">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 select-none">Noteworthy technology
                            acquisitions
                            2021</h5>
                    </a>
                    <p class="select-none mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                        acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="javascript:void(0)"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border-2 border-red-700 rounded-sm hover:bg-red-700 focus:ring-4 hover:text-white focus:outline-none focus:ring-red-300">
                        Lihat Selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-sm shadow w-[288px] flex-shrink-0">
                    <a href="javascript:void(0)">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 select-none">Noteworthy technology
                            acquisitions
                            2021</h5>
                    </a>
                    <p class="select-none mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                        acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="javascript:void(0)"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border-2 border-red-700 rounded-sm hover:bg-red-700 focus:ring-4 hover:text-white focus:outline-none focus:ring-red-300">
                        Lihat Selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-sm shadow w-[288px] flex-shrink-0">
                    <a href="javascript:void(0)">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 select-none">Noteworthy technology
                            acquisitions
                            2021</h5>
                    </a>
                    <p class="select-none mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                        acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="javascript:void(0)"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border-2 border-red-700 rounded-sm hover:bg-red-700 focus:ring-4 hover:text-white focus:outline-none focus:ring-red-300">
                        Lihat Selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-sm shadow w-[288px] flex-shrink-0">
                    <a href="javascript:void(0)">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 select-none">Noteworthy technology
                            acquisitions
                            2021</h5>
                    </a>
                    <p class="select-none mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                        acquisitions of
                        2021 so far, in reverse chronological order.</p>
                    <a href="javascript:void(0)"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-700 border-2 border-red-700 rounded-sm hover:bg-red-700 focus:ring-4 hover:text-white focus:outline-none focus:ring-red-300">
                        Lihat Selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl mx-auto my-40 p-10 md:p-0">
        <div class="mx-auto">
            <div class="p-4">
                <h1 class="font-bold text-2xl md:text-4xl my-10">Media Sosial</h1>
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-8 select-none">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/kominfosumenep/" target="_blank"
                        class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-instagram w-24 h-24 mb-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                        <span class="text-center font-bold text-sm md:text-xl truncate">Instagram</span>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/kominfo.sumenep" target="_blank"
                        class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-facebook w-24 h-24 mb-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                        <span class="text-center font-bold text-sm md:text-xl truncate">Facebook</span>
                    </a>

                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@kominfosumenep" target="_blank"
                        class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-youtube w-24 h-24 mb-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.043-.064 1.956l-.007.105-.022.26-.01.104c-.048.52-.119 1.023-.22 1.402a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.38-.175-.883-.224-1.402l-.013-.104-.022-.26-.008-.104c-.064-.914-.072-1.77-.074-1.957v-.075c.001-.194.01-1.043.064-1.956l.007-.105.022-.26.01-.104c.048-.52.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                        <span class="text-center font-bold text-sm md:text-xl truncate">YouTube</span>
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/kominfosumenep" target="_blank"
                        class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-twitter-x w-24 h-24 mb-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633z" />
                        </svg>
                        <span class="text-center font-bold text-sm md:text-xl truncate">Twitter</span>
                    </a>

                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@kominfo.sumenep?is_from_webapp=1&sender_device=pc" target="_blank"
                        class="flex flex-col justify-between items-center w-full bg-gradient-to-r from-red-600 to-red-800 text-white p-4 hover:-translate-y-1 hover:-translate-x-1 transition-transform duration-200 hover:shadow-[7px_7px_0px_0px_rgba(0,0,0,1)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-tiktok w-24 h-24 mb-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                        <span class="text-center font-bold text-sm md:text-xl truncate">TikTok</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        const scrollableElement = document.getElementById('scrollable');
        let isDragging = false;
        let startX;
        let scrollLeft;

        scrollableElement.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.pageX - scrollableElement.offsetLeft;
            scrollLeft = scrollableElement.scrollLeft;
            scrollableElement.style.cursor = 'grabbing';
        });

        document.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            const x = e.pageX - scrollableElement.offsetLeft;
            const scroll = x - startX;
            scrollableElement.scrollLeft = scrollLeft - scroll; // Menggeser konten ke kiri/kanan dengan lebih halus
        });

        document.addEventListener('mouseup', () => {
            isDragging = false;
            scrollableElement.style.cursor = 'grab';
        });

        // Optional: Untuk memberikan tampilan kursor yang lebih sesuai saat menggeser
        scrollableElement.addEventListener('mouseleave', () => {
            if (isDragging) {
                isDragging = false;
                scrollableElement.style.cursor = 'grab';
            }
        });
    </script>
@endpush
