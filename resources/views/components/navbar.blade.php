<nav x-data="{isOn: false}" class="bg-teal-950 text-white py-2 px-4 shadow-md sticky top-0 mx-auto flex flex-col justify-between z-20">
    
    {{-- Div group contains of Website Logo, Hamburger Logo (Mobile), and The Desktop Tabs --}}
    <div class="flex flex-row justify-between items-center shadow-md p-2">

        {{-- The website logo --}}
        <a href="/" class="text-3xl xl:text-xl font-bold">Skadaswag</a>
        {{-- End of website logo --}}

        {{-- This is the hamburger logo that can only be seen in mobile view, will be hidden in large screen --}}
        <button type="button" @click="isOn = !isOn" class="block xl:hidden text-white focus:outline-none">
            <svg :class="{'block': !isOn, 'hidden': isOn }" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg :class="{'block': isOn, 'hidden': !isOn }" class="hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 6L18 18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
        </button>
        {{-- End of the hamburger menu --}}

        {{-- This is the normal viewport on desktop, will be hidden in small screen --}}
        <ul class="hidden xl:flex space-x-8 items-center">
           
            {{-- Tentang Kami Tab --}}
            <li class="relative group">
                <a href="/" class="{{ request()->is('about') ? 'bg-teal-500 text-white' : 'hover:bg-gray-700 hover:text-white' }} p-2 rounded-md flex items-center">
                    Tentang Sekolah
                    <i class="fa-solid fa-chevron-down ml-2"></i>
                </a>

                <!-- Tentang Kami Dropdown Menu -->
                <ul class="absolute hidden group-hover:block bg-white shadow-md rounded-md w-48 z-10">
                    <li>
                        <a href="/visimisi" class="block px-4 py-2 text-gray-700 hover:bg-teal-500 hover:text-white rounded-t-md">
                            Visi Misi
                        </a>
                    </li>
                    <li>
                        <a href="/sejarah" class="block px-4 py-2 text-gray-700 hover:bg-teal-500 hover:text-white rounded-b-md">
                            Sejarah
                        </a>
                    </li>
                </ul>
                {{-- End of Tentang Kami dropdown menu --}}

            </li>
            {{-- End of Tentang Kami Tab --}}

            {{-- Jurusan --}}
            <li class="group">
                <a href="#" class="{{ request()->is('majors') ? ' bg-teal-500 text-white' : ' hover:bg-gray-700 hover:text-white'}} p-2 rounded-md">
                    Jurusan
                    <i class="fa-solid fa-chevron-down ml-2"></i>
                </a>
                <!-- Dropdown Menu -->
                <ul class="absolute hidden group-hover:block bg-white shadow-md rounded-md w-48 z-20">
                    @foreach ($majors as $major)
                    <li>
                        <a href="/majors/{{ $major->slug }}" class="block px-4 py-2 text-gray-700 hover:bg-teal-500 hover:text-white  
                        {{ $loop->first ? 'rounded-t-md' : '' }} 
                        {{ $loop->last ? 'rounded-b-md' : '' }}">
                            {{ $major->name }}
                        </a>
                    </li>    
                    @endforeach
                </ul>
            </li>
            {{-- End of Jurusan Tab --}}

            {{-- The Other Tabs --}}
            <li><a href="/extracurriculars" class="{{ request()->is('extracurriculars') ? ' bg-teal-500 text-white' : ' hover:bg-gray-700 hover:text-white'}} p-2 rounded-md">Ekskul</a></li>
            <li><a href="/blog" class="{{ request()->is('blog') ? ' bg-teal-500 text-white' : ' hover:bg-gray-700 hover:text-white'}} p-2 rounded-md">Blog</a></li>
            <li><a href="/contacts" class="{{ request()->is('contacts') ? ' bg-teal-500 text-white' : ' hover:bg-gray-700 hover:text-white'}} p-2 rounded-md">Kontak</a></li>

            {{-- <li class="flex items-center">
                <form action="">
                    <input type="text" name="search" id="" class="p-2 text-black w-32 h-8 rounded-md">
                    <button class="rounded-md bg-orange-800 w-12 h-8"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </li>
            <li>
                <a href="#" class="px-3 py-2 bg-teal-500 rounded-md">Login</a>
            </li> --}}
        </ul>
        {{-- End of the normal viewport --}}

    </div>
    {{-- End of the Div groups --}}

    {{-- Mobile view of the navbar --}}
    <nav x-data="{ openMenu: null }" :class="{'block': isOn, 'hidden': !isOn }" class="bg-teal-950 xl:hidden px-2">
        <ul class="text-white text-xl divide-y divide-gray-100"> <!-- Use divide-y for separators -->
            <li class="px-2 py-3 text-gray-300">
                <a @click="openMenu = openMenu === 'tentangKami' ? null : 'tentangKami'" class=" hover:text-white hover:cursor-pointer flex justify-between items-center"><span><i class="mr-2 fa-solid fa-book"></i>Tentang Kami</span><i :class="openMenu === 'tentangKami' ? 'rotate-90' : 'rotate-0'" class="fa-solid fa-chevron-right"></i></a>
                <ul x-show="openMenu === 'tentangKami'"
                x-show="openMenu === 'tentangKami'" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="transform scale-y-0 opacity-0"
                x-transition:enter-end="transform scale-y-100 opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="transform scale-y-100 opacity-100"
                x-transition:leave-end="transform scale-y-0 opacity-0"
                class="mt-2 origin-top">
                    <li class="hover:text-white hover:bg-teal-700 py-3"><a href="" class="ms-4"><i class="mr-2 fa-regular fa-note-sticky"></i>Visi Misi</a></li>
                    <li class="hover:text-white hover:bg-teal-700 py-3"><a href="" class="ms-4"><i class="mr-2 fa-solid fa-key"></i>Kompetensi Keahlian</a></li>
                </ul>
            </li>
            <li class="px-2 py-3 text-gray-300">
                <a @click="openMenu = openMenu === 'jurusan' ? null : 'jurusan'" class=" hover:text-white hover:cursor-pointer flex justify-between items-center"><span><i class="mr-2 fa-solid fa-screwdriver-wrench"></i></i>Jurusan</span><i :class="openMenu === 'jurusan' ? 'rotate-90' : 'rotate-0'" class="fa-solid fa-chevron-right"></i></a>
                <ul x-show="openMenu === 'jurusan'" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="transform scale-y-0 opacity-0"
                x-transition:enter-end="transform scale-y-100 opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="transform scale-y-100 opacity-100"
                x-transition:leave-end="transform scale-y-0 opacity-0"
                class="mt-2 origin-top">
                    @foreach ($majors as $major)
                    <li class="hover:text-white hover:bg-teal-700 py-3">
                        <a href="/{{ Str::slug($major->name) }}" class="ms-4" >
                            {{ $major->name }}
                        </a>
                    </li>    
                    @endforeach
                    
                </ul>
            </li>
            <li class="px-2 py-3 text-gray-300 hover:text-white hover:bg-teal-700"><a href="" class="block"><i class="mr-2 fa-solid fa-cubes-stacked"></i>Ekskul</a></li>
            <li class="px-2 py-3 text-gray-300 hover:text-white hover:bg-teal-700"><a href="" class="block"><i class="mr-2 fa-solid fa-user-graduate"></i>Pelajar</a></li>
            <li class="px-2 py-3 text-gray-300 hover:text-white hover:bg-teal-700"><a href="" class="block"><i class="mr-2 fa-solid fa-phone"></i>Kontak</a></li>
            <li class="px-2 py-3 text-gray-300 hover:text-white hover:bg-teal-700"><a href="" class="block"><i class="mr-2 fa-solid fa-school"></i>BKK Skada</a></li>
        </ul>
    </nav>
    {{-- End of mobile view navbar --}}

</nav>


