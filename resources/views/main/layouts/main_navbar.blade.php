<nav class="sticky top-0 z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo kiri -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center space-x-3 group">
                    <img src="{{ asset('img/resik_jogja_logo3.png') }}" 
                         alt="Resik Jogja Logo" 
                         class="h-12 w-12 object-contain">
                    <span class="text-2xl font-extrabold tracking-widest text-blue-400 group-hover:text-blue-700 transition">
                        Resik <span class="text-gray-800 group-hover:text-gray-600">Jogja</span>
                    </span>
                </a>
            </div>

            <!-- Menu Tengah -->
            <div class="hidden md:flex flex-1 justify-center">
                <div class="flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-700 hover:border-b-2 hover:border-blue-600 transition">Home</a>
                    <a href="{{ route('show-main-forum') }}" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-700 hover:border-b-2 hover:border-blue-600 transition">Forum</a>
                    <a href="#artikelSection" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-700 hover:border-b-2 hover:border-blue-600 transition">Artikel</a>
                    <a href="#contact" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-700 hover:border-b-2 hover:border-blue-600 transition">Contact</a>
                </div>
            </div>

            <!-- Auth / User dropdown kanan -->
            <div class="hidden md:block">
                <div class="flex items-center space-x-6">

                    @auth
                        <!-- User Dropdown -->
                        <div class="relative">
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url ?? '/img/default-user.png' }}" alt="user photo">
                            </button>
                            <!-- Dropdown menu -->
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-sm hidden" id="user-dropdown">
                                <div class="px-4 py-3">
                                    <span class="block text-sm text-gray-900">{{ Auth::user()->name }}</span>
                                    <span class="block text-sm text-gray-500 truncate">{{ Auth::user()->email }}</span>
                                </div>
                                <ul class="py-2">
                                    <li>
                                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('handle-logout') }}">
                                            @csrf
                                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <!-- Login / Sign up -->
                        <a href="{{ route('show-login') }}" class="text-gray-600 hover:text-blue-700 text-sm font-medium transition">Login</a>
                        <a href="{{ route('show-register') }}" class="text-gray-800 hover:bg-blue-100 border border-gray-400 rounded-md px-4 py-2 text-sm font-medium transition">Sign up</a>
                    @endauth

                </div>
            </div>
        </div>
    </div>
</nav>
