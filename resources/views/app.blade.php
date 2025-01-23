<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        @include('partials.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
