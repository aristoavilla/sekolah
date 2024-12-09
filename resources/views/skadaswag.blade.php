<x-layout>
    <x-slot:title>Skadaswag - SMKN 2 Balikpapan</x-slot:title>

    <x-navbar></x-navbar>

    <!-- Bagian Skadaswag -->
    <section id="skadaswag" class="py-16 bg-yellow-50">
        <div class="container mx-auto text-center">
            <!-- Judul -->
            <h2 class="text-4xl font-bold text-teal-700 mb-6">Selamat Datang di Skadaswag</h2>
            <p class="text-gray-700 italic max-w-3xl mx-auto text-lg mb-8">
                "Komunitas keren di SMKN 2 Balikpapan, tempat berkumpulnya individu-individu hebat yang ingin belajar, berkembang, dan mengikuti perkembangan teknologi terkini."
            </p>
        </div>
    </section>

    <!-- Bagian Tentang -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto">
            <h3 class="text-3xl font-bold text-teal-700 mb-8 text-center">Tentang Skadaswag</h3>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                <!-- Gambar -->
                <div class="flex justify-center">
                    <img src="{{ asset('storage/img/skadaswag.jpeg') }}" alt="Komunitas Skadaswag" 
                         class="rounded-md shadow-lg w-full max-w-md">
                </div>

                <!-- Teks -->
                <div class="text-gray-700 leading-relaxed">
                    <p class="mb-4">
                        Skadaswag bukan hanya sebuah komunitas—ini adalah sebuah gerakan. Lahir dari pikiran kreatif siswa-siswi SMKN 2 Balikpapan, komunitas ini adalah wadah bagi mereka yang ingin tetap terdepan dalam dunia teknologi yang terus berkembang. Dari coding hingga robotika, desain hingga inovasi, Skadaswag adalah tempat di mana semangat bertemu dengan kemajuan.
                    </p>
                    <p class="mb-4">
                        Dengan moto sederhana namun kuat: *Belajar, Memimpin, dan Berinovasi*, anggota Skadaswag mengeksplorasi keterampilan baru, berkolaborasi dalam proyek menarik, dan terinspirasi oleh tren terbaru dalam teknologi dan lainnya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Kegiatan -->
    <section class="py-16 bg-teal-50">
        <div class="container mx-auto">
            <h3 class="text-3xl font-bold text-teal-700 mb-8 text-center">Kegiatan Kami</h3>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Kegiatan 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h4 class="text-xl font-semibold text-teal-700 mb-4">Workshop Teknologi</h4>
                    <p class="text-gray-600">
                        Pelajari teknologi terbaru melalui workshop langsung yang dipandu oleh para ahli dan alumni. Mulai dari AI, pengembangan web, hingga pemasaran digital.
                    </p>
                </div>

                <!-- Kegiatan 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h4 class="text-xl font-semibold text-teal-700 mb-4">Proyek Kolaboratif</h4>
                    <p class="text-gray-600">
                        Bekerja dalam tim untuk menciptakan proyek inovatif yang memecahkan masalah dunia nyata. Di sinilah ide menjadi kenyataan!
                    </p>
                </div>

                <!-- Kegiatan 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h4 class="text-xl font-semibold text-teal-700 mb-4">Acara Inspiratif</h4>
                    <p class="text-gray-600">
                        Ikuti acara menarik seperti hackathon, diskusi teknologi, dan sesi panduan karir bersama pemimpin industri, alumni, dan rekan sejawat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Ayo Bergabung -->
    <section class="py-16 bg-orange-50">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-bold text-teal-700 mb-6">Bergabunglah dengan Skadaswag!</h3>
            <p class="text-gray-700 max-w-2xl mx-auto mb-8">
                Jika kamu memiliki semangat untuk belajar, menjadi keren, dan memberikan dampak, Skadaswag adalah tempat yang tepat untukmu. Jadilah bagian dari komunitas yang merayakan rasa ingin tahu dan inovasi!
            </p>
            <!-- Gambar -->
            <div class="flex justify-center">
                <img src="{{ asset('storage/img/skadaswag1.jpg') }}" alt="Komunitas Skadaswag" 
                     class="rounded-md shadow-lg w-full max-w-md">
            </div>
            <a href="https://forms.gle/TseZWGTd6zVGhKhJA" class="bg-teal-500 text-white px-6 py-3 rounded-full shadow-lg hover:bg-teal-600 transition-all">
                Daftar Sekarang
            </a>
        </div>
    </section>

    <x-footer></x-footer>
</x-layout>
