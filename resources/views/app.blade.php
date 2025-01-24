<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include('partials.head')
</head>

<body class="bg-gray-100 h-screen antialiased leading-none">
    <span id="top"></span>
    <div id="app">
        @include('partials.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <button id="scrollToTopBtn"
        class="fixed bottom-5 right-5 bg-red-700 border-2 text-white p-3 rounded-full shadow-lg hidden hover:bg-red-500 transition duration-300 ease-in-out">
        ↑
    </button>
    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
