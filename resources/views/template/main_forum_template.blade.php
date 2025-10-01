<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Resik Jogja')</title>
    <link rel="icon" type="image/x-icon" href='{{ asset('img/img1.png') }}'>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @keyframes infinite-scroll {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-infinite-scroll {
            animation: infinite-scroll 40s linear infinite;
        }
    </style>

<body class="bg-white text-gray-900 font-sans leading-normal">
    @include('main.layouts.main_navbar')
    @include('main.layouts.forum_aside')
    <main>
        @yield('content')
    </main>

    @include('main.layouts.footer_main')
</body>

</html>
