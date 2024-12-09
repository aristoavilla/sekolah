<x-layout>
    <x-navbar></x-navbar>

    <section id="extracurriculars" class="py-16 bg-gray-100">
        <h2 class="text-3xl font-bold text-teal-700 mb-10 text-center">Ekstrakurikuler di SMKN 2 Balikpapan</h2>

        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6"> <!-- 3-column grid layout for large screens -->
            <!-- Main content column for extracurricular descriptions -->
            <div class="col-span-2">
                @foreach ($extracurriculars as $extracurricular)
                    <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                        <h3 class="text-2xl font-semibold text-teal-700 mb-4">{{ $extracurricular->name }}</h3>
                        <p class="text-gray-700 mb-4">{{ $extracurricular->description }}</p>
                        <a href="/extracurriculars/{{ $extracurricular->slug }}" 
                           class="text-teal-700 font-semibold hover:text-teal-900">Lihat Detail &rarr;</a>
                    </div>
                @endforeach
            </div>

            <!-- Sidebar column with additional content, such as categories or popular extracurriculars -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h4 class="text-xl font-semibold text-teal-700 mb-4">Kategori Ekstrakurikuler</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-teal-700 hover:text-teal-900">Olahraga</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900">Kesenian</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900">Kepemimpinan</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900">Sains dan Teknologi</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900">Sosial dan Kemanusiaan</a></li>
                </ul>
            </div>
        </div>
    </section>

    <x-footer></x-footer>
</x-layout>
