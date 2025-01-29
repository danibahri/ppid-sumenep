{{-- meta --}}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

{{-- favicon --}}
<link rel="icon" href="{{ asset('logo/logo_ppid.png') }}" type="image/x-icon">

{{-- boostrap icon --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

{{-- title --}}
<title>@yield('title')</title>

{{-- flowbite vite --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
