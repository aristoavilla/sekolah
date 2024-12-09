<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Majors Section -->
    <section id="majors" class="py-16 bg-orange-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-teal-600 mb-10">Daftar Jurusan SMKN 2 Balikpapan</h2>
            
            <div class="bg-white shadow-lg rounded-lg p-6">
                <table class="min-w-full table-auto">
                    <thead class="bg-teal-500 text-white">
                        <tr>
                            <th class="px-4 py-2">Jurusan</th>
                            <th class="px-4 py-2">Kelas Tersedia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($majors as $major)
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">{{ $major->name }}</td>
                            <td class="border px-4 py-2">
                            <span>{{ $major->description }}</span><br>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layout>
