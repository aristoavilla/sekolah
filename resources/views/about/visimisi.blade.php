<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-navbar></x-navbar>

    <!-- Vision Section -->
    <section id="vision" class="py-16 bg-teal-100">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-bold text-teal-700 mb-6">Visi</h3>
            <p class="text-teal-700 max-w-2xl mx-auto mb-8 italic text-lg">
                "Menghasilkan Lulusan Profesional yang Berwawasan Lingkungan Berdasarkan Iman, Taqwa, Ilmu Pengetahuan dan Teknologi"
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section id="mission" class="py-16 bg-orange-200">
        <div class="container mx-auto">
            <h3 class="text-3xl font-bold text-teal-700 text-center mb-6">Misi</h3>
            <ul class="text-teal-700 max-w-2xl mx-auto mb-8 list-disc list-inside text-justify text-lg">
                <li>Menghasilkan Lulusan yang Profesional</li>
                <li>Melaksanakan Proses Belajar Mengajar berbasis Teknologi dan Informasi</li>
                <li>Membentuk Karakter Lulusan dengan Penguatan Iman dan Takwa</li>
                <li>Menciptakan Sekolah berwawasan Lingkungan</li>
                <li>Menghasilkan Lulusan berjiwa Wirausaha</li>
            </ul>
        </div>
    </section>

    <x-footer></x-footer>
</x-layout>
