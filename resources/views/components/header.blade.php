{{-- This thing is going to pass the date to the Image Slider section --}}
<header x-data="{ activeSlide: 0, slides: ['{{ asset('storage/img/img1-1.jpg') }}', '{{ asset('storage/img/img1-2.jpg') }}'] }" x-init="setInterval(() => { activeSlide = (activeSlide + 1) % slides.length }, 5000)" class="relative bg-teal-800 text-white py-24">
    
    {{-- Head of page --}}
    <div class="container text-center relative z-10 mx-auto">
        <h1 class="text-4xl font-bold mb-4 mx-10 md:mx-10">Selamat Datang di SMKN 2 Balikpapan</h1>
        <p class="text-lg mx-10 md:mx-10">Membentuk generasi masa depan yang berprestasi dan berakhlak mulia. Kami juga memiliki komunitas bernama Skadaswag!</p>
        <a href="/skadaswag" class="mt-6 inline-block bg-orange-100 text-teal-700 px-6 py-2 rounded-full font-semibold hover:bg-teal-500">Pelajari Lebih Lanjut</a>
    </div>

    <!-- Image Slider, get the data from the top of this file code and animate it here -->
    <div class="absolute inset-0 overflow-hidden z-0">
        <template x-for="(slide, index) in slides" :key="index">
            <img :src="slide" x-show="activeSlide === index" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-[3000ms] opacity-0" 
            x-transition:enter="transition-opacity ease-in-out duration-[3000ms]" 
            x-transition:enter-start="opacity-0" 
            x-transition:enter-end="opacity-100" 
            x-transition:leave="transition-opacity ease-in-out duration-[3000ms]" 
            x-transition:leave-start="opacity-100" 
            x-transition:leave-end="opacity-0" />
        </template>
    </div>
</header>   