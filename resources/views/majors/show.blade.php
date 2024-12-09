<x-layout>
    <x-slot:title>{{ $major->name }}</x-slot:title>

    <!-- Navbar -->
    <x-navbar />

    <!-- Major Detail Section -->
    <section id="major-detail" class="py-16 bg-orange-50">
        <div class="container mx-auto px-6 lg:px-16">
            <!-- Title -->
            <h2 class="text-4xl font-bold text-center text-teal-700 mb-12" style="font-family: 'Playfair Display', serif;">
                {{ $major->name }}
            </h2>

            <!-- Content -->
            <div class="bg-white shadow-lg rounded-lg p-8">
                <!-- Back Button -->
                <div class="mb-4">
                    <a href="{{ url()->previous() }}" 
                       class="inline-block bg-transparent text-teal-500 text-sm px-4 py-1 rounded shadow-md hover:bg-teal-500 hover:text-white transition-all">
                        &larr; Kembali
                    </a>
                </div>                

                <!-- Description -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold text-teal-700 mb-4">Deskripsi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $major->description }}
                    </p>
                </div>

                <!-- Available Classes -->
                <div>
                    <h3 class="text-2xl font-semibold text-teal-700 mb-4">Kelas Tersedia</h3>
                    @if ($major->classrooms->isNotEmpty())
                        <ul class="list-disc pl-6 text-gray-700">
                            @foreach ($major->classrooms as $classroom)
                                <li class="mb-2">
                                    <span class="font-medium text-teal-800">{{ $classroom->class_name }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-700 italic">Belum ada kelas yang tersedia untuk jurusan ini.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <x-footer />
</x-layout>
