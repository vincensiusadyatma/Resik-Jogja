<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 antialiased">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-white p-6 shadow-md">
            <div class="mb-10 text-2xl font-bold text-gray-800">
                Resik-Jogja
            </div>
            <nav class="space-y-2">
                <a href="#" class="flex items-center space-x-3 rounded-lg bg-gray-200 p-3 font-semibold text-gray-800 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8h5z" />
                    </svg>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                    <span>User</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z" />
                    </svg>
                    <span>Artikel</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7v-5z" />
                    </svg>
                    <span>Kegiatan</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17 2H7c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 15h-2v-4h-2v4H9v-4H7v-2h2V9h2v4h2V9h2v4h-2v2zm-2-12h-2V5h-2v2h2v2h-2v2h-2V5h-2v2h2v2h2v-2h2v-2h2V5h-2z" />
                    </svg>
                    <span>Laporan Kegiatan</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2c-5.52 0-10 4.48-10 10s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-1.07.96c-.4.35-1 .59-1 .59v1.2a1 1 0 01-2 0v-.76c0-.49.2-1.01.59-1.39l1.41-1.27c.4-.35.6-.59.6-.96 0-.55-.45-1-1-1s-1 .45-1 1H8c0-1.66 1.34-3 3-3s3 1.34 3 3c0 .89-.39 1.56-1.16 2.25z" />
                    </svg>
                    <span>Bantuan</span>
                </a>
            </nav>
        </aside>

        <main class="flex-1 overflow-y-auto p-8">
            <header class="mb-8 flex items-center justify-between">
                <div class="text-3xl font-semibold text-gray-800">
                    Dashboard
                </div>
                <button class="flex items-center space-x-2 rounded-full bg-green-500 px-6 py-3 font-semibold text-white transition duration-200 hover:bg-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5V19.5M4.5 12H19.5" />
                    </svg>
                    <span>Add widget</span>
                </button>
            </header>
            
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-xl bg-white p-6 shadow-md">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-500">Current Users</h2>
                        <select class="rounded border border-gray-300 p-1 text-sm text-gray-600 focus:outline-none">
                            <option>30 Days</option>
                            <option>7 Days</option>
                            <option>90 Days</option>
                        </select>
                    </div>
                    <div class="mt-4 flex items-center space-x-4">
                        <div class="rounded-full bg-blue-100 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 14c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </div>
                        <span class="text-5xl font-extrabold text-gray-800">7</span>
                    </div>
                </div>

                <div class="rounded-xl bg-white p-6 shadow-md">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-500">New Users</h2>
                        <span class="text-sm font-medium text-gray-500">15k</span>
                    </div>
                    <div class="mt-4">
                        <div class="text-5xl font-extrabold text-gray-800">75%</div>
                        <div class="mt-2 h-2.5 w-full rounded-full bg-gray-200">
                            <div class="h-2.5 rounded-full bg-green-500" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="mt-8 grid grid-cols-1 gap-6 lg:grid-cols-2">
                <div class="rounded-xl bg-white p-6 shadow-md">
                    <h2 class="mb-4 text-2xl font-semibold text-gray-800">Artikel</h2>
                    <div class="flex h-64 items-center justify-center text-gray-400">
                        There are no risks assigned.
                    </div>
                </div>

                <div class="rounded-xl bg-white p-6 shadow-md">
                    <h2 class="mb-4 text-2xl font-semibold text-gray-800">Kegiatan</h2>
                    <div class="flex h-64 items-center justify-center text-gray-400">
                        There are no risks assigned.
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
