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
                            href="/">Home</a></li>
                    <li class=""><a class="text-light font-semibold hover:text-primary transition-all duration-300"
                            href="/menu">Menu</a></li>
                    <li class=""><a class="text-light font-semibold hover:text-primary transition-all duration-300"
                            href="/gallery">Gallery</a>
                    </li>
                    <li class=""><a class="text-light font-semibold hover:text-primary transition-all duration-300"
                            href="/about">About</a></li>
                </ul>
            </div>
            <a class="text-primary bg-amber-50 py-1 px-5  rounded font-semibold hover:bg-muted-dark hidden md:flex hover:text-accent-dark transition-all duration-300"
                href="/logout">Logout</a>
        </div>
        {{-- Mobile --}}
        <div class="absolute w-full md:hidden">
            <div class="grid py-2 px-[70px]">
                <ul class="space-y-5">
                    <li class="active:bg-muted-dark py-1 px-2 rounded"><a class="text-light" href="/">Home</a></li>
                    <li class="active:bg-muted-dark py-1 px-2 rounded"><a class="text-light" href="/menu">Menu</a></li>
                    <li class="active:bg-muted-dark py-1 px-2 rounded"><a class="text-light" href="/gallery">Gallery</a></li>
                    <li class="active:bg-muted-dark py-1 px-2 rounded"><a class="text-light" href="/about">About</a></li>
                    <li class="py-1 px-2 "><a
                            class="text-accent-dark py-2 px-5 bg-muted-dark rounded text-sm  font-semibold active:bg-amber-50 active:text-primary"
                            href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
        {{-- end --}}
    </div>
