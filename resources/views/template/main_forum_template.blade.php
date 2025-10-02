<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Resik Jogja')</title>
    <link rel="icon" type="image/x-icon" href='{{ asset('img/img.png') }}'>
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

        .swal2-container .swal2-toast {
            min-width: 200px;      
            max-width: 250px;      
            padding: 0.5em 1em;    
            font-size: 0.85rem;   
        }

        .swal2-container .swal2-toast .swal2-title {
            font-size: 0.85rem;   
            margin: 0;
}


    </style>

<body class="bg-white text-gray-900 font-sans leading-normal">
    @include('sweetalert::alert')
    @include('main.layouts.main_navbar')
    <div class="flex h-screen bg-white-800">

        <aside class="w-60 mt-1 bg-white shadow-md">
            {{-- Isi semua menu sidebar Anda di sini --}}
            @include('main.layouts.forum_aside')
        </aside>

        <main class="flex-1 overflow-y-auto">
            @yield('content')
        </main>

    </div>

    @include('main.layouts.footer_main')
</body>

</html>
