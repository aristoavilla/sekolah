<x-layout>
    <x-slot:title>Blog Posts</x-slot:title>

    <x-navbar></x-navbar>

    <!-- Blog Posts Section -->
    <section id="blogs" class="py-16 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-teal-700 mb-10 text-center">Artikel dan Informasi</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($posts as $post)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <!-- Image -->
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-teal-700 mb-2">{{ $post->title }}</h3>
                        <p class="text-gray-600 mb-4 text-sm">{{ Str::limit($post->content, 120) }}</p>
                        <a href="/{{ $post->slug }}" class="text-teal-500 font-semibold hover:underline">
                            Baca Selengkapnya &rarr;
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>
    </section>

    <x-footer></x-footer>
</x-layout>
