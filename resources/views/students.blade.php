<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Navbar -->
    <x-navbar/>  

    <!-- Hero Section with Image Slider -->
    <x-header></x-header>

    <!-- Contact Section -->
    <section id="contacts" class="py-16 bg-orange-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-teal-600 mb-10">Daftar Siswa Berprestasi</h2>
            
            <div class="bg-white shadow-lg rounded-lg p-6">
                <table class="min-w-full table-auto">
                    <thead class="bg-teal-500 text-white">
                        <tr>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Umur</th>
                            <th class="px-4 py-2">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- First Contact -->
                        @foreach ($students as $student)    
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">{{ $student->name }}</td>
                            <td class="border px-4 py-2">{{ $student->age }}</td>
                            <td class="border px-4 py-2">{{ $student->class }}</td>
                        </tr>
                        @endforeach
                        <!-- Add more contacts as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</x-layout>