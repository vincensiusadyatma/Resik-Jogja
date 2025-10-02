@extends('template.main_forum_template')


@section('content')
    <section class="relative w-full min-h-screen ml-70 mt-20 flex items-center>
        <div class="w-[770px] h-52 relative">
        <div class="w-[770px] h-52 left-0 top-0 absolute bg-white shadow-[0px_2px_50px_0px_rgba(169,222,249,0.24)]">
        </div>
        <div class="w-[723.51px] h-0 left-[22.28px] top-[88px] absolute outline-offset-[-0.75px] outline-neutral-900/10">
        </div>
        <div class="w-10 h-10 left-[22.28px] top-[24px] absolute bg-yellow-200 rounded-full"></div>
        <div class="w-5 h-5 left-[31.96px] top-[34px] absolute">
            <div class="w-4 h-[1.25px] left-[1.82px] top-[17.08px] absolute bg-neutral-900"></div>
            <div class="w-1.5 h-2 left-[9.58px] top-[1.67px] absolute bg-neutral-900"></div>
            <div class="w-2.5 h-2.5 left-[2.82px] top-[5.04px] absolute bg-neutral-900"></div>
            <div class="w-5 h-5 left-[19.37px] top-[20px] absolute origin-top-left -rotate-180 opacity-0"></div>
        </div>
        <div
            class="w-24 left-[72.64px] top-[34px] absolute justify-start text-neutral-900 text-base font-medium font-['Sora']">
            Write a post</div>
        <div class="w-10 h-10 left-[507.52px] top-[21px] absolute bg-yellow-200 rounded-full"></div>
        <div class="w-5 h-5 left-[517.21px] top-[34px] absolute">
            <div class="w-1.5 h-1.5 left-[12.91px] top-[0.83px] absolute bg-neutral-900"></div>
            <div class="w-1 h-1 left-[5.34px] top-[4.68px] absolute bg-neutral-900"></div>
            <div class="w-4 h-4 left-[1.61px] top-[1.67px] absolute bg-neutral-900"></div>
            <div class="w-5 h-5 left-0 top-0 absolute opacity-0"></div>
        </div>
        <div
            class="w-28 left-[560.79px] top-[29px] absolute justify-start text-neutral-900 text-base font-medium font-['Sora']">
            Upload photo</div>
        <div class="w-5 h-5 left-[458.13px] top-[34px] absolute">
            <div class="w-5 h-5 left-0 top-0 absolute opacity-0"></div>
        </div>
        <div class="w-[723.51px] h-20 left-[22.28px] top-[112px] absolute bg-sky-50">

            <input type="text" placeholder="Ketik sesuatu di sini..."
                class="w-full h-full bg-transparent border-none px-4 text-gray-800 placeholder:text-gray-400 focus:outline-none" />

        </div>

        {{-- CARD CONTAINER --}}
        <div class="max-w-2xl  w-full h-100  mb-100  bg-white rounded-xl mt-60 shadow-sm p-4 sm:p-6">
            {{-- HEADER --}}
            <div class="flex items-center mb-4">
                {{-- Icon Bē --}}
                <div
                    class="w-12 h-12 rounded-lg bg-gradient-to-br from-blue-500 to-blue-700 flex-shrink-0 flex items-center justify-center">
                    <span class="text-white font-bold text-2xl">Bē</span>
                </div>

                <div class="ml-4">
                    <h2 class="font-bold text-gray-800">Behance Connection</h2>
                    <div class="flex items-center text-sm text-gray-500">
                        {{-- Foto Profil User --}}
                        <img src="https://i.pravatar.cc/24?u=sallywhite" alt="Sally White"
                            class="w-5 h-5 rounded-full mr-2">
                        <span>Sally White</span>
                        <span class="mx-1.5">&middot;</span>
                        <span>1 day ago</span>
                    </div>
                </div>
            </div>

            {{-- DESKRIPSI POSTINGAN --}}
            <div class="mb-4">
                <p class="text-gray-700">
                    Hi, there! This is an app that allows users to search for recipes while keeping their health in
                    check. The design of this app makes it easy for everyone to find different recipes of their choice
                    along wit<a href="#" class="text-blue-600 font-semibold hover:underline ml-1">...view more</a>
                </p>
            </div>

            {{-- GAMBAR UTAMA --}}
            <div class="mb-4">
                <img src="{{ url('img/img.png') }}" alt="Recipe App Showcase" class="w-full rounded-xl object-cover">
            </div>

            <div class="mb-2">
                <p class="text-sm text-gray-500">182 likes &middot; 21 comments</p>
            </div>


            <hr class="border-gray-200 my-2">
            <div class="flex justify-between items-center">
                <div class="flex space-x-6 text-gray-600">
                    <button class="flex items-center space-x-2 hover:text-blue-500 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                        <span class="font-medium text-sm">Like</span>
                    </button>


                    <button class="flex items-center space-x-2 hover:text-blue-500 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                        <span class="font-medium text-sm">Comment</span>
                    </button>

                    <button class="flex items-center space-x-2 hover:text-blue-500 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                        </svg>
                        <span class="font-medium text-sm">Save</span>
                    </button>
                </div>

                {{-- Tombol Share --}}
                <button class="text-gray-600 hover:text-blue-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12s-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.368a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

    </section>
@endsection
