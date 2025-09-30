@extends('template.main_template')

@section('content')
    <section class="relative w-full min-h-screen flex items-center">
        {{-- Background Image --}}
        <div class="absolute inset-0 z-0 bg-center bg-cover" style="background-image: url('img/img.png');">
        </div>


        <div class="absolute inset-0 z-10 bg-gradient-to-r from-white via-white/80 to-transparent"></div>


        <div class="relative z-20 w-full px-6 mx-auto max-w-7xl lg:px-8">
            <div class="grid items-center grid-cols-1 gap-12 md:grid-cols-2">


                <div class="text-left">
                    <h1 class="text-4xl font-bold leading-tight tracking-tight text-gray-800 md:text-5xl lg:text-6xl">
                        Driving sustainability with cutting-edge technologies.
                    </h1>
                    <p class="max-w-lg mt-6 text-lg text-gray-600">
                        We drive sustainability by leveraging innovative technologies that reduce environmental impact and
                        create a cleaner, greener future.
                    </p>
                </div>


                <div class="flex justify-center mt-10 md:mt-0 md:justify-end">
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
                                class="inline-flex items-center justify-center w-12 h-12 transition-colors bg-yellow-300 rounded-full hover:bg-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-white sm:py-24">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-16">
                <div class="w-full h-96 lg:h-[350px] rounded-3xl overflow-hidden shadow-xl">
                    <div class="w-full h-full swiper">
                        <div class="swiper-wrapper">
                            <img src="{{ url('img/img2.png') }}" class="object-cover w-full h-full">
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>


                <div class="text-left">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        About Us
                    </h2>
                    <p class="mt-6 leading-relaxed text-gray-600">
                        Our vision is to revolutionize the way we power our world by embracing the limitless potential of
                        renewable energy. Founded with a passion for sustainability and innovation, we are committed to
                        providing cutting-edge solutions that not only meet today's energy needs but also safeguard our
                        planet for future generations.
                    </p>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center px-6 py-3 text-sm font-semibold text-gray-800 transition-colors border border-gray-400 rounded-full gap-x-2 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 sm:py-24">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="flex items-center justify-between pb-6 mb-12 border-b border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 md:text-3xl">
                    Services We Provide
                </h2>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-2 text-sm font-semibold text-gray-900 transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-400">
                    View More
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>


            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">


                <div
                    class="p-8 transition-all duration-200 bg-white border border-gray-200 rounded-2xl hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full">
                        <svg class="w-8 h-8 text-gray-700" ...>

                        </svg>
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-gray-900">
                        Solar Energy Solutions
                    </h3>
                    <p class="mt-4 text-base text-gray-600">
                        Harness the power of the sun with our comprehensive solar panel installations and maintenance
                        services. ...
                    </p>
                </div>


                <div
                    class="p-8 transition-all duration-200 bg-white border border-gray-200 rounded-2xl hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full">
                        <svg class="w-8 h-8 text-gray-700" ...>

                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-bold text-gray-900">
                        Wind Energy Systems
                    </h3>
                    <p class="mt-4 text-base text-gray-600">
                        Tap into the wind's potential with our innovative wind turbine installations. ...
                    </p>
                </div>

                <div
                    class="p-8 transition-all duration-200 bg-white border border-gray-200 rounded-2xl hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full">
                        <svg class="w-8 h-8 text-gray-700" ...>

                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-bold text-gray-900">
                        Energy Storage Solutions
                    </h3>
                    <p class="mt-4 text-base text-gray-600">
                        Enhance your energy independence with our advanced energy storage systems. ...
                    </p>
                </div>


                <div
                    class="p-8 transition-all duration-200 bg-white border border-gray-200 rounded-2xl hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full">
                        <svg class="w-8 h-8 text-gray-700" ...>

                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-bold text-gray-900">
                        Consultation and Energy Audits
                    </h3>
                    <p class="mt-4 text-base text-gray-600">
                        Optimize your energy use with our expert consultation and energy audit services. ...
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section class="relative w-full h-screen overflow-hidden">

        {{-- 1. Background Image --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ url('img/img3.jpg') }}" class="object-cover w-full h-full">
        </div>

        {{-- 2. Gradient Overlay --}}
        <div class="absolute inset-0 z-10 bg-gradient-to-r from-black/60 to-transparent"></div>

        {{-- 3. Konten Utama (Centering Wrapper) --}}
        <div class="relative z-20 flex items-center justify-center w-full h-full p-4 sm:p-6 lg:p-8">

            {{-- KARTU KACA (GLASSMORPHISM CARD) --}}
            <div
                class="w-full max-w-4xl p-8 border rounded-3xl shadow-2xl md:p-12 bg-white/10 border-white/20 backdrop-blur-lg">

                <h1 class="text-3xl font-bold text-white md:text-4xl lg:text-5xl">
                    Innovative Solutions for Sustainable Energy Development
                </h1>

                <p class="mt-4 text-base text-gray-200 md:text-lg">
                    We deliver innovative solutions that advance sustainability and promote clean energy for a greener
                    future.
                </p>

                <ul class="mt-8 space-y-3 text-gray-200 list-disc list-inside">
                    <li>
                        <span class="font-semibold text-white">Expertise in Renewable Technologies:</span> Specialized in
                        solar, wind, and energy storage solutions.
                    </li>
                    <li>
                        <span class="font-semibold text-white">Customized Solutions:</span> Tailored energy systems to
                        meet specific needs and maximize efficiency.
                    </li>
                    <li>
                        <span class="font-semibold text-white">Sustainable Impact:</span> Focused on reducing carbon
                        footprints and promoting environmental stewardship.
                    </li>
                    <li>
                        <span class="font-semibold text-white">Comprehensive Service:</span> From installation to
                        maintenance and energy audits, we offer end-to-end support.
                    </li>
                    <li>
                        <span class="font-semibold text-white">Customer-Centric Approach:</span> Committed to delivering
                        high-quality service and fostering strong client relationships.
                    </li>
                    <li>
                        <span class="font-semibold text-white">Innovation-Driven:</span> Utilizing the latest
                        technologies and practices to advance renewable energy adoption.
                    </li>
                </ul>

                <div class="mt-10">
                    <a href="#"
                        class="flex items-center justify-center w-16 h-16 transition-transform duration-300 bg-yellow-400 rounded-full hover:bg-yellow-500 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-900" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="py-12 bg-white sm:py-16 lg:py-20">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-3xl font-bold text-gray-900">
                    Blog & News
                </h2>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-2 text-sm font-semibold text-gray-900 transition-all duration-200 bg-yellow-300 rounded-full hover:bg-yellow-400">
                    View More
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            {{-- Slider Container --}}
            <div class="swiper blog-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        {{-- <x-post-card 
                            :image="$post['image']"
                            :title="$post['title']"
                            :excerpt="$post['excerpt']"
                            :url="$post['url']"
                        /> --}}
                        <div
                            class="self-stretch h-[474px] px-3 py-3 bg-gray-100 rounded-[20px] outline-offset-[-1px] outline-neutral-200 inline-flex flex-col justify-start items-start gap-2">
                            <img class="self-stretch h-50 rounded-[10px]" src="{{ url('img/img3.jpg') }}" />
                            <div class="w-64 flex flex-col justify-start items-start gap-2">
                                <div
                                    class="self-stretch justify-start text-neutral-600 text-xl font-semibold  leading-loose">
                                    Solar Energy Solutions</div>
                                <div
                                    class="self-stretch justify-start text-zinc-500 text-base font-normal  leading-relaxed">
                                    Harness the power of the sun with our comprehensive solar panel installations and
                                    maintenance services. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
