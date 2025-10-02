<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Artikel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 antialiased">

<div class="flex min-h-screen">
   
    <aside class="w-64 bg-white p-6 shadow-md">
        <div class="mb-10 text-2xl font-bold text-gray-800">
            Resik-Jogja
        </div>
        <nav class="space-y-2">
            <!-- Dashboard -->
            <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 hover:bg-gray-200 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8h5z" />
                </svg>
                <span>Dashboard</span>
            </a>

            <!-- User -->
            <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 hover:bg-gray-200 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm0 2c-2.7 0-8 1.3-8 4v2h16v-2c0-2.7-5.3-4-8-4z"/>
                </svg>
                <span>User</span>
            </a>

            <!-- Artikel  -->
            <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-semibold bg-gray-200 text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zM13 9h5v11H6V4h7v5z"/>
                </svg>
                <span>Artikel</span>
            </a>

            <!-- Kegiatan -->
            <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 hover:bg-gray-200 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM7 10h5v5H7v-5z"/>
                </svg>
                <span>Kegiatan</span>
            </a>

            <!-- Laporan -->
            <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 hover:bg-gray-200 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 2H7c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 8h6v2H9V8zm0 4h6v2H9v-2z"/>
                </svg>
                <span>Laporan Kegiatan</span>
            </a>

            <!-- Bantuan -->
            <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 hover:bg-gray-200 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm1 17h-2v-2h2v2zm1.1-7.8l-1.1 1c-.4.3-.9.6-.9 1.2v.6h-2v-.8c0-.9.4-1.6 1-2.1l1.4-1.2c.3-.3.5-.6.5-1 0-.6-.5-1-1-1s-1 .4-1 1H8c0-1.6 1.3-3 3-3s3 1.3 3 3c0 .9-.4 1.6-1 2.3z"/>
                </svg>
                <span>Bantuan</span>
            </a>
        </nav>
    </aside>

    <!-- Main -->
    <main class="flex-1 overflow-y-auto p-8">
        <header class="mb-8">
            <h1 class="text-3xl font-semibold text-gray-800">Manajemen Artikel</h1>
        </header>

        <!-- Form Tambah Artikel -->
        <div class="rounded-xl bg-white p-6 shadow-md mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Tambah Artikel</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-gray-600 mb-1">Judul Artikel</label>
                    <input type="text" class="w-full rounded border-gray-300 p-2 focus:border-blue-500 focus:ring-blue-500" placeholder="Masukkan judul artikel">
                </div>
                <div>
                    <label class="block text-gray-600 mb-1">Upload File (PDF, DOC, dll)</label>
                    <input type="file" class="w-full rounded border-gray-300 p-2">
                </div>
                <div>
                    <label class="block text-gray-600 mb-1">Tanggal</label>
                    <input type="date" class="w-full rounded border-gray-300 p-2">
                </div>
                <button type="submit" class="rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">Simpan</button>
            </form>
        </div>

        <!-- Tabel Artikel -->
        <div class="rounded-xl bg-white p-6 shadow-md">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Daftar Artikel</h2>
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-left text-gray-600">
                            <th class="p-3">Tanggal</th>
                            <th class="p-3">Judul Artikel</th>
                            <th class="p-3">User</th>
                            <th class="p-3">File</th>
                            <th class="p-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="p-3">24 Apr</td>
                            <td class="p-3">Security Awareness</td>
                            <td class="p-3">Keithlyn O'Hara</td>
                            <td class="p-3 text-blue-500 underline"><a href="#">Download</a></td>
                            <td class="p-3 text-center">
                                <button class="rounded bg-red-500 px-3 py-1 text-white hover:bg-red-600">Hapus</button>
                            </td>
                        </tr>
                        <tr class="border-t">
                            <td class="p-3">16 Feb</td>
                            <td class="p-3">Induction program: Office user manual</td>
                            <td class="p-3">Matthew Brandstock</td>
                            <td class="p-3 text-blue-500 underline"><a href="#">Download</a></td>
                            <td class="p-3 text-center">
                                <button class="rounded bg-red-500 px-3 py-1 text-white hover:bg-red-600">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

</body>
</html>
