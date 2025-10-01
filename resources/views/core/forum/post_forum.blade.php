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

        <div class="w-4 h-4 left-[37.77px] top-[128px] absolute">
        </div>
        </div>
    </section>
@endsection
