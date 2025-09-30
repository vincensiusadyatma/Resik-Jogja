<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <div class="flex-shrink-0">
                <a href="/" class="flex items-center space-x-2">
                    <svg class="h-10 w-10" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="27.5" cy="27.5" r="27.5" fill="#D4FF00" />
                        <path
                            d="M22.0957 14V41H28.8157V28.57H34.5957V22.6H28.8157V19.03C28.8157 18.23 28.9057 17.68 29.0857 17.38C29.2657 17.08 29.6757 16.93 30.3157 16.93H34.6557V14H29.7457C28.1657 14 26.9807 14.39 26.1907 15.17C25.4007 15.95 25.0057 17.06 25.0057 18.5V22.6H22.0957V28.57H25.0057V41H22.0957V14Z"
                            fill="white" />
                    </svg>
                    <span class="text-2xl font-bold text-gray-800 tracking-wider">Logoipsum</span>
                </a>
            </div>

            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">Home</a>
                    <a href="/forum" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">Forum</a>
                    <a href="#artikelSection" class="text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-medium">Artikel</a>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6 space-x-6">
                    <a href="#" class="text-gray-600 hover:text-gray-900 text-sm font-medium">Login</a>
                    <a href="#"
                        class="text-gray-800 hover:bg-gray-50 border border-gray-400 rounded-md px-4 py-2 text-sm font-medium">Sign
                        up</a>
                </div>
            </div>

            <div class="-mr-2 flex md:hidden">
                <button type="button"
                    class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#"
                class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Destinations</a>
            <a href="#"
                class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Hotels</a>
            <a href="#"
                class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Flights</a>
            <a href="#"
                class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Bookings</a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="flex items-center px-5">
                <a href="#" class="text-gray-600 hover:text-gray-900 text-base font-medium">Login</a>
            </div>
            <div class="mt-3 px-2 space-y-1">
                <a href="#"
                    class="block w-full text-left text-gray-800 hover:bg-gray-50 border border-gray-400 rounded-md px-4 py-2 text-base font-medium">Sign
                    up</a>
            </div>
        </div>
    </div>
</nav>
