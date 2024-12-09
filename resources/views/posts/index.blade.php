<x-layout>
    <x-navbar></x-navbar>

    {{-- Yellow Background with Breadcrumb --}}
    <div class="bg-yellow-50 py-12">
        <div class="container mx-auto px-6 lg:px-16">
            {{-- Breadcrumbs --}}
            <div class="mb-6 text-teal-700">
                {{ Breadcrumbs::render() }}
            </div>

            {{-- Title --}}
            {{-- <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-teal-800" style="font-family: 'Playfair Display', serif;">
                    {{ $post->title }}
                </h1>
            </div> --}}

            {{-- Content Section --}}
            <div class="bg-white shadow-lg rounded-lg p-8 flex flex-col lg:flex-row gap-8 items-center">
                
                <!-- Back Button -->
                <div class="mb-4">
                    <a href="{{ url()->previous() }}" 
                       class="inline-block bg-transparent text-teal-500 text-sm px-4 py-1 rounded shadow-md hover:bg-teal-500 hover:text-white transition-all">
                        &larr; Kembali
                    </a>
                </div>   
                
                <!-- Image Section -->
                <div class="w-full lg:w-1/3 flex justify-center">
                    <img src="{{ asset('storage/'. $post->image) }}" alt="Gambar Kepala Sekolah"
                        class="w-full h-auto object-cover rounded-lg shadow-md">
                </div>

                <!-- Text Section -->
                <div class="w-full lg:w-2/3">
                    <h2 class="text-xl font-bold text-teal-950 mb-4" style="font-family: 'Playfair Display', serif;">
                        {{ $post->title }}
                    </h2>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">
                        <span class="font-bold text-teal-700">Author:</span> {{ $post->users->name }}
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        <span class="font-semibold">Biography:</span> {{ $post->content }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</x-layout>
