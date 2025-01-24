@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
    {{-- header --}}
    <section class="bg-red-700" style="height: 75vh">
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
                    <a href="#"
                        class="flex flex-col justify-between items-center w-full bg-red-700 text-white p-4 hover:scale-105 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white"
                            class="bi bi-chat-right-text w-24 h-24 mb-2" viewBox="0 0 16 16">
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
