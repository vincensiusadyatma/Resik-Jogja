@extends('template.main_template')


@section('content')
    <section class="bg-white py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <div class="w-full h-96 lg:h-[450px] rounded-3xl overflow-hidden">
                    <div class="swiper h-full w-full">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://images.unsplash.com/photo-1508283823382-b72d2424d550?q=80&w=1920&auto=format&fit=crop"
                                    alt="Wind turbines on a green hill at sunset" class="w-full h-full object-cover">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://images.unsplash.com/photo-1543488769-994dd656254c?q=80&w=1920&auto=format&fit=crop"
                                    alt="Solar panels in a field" class="w-full h-full object-cover">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://images.unsplash.com/photo-1621361229712-83fb67114de2?q=80&w=1920&auto=format&fit=crop"
                                    alt="Close-up of a wind turbine blade" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="text-left">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 tracking-tight">
                        About us
                    </h2>
                    <p class="mt-6 text-gray-600 leading-relaxed">
                        Our vision is to revolutionize the way we power our world by embracing the limitless potential of
                        renewable energy. Founded with a passion for sustainability and innovation, we are committed to
                        providing cutting-edge solutions that not only meet today's energy needs but also safeguard our
                        planet for future generations.
                    </p>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center gap-x-2 rounded-full border border-gray-400 px-6 py-3 text-sm font-semibold text-gray-800 hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
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
@endsection
