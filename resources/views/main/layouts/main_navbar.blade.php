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
                    <a href="{{ route('home') }}"
                        class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-700 hover:border-b-2 hover:border-blue-600 transition">Home</a>
                    <a href="/forum"
                        class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-700 hover:border-b-2 hover:border-blue-600 transition">Forum</a>
                    <a href="#artikelSection"
                        class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-700 hover:border-b-2 hover:border-blue-600 transition">Artikel</a>
                    <a href="#contact"
                        class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-700 hover:border-b-2 hover:border-blue-600 transition">Contact</a>
                </div>
            </div>

            <!-- Auth kanan -->
            <div class="hidden md:block">
                <div class="flex items-center space-x-6">
                    <a href="{{ route('show-login') }}"
                        class="text-gray-600 hover:text-blue-700 text-sm font-medium transition">Login</a>
                    <a href="{{ route('show-register') }}"
                        class="text-gray-800 hover:bg-blue-100 border border-gray-400 rounded-md px-4 py-2 text-sm font-medium transition">Sign
                        up</a>
                </div>
            </div>
        </div>
    </div>
</nav>
