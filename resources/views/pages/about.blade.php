@extends('layouts.master')
@include('layouts.navbar')

@section('title', 'About')
@section('content')
    <div class="pt-20 px-15 md:px-40">

        <div class="w-full bg-sky-200 h-[350px] mt-3 rounded-lg relative overflow-hidden"  data-aos="fade-up">
            <div class="absolute inset-0 bg-top bg-cover bg-fixed grid place-content-center"
                style="background-image: url('{{ asset('/storage/images/people_group.jpg') }}')">
                <div class="mb-8 ms-5 text-center z-10"  data-aos="fade-up">
                    <p class="font-extrabold text-light text-4xl">Our Story</p>
                    <p class="text-light">Discover the passion and dedication behind every cup</p>
                </div>
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
        </div>
        <h1 class="mt-5 text-dark font-bold text-2xl"  data-aos="fade-up">Our Journey</h1>
        <div class="flex mt-8 gap-3"  data-aos="fade-up">
            <i class="fa-solid fa-lightbulb text-primary mt-1"></i>
            <div class="flex flex-col"  data-aos="fade-up">
                <p class="text-dark text-lg">The Dream Begin</p>
                <p class="text-primary text-thin text-sm">2018</p>
                <p class="text-primary text-thin text-sm mt-2">A shared passion for coffee and community sparks an idea
                    between two friends</p>
            </div>
        </div>
        <div class="flex mt-8 gap-3"  data-aos="fade-up">
            <i class="fa-solid fa-mug-hot text-primary mt-1"></i>
            <div class="flex flex-col"  data-aos="fade-up">
                <p class="text-dark text-lg">Our First Cafe</p>
                <p class="text-primary text-thin text-sm">2020</p>
                <p class="text-primary text-thin text-sm mt-2">After years of planning and perfecting our craft, we opened
                    our doors to the public</p>
            </div>
        </div>
        <div class="flex mt-8 gap-3"  data-aos="fade-up">
            <i class="fa-solid fa-store text-primary mt-1"></i>
            <div class="flex flex-col"  data-aos="fade-up">
                <p class="text-dark text-lg">Expanding the Vision</p>
                <p class="text-primary text-thin text-sm">2023</p>
                <p class="text-primary text-thin text-sm mt-2">Growing our family, we opened a new location to share out
                    love for coffee with more people</p>
            </div>
        </div>
    </div>

    <div class="pt-20 px-15 md:px-40 mb-16">
        <div class="grid grid-cols-2 justify-items-center md:flex md:justify-between">
            <div class="w-[100%] md:w-[45%]"  data-aos="fade-up">
                <p class="text-dark text-2xl font-bold">Our Philosophy</p>
                <p class="text-primary mt-2 text-justify">We belive in quality form bean to cup. Our commitment to ethical
                    sourcing and meticulos preparation ensures that every sip tells a story of its own. It's not just
                    coffee, it's an experience crafted with care, passion, and a deep respect for the art of coffee making
                </p>
            </div>
            <div class="w-[70%] h-full md:w-[45%] bg-sky-200 md:h-[150px] mt-3 rounded-lg relative overflow-hidden"  data-aos="fade-up">
                <div class="absolute inset-0 bg-center bg-cover"
                    style="background-image: url('{{ asset('/storage/images/kopi1.jpg') }}')">
                </div>
            </div>
        </div>
       <div class="grid grid-cols-2 justify-items-center mt-16 md:flex md:justify-between"  data-aos="fade-up">
          <div class="w-[70%] h-full md:w-[45%] bg-sky-200 md:h-[150px] mt-3 rounded-lg relative overflow-hidden">
                <div class="absolute inset-0 bg-center bg-cover"
                    style="background-image: url('{{ asset('/storage/images/kopi2.jpg') }}')">
                </div>
            </div>
             <div class="w-[100%] md:w-[45%]"  data-aos="fade-up">
                <p class="text-dark text-2xl font-bold">The beans</p>
                <p class="text-primary mt-2 text-justify">Sourced from the highlands of Ethiopia, our single-origin beans are selected for their unique flavor profiles and sustainable farming practices. We work directly with farmers to ensure fair trade and exceptional quality, bringing you a cup that is both delicious and ethical
                </p>
            </div>
        </div>

        <p class="text-2xl md:text-3xl text-dark text-center italic mt-28"  data-aos="fade-up">"To us, coffee is more than a drink. It's a ritual, a moment of connection, a catalyst for creativity. We wanted to create a space where that magic could unfold."</p>
        <p class="text-center text-sm text-gray-400 mt-3"  data-aos="fade-up">- The Founders</p>
    </div>
    </div>
    @include('layouts.bottom')
@endsection
