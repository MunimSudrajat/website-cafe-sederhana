@extends('layouts.master')
@include('layouts.navbar')
@section('title', 'Menu')


@section('content')

    <div class="pt-20 px-15 md:px-40">
        <div class="w-full bg-sky-200 h-[350px] mt-3 rounded-lg relative overflow-hidden">
            <div class="absolute inset-0 bg-center bg-cover bg-fixed grid content-end"
                style="background-image: url('{{ asset('/storage/images/hero.jpg') }}')">
                <div class="mb-8 ms-5" data-aos="fade-up">
                    <p class="font-extrabold text-dark text-4xl">Our Menu</p>
                </div>
            </div>
        </div>
        <div class="flex gap-5 mt-8 overflow-auto" data-aos="fade-up">
            <a href="" class="text-primary font-bold">Espresso & Coffee</a>
            <a href="" class="text-dark font-bold ">Teas & Infusions</a>
            <a href="" class="text-dark font-bold ">Pastries & Baked Goods</a>
            <a href="" class="text-dark font-bold ">Light Bites</a>
        </div>
        <div class="flex flex-col"  data-aos="fade-up">
            <p class="mt-8 font-extrabold text-dark text-2xl">Espresso & Coffee</p>
            <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class=" grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center"  data-aos="fade-up">
                    <div class="flex flex-col w-[300px] md:w-[370px]">
                        <p class="mt-5 font-bold text-dark">Espresso</p>
                        <p class="text-sm text-primary">A single shot of our finest, ethically sourced blend</p>
                        <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
                    </div>
                    <p class="font-extrabold text-dark ml-5">20K</p>
                </div>
            </div>
        <div class=" grid grid-cols-1 md:grid-cols-2">
            <div class="flex items-center"  data-aos="fade-up">
                    <div class="flex flex-col w-[300px] md:w-[370px]">
                        <p class="mt-5 font-bold text-dark">Espresso</p>
                        <p class="text-sm text-primary">A single shot of our finest, ethically sourced blend</p>
                        <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
                    </div>
                    <p class="font-extrabold text-dark ml-5">20K</p>
                </div>
            </div>
        <div class=" grid grid-cols-1 md:grid-cols-2">
            <div class="flex items-center"  data-aos="fade-up">
                    <div class="flex flex-col w-[300px] md:w-[370px]">
                        <p class="mt-5 font-bold text-dark">Espresso</p>
                        <p class="text-sm text-primary">A single shot of our finest, ethically sourced blend</p>
                        <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
                    </div>
                    <p class="font-extrabold text-dark ml-5">20K</p>
                </div>
            </div>
            <div class=" grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center"  data-aos="fade-up">
                    <div class="flex flex-col w-[300px] md:w-[370px]">
                        <p class="mt-5 font-bold text-dark">Espresso</p>
                        <p class="text-sm text-primary">A single shot of our finest, ethically sourced blend</p>
                        <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
                    </div>
                    <p class="font-extrabold text-dark ml-5">20K</p>
                </div>
            </div>
        </div>


        <div class="flex flex-col">
            <p class="mt-16 font-extrabold text-dark text-2xl">Pastries & Baked Goods</p>
            <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 mb-60">
            <div class=" grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center"  data-aos="fade-up">
                    <div class="flex flex-col w-[300px] md:w-[370px]">
                        <p class="mt-5 font-bold text-dark">Almond Croissant</p>
                        <p class="text-sm text-primary">Flaky crroinsant filled with sweet almond paste and topped with sliced almonds</p>
                        <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
                    </div>
                    <p class="font-extrabold text-dark ml-5">35K</p>
                </div>
                <div class="flex items-center">
            </div>
        </div>
            <div class=" grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center"  data-aos="fade-up">
                    <div class="flex flex-col w-[300px] md:w-[370px]">
                        <p class="mt-5 font-bold text-dark">Almond Croissant</p>
                        <p class="text-sm text-primary">Flaky crroinsant filled with sweet almond paste and topped with sliced almonds</p>
                        <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
                    </div>
                    <p class="font-extrabold text-dark ml-5">35K</p>
                </div>
                <div class="flex items-center">
            </div>
        </div>
            <div class=" grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center"  data-aos="fade-up">
                    <div class="flex flex-col w-[300px] md:w-[370px]">
                        <p class="mt-5 font-bold text-dark">Almond Croissant</p>
                        <p class="text-sm text-primary">Flaky crroinsant filled with sweet almond paste and topped with sliced almonds</p>
                        <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
                    </div>
                    <p class="font-extrabold text-dark ml-5">35K</p>
                </div>
                <div class="flex items-center">
            </div>
        </div>
            <div class=" grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center"  data-aos="fade-up">
                    <div class="flex flex-col w-[300px] md:w-[370px]">
                        <p class="mt-5 font-bold text-dark">Almond Croissant</p>
                        <p class="text-sm text-primary">Flaky crroinsant filled with sweet almond paste and topped with sliced almonds</p>
                        <hr class="text-gray-300 mt-5 w-[370px] md:w-[415px]">
                    </div>
                    <p class="font-extrabold text-dark ml-5">35K</p>
                </div>
                <div class="flex items-center">
            </div>
        </div>
    </div>



    @include('layouts.bottom')
@endsection
