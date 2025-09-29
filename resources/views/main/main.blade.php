@extends("template.main_template")


@section("content")
<div class="relative w-full h-screen overflow-hidden bg-white">

    <div class="absolute inset-0 bg-cover bg-center z-0"
        style="background-image: url('https://images.unsplash.com/photo-1508283823382-b72d2424d550?q=80&w=2070&auto=format&fit=crop');">
    </div>

    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent z-10"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 h-full z-20">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center h-full">

            <div class="text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 tracking-tight leading-tight">
                    Driving sustainability with cutting-edge technologies.
                </h1>
                <p class="mt-6 text-lg text-gray-600 max-w-lg">
                    We drive sustainability by leveraging innovative technologies that reduce environmental impact and
                    create a cleaner, greener future.
                </p>
            </div>

            <div class="flex justify-center md:justify-end">
                <div
                    class="w-full max-w-md p-8 bg-green-50/70 backdrop-blur-sm border border-white/50 rounded-2xl shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-900">
                        Innovative Solutions for Sustainable Energy Development
                    </h2>
                    <p class="mt-2 text-gray-700">
                        We deliver innovative solutions that advance sustainability and promote clean energy for a
                        greener future.
                    </p>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center justify-center h-12 w-12 rounded-full bg-yellow-300 hover:bg-yellow-400 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection