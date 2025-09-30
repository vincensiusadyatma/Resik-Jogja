<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Admin - Resik-Jogja</title>
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
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8h5z" />
                    </svg>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg bg-blue-100 p-3 font-semibold text-blue-700 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                    <span>User</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z" />
                    </svg>
                    <span>Artikel</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7v-5z" />
                    </svg>
                    <span>Kegiatan</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17 2H7c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 15h-2v-4h-2v4H9v-4H7v-2h2V9h2v4h2V9h2v4h-2v2zm-2-12h-2V5h-2v2h2v2h-2v2h-2V5h-2v2h2v2h2v-2h2v-2h2V5h-2z" />
                    </svg>
                    <span>Reports</span>
                </a>
                <a href="#" class="flex items-center space-x-3 rounded-lg p-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2c-5.52 0-10 4.48-10 10s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-1.07.96c-.4.35-1 .59-1 .59v1.2a1 1 0 01-2 0v-.76c0-.49.2-1.01.59-1.39l1.41-1.27c.4-.35.6-.59.6-.96 0-.55-.45-1-1-1s-1 .45-1 1H8c0-1.66 1.34-3 3-3s3 1.34 3 3c0 .89-.39 1.56-1.16 2.25z" />
                    </svg>
                    <span>Bantuan</span>
                </a>
            </nav>
        </aside>

        <main class="flex-1 overflow-y-auto p-8">
            <header class="mb-8 flex items-center justify-between">
                <div class="text-3xl font-semibold text-gray-800">
                    User
                </div>
                <button class="flex items-center space-x-2 rounded-full bg-blue-500 px-6 py-3 font-semibold text-white transition duration-200 hover:bg-blue-600">
                    <span>Create User</span>
                </button>
            </header>

            <div class="mb-6 flex space-x-4">
                <button class="flex items-center space-x-2 rounded-full bg-blue-500 px-6 py-3 font-semibold text-white transition duration-200 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <span>Find person</span>
                </button>
                <button class="flex items-center space-x-2 rounded-full bg-gray-200 px-6 py-3 font-medium text-gray-600 transition duration-200 hover:bg-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                    <span>All people</span>
                </button>
            </div>

            <div class="mb-6 flex items-center justify-between space-x-4">
                <div class="relative flex-1">
                    <input type="text" placeholder="Search" class="w-full rounded-full border border-gray-300 py-3 pl-12 pr-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 transform text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="rounded-full border border-gray-300 p-3 text-gray-600 transition duration-200 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <button class="rounded-full border border-gray-300 p-3 text-gray-600 transition duration-200 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <button class="rounded-full border border-gray-300 p-3 text-gray-600 transition duration-200 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4M4 12H2M22 12h-2M12 20v2M18.364 5.636l1.414-1.414M5.636 18.364l-1.414 1.414M18.364 18.364l1.414 1.414M5.636 5.636l-1.414 1.414" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto rounded-xl bg-white p-6 shadow-md">
                <table class="w-full table-auto" id="user-table">
                    <thead>
                        <tr class="text-left text-sm font-semibold text-gray-600">
                            <th class="p-4">ID</th>
                            <th class="p-4">AVATAR</th>
                            <th class="p-4">NAME</th>
                            <th class="p-4">EMAIL</th>
                            <th class="p-4">ADMIN</th>
                            <th class="p-4">USER</th>
                            <th class="p-4"></th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        </tbody>
                </table>
            </div>

            <div class="mt-6 flex items-center justify-between">
                <button id="prev-btn" class="text-sm text-gray-500 disabled:text-gray-300">
                    Previous
                </button>
                <div class="text-sm text-gray-500">
                    <span id="page-info"></span>
                </div>
                <button id="next-btn" class="text-sm text-gray-500 disabled:text-gray-300">
                    Next
                </button>
            </div>

            <div class="mt-8 flex justify-end space-x-4">
                <button class="rounded-full border border-gray-300 px-6 py-3 font-semibold text-gray-600 transition duration-200 hover:bg-gray-200">
                    Clear
                </button>
                <button class="rounded-full bg-green-500 px-6 py-3 font-semibold text-white transition duration-200 hover:bg-green-600">
                    Search
                </button>
            </div>
        </main>
    </div>
    
    <script>
        const users = [
            { id: 7, name: 'Mior Zaki', email: 'mior@nova.laravel.com', isAdmin: true, isUser: false },
            { id: 6, name: 'Jess Archer', email: 'jess@nova.laravel.com', isAdmin: false, isUser: true },
            { id: 5, name: 'Dries Vints', email: 'dries@nova.laravel.com', isAdmin: true, isUser: false },
            { id: 4, name: 'Ian Landsman', email: 'ian@nova.laravel.com', isAdmin: false, isUser: true },
            { id: 3, name: 'Mohamed Said', email: 'mohamed@nova.laravel.com', isAdmin: true, isUser: false },
            { id: 2, name: 'David Hemphill', email: 'david@nova.laravel.com', isAdmin: false, isUser: true },
            { id: 1, name: 'Taylor Otwell', email: 'taylor@nova.laravel.com', isAdmin: true, isUser: false },
        ];

        const usersPerPage = 5; 
        let currentPage = 1;

        const tableBody = document.getElementById('table-body');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const pageInfo = document.getElementById('page-info');

        function renderTable(page) {
            tableBody.innerHTML = '';
            const start = (page - 1) * usersPerPage;
            const end = start + usersPerPage;
            const paginatedUsers = users.slice(start, end);

            paginatedUsers.forEach(user => {
                const row = `
                    <tr class="border-t border-gray-200 text-sm">
                        <td class="p-4 text-gray-500">${user.id}</td>
                        <td class="p-4">
                            <img src="https://i.pravatar.cc/40?u=${user.id}" alt="Avatar" class="h-10 w-10 rounded-full">
                        </td>
                        <td class="p-4 font-medium text-gray-800">${user.name}</td>
                        <td class="p-4 text-gray-500">${user.email}</td>
                        <td class="p-4 text-center">
                            ${user.isAdmin ? 
                                `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" /></svg>` 
                                : 
                                `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto text-red-500" fill="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" /></svg>`
                            }
                        </td>
                        <td class="p-4 text-center">
                            ${user.isUser ? 
                                `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" /></svg>`
                                : 
                                `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto text-red-500" fill="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" /></svg>`
                            }
                        </td>
                        <td class="p-4 flex items-center justify-end space-x-2">
                            <button class="p-2 text-gray-500 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.522 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S3.732 16.057 2.458 12z" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-500 hover:text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-500 hover:text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', row);
            });

            // Update page info
            const totalUsers = users.length;
            const startRange = start + 1;
            const endRange = Math.min(end, totalUsers);
            pageInfo.textContent = `${startRange}-${endRange} of ${totalUsers}`;
            
            // Enable/Disable buttons
            prevBtn.disabled = page === 1;
            nextBtn.disabled = page * usersPerPage >= totalUsers;
        }

        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderTable(currentPage);
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentPage * usersPerPage < users.length) {
                currentPage++;
                renderTable(currentPage);
            }
        });

        // Initial render
        renderTable(currentPage);
    </script>
</body>
</html>
