@extends('template.main_forum_template')

@section('content')
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
    </section>
@endsection
