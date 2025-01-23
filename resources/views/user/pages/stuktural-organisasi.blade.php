@extends('app')
@section('title', 'PPID Kabupaten Sumenep')
@section('content')
<div class="bg-white dark:bg-gray-800 flex justify-center items-center w-screen h-screen p-5 mt-20">
    <div class="border shadow-teal-300 shadow-md max-w-2xl p-6 rounded-lg dark:bg-gray-700 dark:text-gray-300 hover:border-3">
        <h2 class="text-4xl font-mono font-extrabold py-3 text-center text-blue-500">STUKTURAL PPID SUMENEP</h2>
        <div class="flex justify-center mt-1">
            <img src="{{ asset('logo/stukturalppid.jpg') }}" alt="dummyimage" class="my-2" />
        </div>
        <p class="border shadow-teal-300 shadow-md max-w-2xl p-6 rounded-lg dark:bg-gray-700 dark:text-gray-300 hover:border-3 hover:text-white hover:bg-blue-600">
            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups....

        </p>

    </div>
</div>
@endsection