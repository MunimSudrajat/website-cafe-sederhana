@extends('layouts.master')

@include('layouts.navbar')
@section('title', 'Menu')

@section('content')
    <div class="pt-20 px-15 pb-16 md:px-40">
        <div class="mt-16">
            <h1 class="font-extrabold text-accent-dark text-4xl" data-aos="fade-up">Gallery</h1>
            <p class="text-accent-dark mt-5 font-bold" data-aos="fade-up">Explore the rich and vibrant atmosphere of Elite Cafe. Every corner,
                every cup, dan every creation tells a story of <br class="hidden md:flex"> passion and perfection. Browse
                through our gallery to get a glimpse of the unforgetablle experience that awaits you</p>
        </div>
        <div class="flex mt-12 gap-5">
            <div class="bg-primary rounded-full py-1 px-5"  data-aos="fade-up">
                <a href="" class="text-accent-dark font-bold">All</a>
            </div>
            <div class=" rounded-full py-1 px-5"  data-aos="fade-up">
                <a href="" class="text-accent-dark font-bold">Coffee</a>
            </div>
            <div class=" rounded-full py-1 px-5"  data-aos="fade-up">
                <a href="" class="text-accent-dark font-bold">Pastries</a>
            </div>
            <div class=" rounded-full py-1 px-5"  data-aos="fade-up">
                <a href="" class="text-accent-dark font-bold">Interior</a>
            </div>
        </div>

        <div class="grid grid-cols-1 justify-items-center md:grid-cols-3 mt-16">
            <div class="" data-aos="fade-up">
                <div class="bg-sky-200 relative h-[300px] w-[300px] rounded-xl overflow-hidden group hover:scale-95 transition-all duration-500 mt-5">
                    <div class="absolute bg-center bg-cover group w-full h-full group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                    style="background-image: url('{{ asset('storage/images/kopi1.jpg') }}');">
                    </div>
                 </div>
            </div>
            <div class="" data-aos="fade-up">
                <div class="bg-sky-200 relative h-[300px] w-[300px] rounded-xl overflow-hidden group hover:scale-95 transition-all duration-500 mt-5">
                    <div class="absolute bg-center bg-cover group w-full h-full group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                    style="background-image: url('{{ asset('storage/images/kopi2.jpg') }}');">
                    </div>
                 </div>
            </div>
            <div class="" data-aos="fade-up">
                <div class="bg-sky-200 relative h-[300px] w-[300px] rounded-xl overflow-hidden group hover:scale-95 transition-all duration-500 mt-5">
                    <div class="absolute bg-center bg-cover group w-full h-full group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                    style="background-image: url('{{ asset('storage/images/kopi3.jpg') }}');">
                    </div>
                 </div>
            </div>
            <div class="" data-aos="fade-up">
                <div class="bg-sky-200 relative h-[300px] w-[300px] rounded-xl overflow-hidden group hover:scale-95 transition-all duration-500 mt-5">
                    <div class="absolute bg-center bg-cover group w-full h-full group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                    style="background-image: url('{{ asset('storage/images/kopi3.jpg') }}');">
                    </div>
                 </div>
            </div>
            <div class="" data-aos="fade-up">
                <div class="bg-sky-200 relative h-[300px] w-[300px] rounded-xl overflow-hidden group hover:scale-95 transition-all duration-500 mt-5">
                    <div class="absolute bg-center bg-cover group w-full h-full group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                    style="background-image: url('{{ asset('storage/images/kopi2.jpg') }}');">
                    </div>
                 </div>
            </div>
            <div class="" data-aos="fade-up">
                <div class="bg-sky-200 relative h-[300px] w-[300px] rounded-xl overflow-hidden group hover:scale-95 transition-all duration-500 mt-5">
                    <div class="absolute bg-center bg-cover group w-full h-full group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                    style="background-image: url('{{ asset('storage/images/kopi1.jpg') }}');">
                    </div>
                 </div>
            </div>

        </div>
    </div>




    @include('layouts.bottom')
@endsection
