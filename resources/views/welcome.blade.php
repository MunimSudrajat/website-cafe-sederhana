@extends('layouts.master')

@section('content')
@section('title', 'Home')
{{-- Section Navbar --}}
     <div class=" bg-accent-dark w-full z-50 fixed main-h-0 transition-all duration-700 ease-in-out overflow-hidden shadow top-0"
        id="nav">
        <div class="flex items-center py-3 px-10 md:px-16 ">
            <div class="bg-light rounded-full mr-2">
                <img src="{{ asset('storage/images/logo_kafeKita.png') }}" class="w-[30px] md:w-[50px]" alt="">
            </div>
            <p class="font-bold text-light md:text-xl hover:text-primary transition-all duration-300 cursor-pointer ml-2">
                KAFEKITA</p>
            {{-- humberger mobile --}}
            <div class="ms-auto md:hidden">
                <i class="fa-solid fa-bars text-light text-xl cursor-pointer" id="humberger"></i>
            </div>
            {{-- end --}}
            <div class="hidden md:flex m-auto">
                <ul class="md:flex gap-15">
                    <li class=""><a class="text-light font-semibold hover:text-primary transition-all duration-300"
                            href="/login">Home</a></li>
                    <li class=""><a class="text-light font-semibold hover:text-primary transition-all duration-300"
                            href="/login">Menu</a></li>
                    <li class=""><a class="text-light font-semibold hover:text-primary transition-all duration-300"
                            href="/login">Gallery</a>
                    </li>
                    <li class=""><a class="text-light font-semibold hover:text-primary transition-all duration-300"
                            href="/login">About</a></li>
                </ul>
            </div>
            <a class="text-primary bg-amber-50 py-1 px-5  rounded font-semibold hover:bg-muted-dark hidden md:flex hover:text-accent-dark transition-all duration-300"
                href="/login">Login</a>
        </div>
        {{-- Mobile --}}
        <div class="absolute w-full md:hidden">
            <div class="grid py-2 px-[70px]">
                <ul class="space-y-5">
                    <li class="active:bg-muted-dark py-1 px-2 rounded"><a class="text-light" href="">Home</a></li>
                    <li class="active:bg-muted-dark py-1 px-2 rounded"><a class="text-light" href="">Menu</a></li>
                    <li class="active:bg-muted-dark py-1 px-2 rounded"><a class="text-light" href="">Gallery</a></li>
                    <li class="active:bg-muted-dark py-1 px-2 rounded"><a class="text-light" href="">About</a></li>
                    <li class="py-1 px-2 "><a
                            class="text-accent-dark py-2 px-5 bg-muted-dark rounded text-sm  font-semibold active:bg-amber-50 active:text-primary"
                            href="/login">Login</a></li>
                </ul>
            </div>
        </div>
        {{-- end --}}
    </div>
{{-- End --}}

     {{-- Hero section --}}
    <div class="pt-20 px-15 md:px-40 flex items-center">
        <div class="relative w-full h-[400px] md:h-[500px] rounded-xl overflow-hidden flex items-center justify-center">

            <!-- Parallax background -->
            <div class="absolute inset-0 bg-center bg-cover bg-fixed"
                style="background-image: url('{{ asset('storage/images/hero.jpg') }}');">
            </div>

            <!-- Overlay gelap -->
            <div class="absolute inset-0 bg-black/50"></div>

            <!-- Konten -->
            <div data-aos="fade-up">
                <div class="relative grid justify-items-center text-center gap-7 z-10">
                    <h1 class="font-extrabold text-2xl md:text-5xl text-light">Experience the Art of Coffee</h1>
                    <p class="font-thin text-light text-sm md:text-lg">
                        A place where every cup tells a story, <br class="md:hidden"> crafted with passion and precision<br>
                        for the discerning palate
                    </p>
                    <a class="text-light font-bold rounded-xl bg-primary px-3 py-2 md:px-6 md:py-3 hover:bg-accent-dark transition-all duration-300 text-sm"
                        href="/login">
                        Explore Our Menu
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}

    {{-- Section Kelebihan --}}
    <div class="pt-20 px-15 md:p-40">
        <div class="grid justify-center text-center gap-7" data-aos="fade-up">
            <h1 class="text-dark text-3xl md:text-4xl font-extrabold">Why KafeKita ?</h1>
            <P class="font-thin text-accent-dark">We are dedicated to the craft of coffee. Our beans are sourced from
                the finest single-origin <br class="hidden md:flex">farms, roasted in-house to perfection, and brewed by
                passsionate baristas.
                Step into a world of <br class="hidden md:flex"> refined taste and tranquility, where every detail is
                curated to enhance your
                coffee experience
            </P>
        </div>
        <div class="grid justify-center gap-5 mt-15 md:flex md:justify-between">
            <div
                data-aos="fade-up" class="p-11 border border-zinc-200 shadow rounded-xl text-center space-y-3 hover:scale-105 duration-200 ease-in-out">
                <i class="fa-solid fa-seedling text-accent-dark text-3xl"></i>
                <p class="font-bold text-xl text-dark mt-8">Single-Origin Beans</p>
                <p class="text-thin text-accent-dark">Sourced from the best coffee <br> growing regions around the world
                </p>
            </div>
            <div
                data-aos="fade-up" class="p-11 border border-zinc-200 shadow rounded-xl text-center space-y-3 hover:scale-105 duration-200 ease-in-out">
                <i class="fa-solid fa-martini-glass text-accent-dark text-3xl"></i>
                <p class="font-bold text-xl text-dark mt-8">Expert Baristas</p>
                <p class="text-thin text-accent-dark">Our baristas are masters of their <br>craft, ensuring a perfect
                    cup every <br>time</p>
            </div>
            <div
                data-aos="fade-up" class="p-11 border border-zinc-200 shadow rounded-xl text-center space-y-3 hover:scale-105 duration-200 ease-in-out">
                <i class="fa-solid fa-cake-candles text-accent-dark text-3xl"></i>
                <p class="font-bold text-xl text-dark mt-8">Artisanal Pastries</p>
                <p class="text-thin text-accent-dark">Handcrafted daily using the finest <br>ingredients</p>
            </div>
        </div>
    </div>
    {{-- End --}}

    {{-- Section best selling --}}
    <div class="pt-20 px-15 md:p-40">
        <div class="" data-aos="fade-up">
            <h1 class="text-3xl text-center font-extrabold text-dark">Best Selling Menu</h1>
        </div>
        <div class="grid grid-col-1 justify-center md:flex md:justify-between">
            <div class="grid grid-col-1 text-center mt-15 " data-aos="fade-up">
                <img src="{{ asset('storage/images/kopi1.jpg') }}"
                    class="w-[330px] h-[450px] rounded-xl hover:scale-105 duration-200 ease-in-out" alt="">
                <p class="text-thin text-dark text-xl mt-5 font-bold">Signature Pour-Over</p>
                <p class="text-thin text-accent-dark mt-1">The purest expression of our single <br> origin beans</p>
            </div>
            <div class="grid grid-col-1 text-center mt-15 " data-aos="fade-up">
                <img src="{{ asset('storage/images/kopi2.jpg') }}"
                    class="w-[330px] h-[450px] rounded-xl hover:scale-105 duration-200 ease-in-out" alt="">
                <p class="text-thin text-dark text-xl mt-5 font-bold">Almond Coffe</p>
                <p class="text-thin text-accent-dark mt-1">Flaky, sweet, and fresh daily</p>
            </div>
            <div class="grid grid-col-1 text-center mt-15 " data-aos="fade-up">
                <img src="{{ asset('storage/images/kopi3.jpg') }}"
                    class="w-[330px] h-[450px] rounded-xl hover:scale-105 duration-200 ease-in-out" alt="">
                <p class="text-thin text-dark text-xl mt-5 font-bold">Velvet Cold Brew</p>
                <p class="text-thin text-accent-dark mt-1">Slow-steeped for a smooth, rich flavor</p>
            </div>
        </div>
    </div>
    {{-- end --}}

    {{-- Komen section --}}
    <div class="pt-20 px-15 md:p-40">
        <div class="grid grid-col-1 justify-center text-center" data-aos="fade-up">
            <p class="font-bold text-3xl text-dark md:text-4xl">What Our Patrons Say</p>
            <p class="text-thin text-accent-dark mt-3">Glimpses into the experience that make, <br>The Grind a cherished
                destination for coffee lovers</p>
        </div>
        <div class="grid justify-center mt-5 md:flex md:justify-between">
            <div
                class="p-8 grid shadow border h-[300px] w-[330px] border-zinc-100 rounded-lg md:mt-5 mt-8 hover:scale-105 duration-200 ease-in-out">
                <div class="flex items-center">
                    <img src="{{ asset('storage/images/orang(1).jpg') }}" class="w-[30px] h-[30px] rounded-full"
                        alt="">
                    <div class="grid ml-2" data-aos="fade-up">
                        <p class="font-bold text-dark text-xl">Mr. Joko</p>
                        <p class="text-thin text-accent-dark text-sm">Coffe Conniseur</p>
                    </div>
                </div>
                <div class="" data-aos="fade-up">
                    <p class="italic mt-3 text-gray-500">"An absolute gem. The attention to detail in every cup is
                        palpable. The ambience is
                        perfect for both quite reflection and catching up with friends. Amust-visit for any true coffee
                        afcionado."</p>
                    </div>
            </div>
            <div
                class="p-8 grid shadow border h-[300px] w-[330px] border-zinc-100 rounded-lg mt-5 hover:scale-105 duration-200 ease-in-out">
                <div class="flex items-center">
                    <img src="{{ asset('storage/images/orang(2).jpg') }}" class="w-[30px] h-[30px] rounded-full"
                        alt="">
                    <div class="grid ml-2" data-aos="fade-up">
                        <p class="font-bold text-dark text-xl">James L.</p>
                        <p class="text-thin text-accent-dark text-sm">Local Foodie</p>
                    </div>
                </div>
                <div class="" data-aos="fade-up">
                    <p class="italic mt-3 text-gray-500">"The Grind has elevated the coffee scene in our city. The pastries are
                        divine, perfectly complementing their exceptional brews. The minimalist design and warm tones create
                        such a welcoming atmosphere."</p>
                    </div>
            </div>
            <div
                class="p-8 grid shadow border h-[300px] w-[330px] border-zinc-100 rounded-lg mt-5 hover:scale-105 duration-200 ease-in-out">
                <div class="flex items-center">
                    <img src="{{ asset('storage/images/orang(3).jpg') }}" class="w-[30px] h-[30px] rounded-full"
                        alt="">
                    <div class="grid ml-2" data-aos="fade-up">
                        <p class="font-bold text-dark text-xl">David bowo</p>
                        <p class="text-thin text-accent-dark text-sm">Regular Patron</p>
                    </div>
                </div>
                <div class="" data-aos="fade-up">
                    <p class="italic mt-3 text-gray-500">"My daily ritual. The consistency in quality and service is
                        remarkable. It's a community. The staff knows my order by heart, and it always feels like coming home."
                    </p>
                </div>
            </div>
        </div>
    </div>
@include('layouts.bottom')
@endsection
