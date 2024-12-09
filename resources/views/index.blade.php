<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Navbar -->
    <x-navbar/>  

    <!-- Hero Section with Image Slider -->
    <x-header></x-header>

    {{-- Blog post seection --}}
    <section id="blogs" class="py-16 bg-gray-100 justify">
        <h2 class="text-3xl font-bold text-teal-700 mb-10 text-center mx-10 md:mx-auto">Blog Tentang SMKN 2 Balikpapan</h2>
        <div class="container mx-auto grid gap-6 lg:grid-cols-3">
            
            <!-- Kepala Sekolah Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 lg:col-span-1 lg:order-last flex flex-col items-center w-4/5 md:w-full mx-auto"> <!-- Adjust width for small screens -->
                <img src="{{ asset('storage/img/bapakkepalasekolah.jpg') }}" alt="Gambar Kepala Sekolah" class="w-78 h-78 rounded-md mb-2">
                <div>
                    <h3 class="text-xl font-semibold text-teal-700 mb-2">{{ $principal->name }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($principal->biodate, 500) }}</p>   
                    <a href="/principals" class="text-teal-700 font-semibold hover:text-teal-900">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
            
            <!-- Blogs Section -->
            <div class="grid md:grid-cols-2 gap-6 lg:col-span-2">
                @foreach ($posts as $post)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden w-4/5 sm:w-full mx-auto"> <!-- Adjust width for small screens -->
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-teal-700 mb-2">{{ $post->title }}</h3>
                            <h4 class="text-lg font-semibold text-teal-700 mb-2">{{ $post->users->name }}</h4>
                            <p class="text-gray-600 mb-4">{{ Str::limit($post->content, 100) }}</p>
                            <a href="/{{ $post->slug }}" class="text-teal-700 font-semibold hover:text-teal-900">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
     

    <!-- About Section -->
    <section id="about" class="py-16 bg-orange-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-teal-700 mb-6">Tentang Sekolah Kita</h2>
            <p class="text-teal-700 max-w-3xl mx-auto mb-8">Sekolah Kita adalah tempat bagi siswa untuk berkembang, belajar, dan berinovasi. Kami berkomitmen untuk memberikan pendidikan terbaik dan fasilitas yang memadai untuk mendukung pembelajaran yang efektif.</p>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-16 bg-teal-800">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-10 mx-10">Program Unggulan Kami</h2>
            <div class="grid md:grid-cols-3 gap-6 mx-10">
                <div class="bg-orange-100 shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-teal-700 mb-4">Program Akademik</h3>
                    <p class="text-gray-600">Membekali siswa dengan pengetahuan akademik yang mendalam dan bermanfaat untuk masa depan mereka.</p>
                </div>
                <div class="bg-orange-100 shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-teal-700 mb-4">Program Ekstrakurikuler</h3>
                    <p class="text-gray-600">Memperkaya siswa dengan kegiatan olahraga, seni, dan keterampilan yang membantu mereka mengembangkan minat dan bakat.</p>
                </div>
                <div class="bg-orange-100 shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-teal-700 mb-4">Program Karakter</h3>
                    <p class="text-gray-600">Mengajarkan nilai-nilai moral dan etika untuk membentuk siswa menjadi individu yang berintegritas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-teal-700">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Contact Text & Buttons -->
                <div class="text-center md:text-left">
                    <h2 class="text-3xl font-bold text-white mb-6">Hubungi Kami</h2>
                    <p class="text-white mb-8">Jika Anda memiliki pertanyaan atau ingin tahu lebih lanjut tentang Sekolah Kita, jangan ragu untuk menghubungi kami.</p>

                    <!-- Email Button -->
                    
                    <!-- Social Media Links -->
                    <div class="flex justify-center md:justify-start space-x-4 mt-6">
                        <a href="mailto:sekolahkita@domain.com" target="_blank" class=" bg-white text-teal-700 px-4 py-2 rounded-full font-semibold hover:bg-gray-200">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                        <a href="https://www.facebook.com/smkn2bpn" target="_blank" class="bg-white text-teal-700 px-4 py-2 rounded-full font-semibold hover:bg-gray-200">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/osisskada" target="_blank" class="bg-white text-teal-700 px-4 py-2 rounded-full font-semibold hover:bg-gray-200">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send/?phone=6287716552425" target="_blank" class="bg-white text-teal-700 px-4 py-2 rounded-full font-semibold hover:bg-gray-200">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Embedded Google Map -->
                <div>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8921567386533!2d116.8414821742357!3d-1.2345631987536654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df148c944618985%3A0x6e5c97bc73558481!2sSchool%20SMK%20Negeri%202%20Balikpapan!5e0!3m2!1sen!2sid!4v1733705300361!5m2!1sen!2sid" 
                        width="100%" 
                        height="350" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>
</x-layout>