<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-navbar></x-navbar>
        <!-- Programs Section -->
        <section id="programs" class="py-16 bg-teal-800">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-10">Program Unggulan Kami</h2>
                <div class="grid md:grid-cols-3 gap-6">
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
</x-layout>