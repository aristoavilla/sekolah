<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-navbar></x-navbar>
    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-teal-700">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Hubungi Kami</h2>
            <p class="text-white mb-8">Jika Anda memiliki pertanyaan atau ingin tahu lebih lanjut tentang Sekolah Kita, jangan ragu untuk menghubungi kami.</p>
            <a href="mailto:sekolahkita@domain.com" class="inline-block bg-white text-teal-700 px-8 py-3 rounded-full font-semibold hover:bg-gray-200">Email Kami</a>
        </div>
    </section>
    <section id="contacts" class="py-16 bg-orange-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-teal-600 mb-10">Daftar Kontak Sekolah</h2>
            
            <div class="bg-white shadow-lg rounded-lg p-6">
                <table class="min-w-full table-auto">
                    <thead class="bg-teal-500 text-white">
                        <tr>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Jabatan</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- First Contact -->
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">Budi Santoso</td>
                            <td class="border px-4 py-2">Kepala Sekolah</td>
                            <td class="border px-4 py-2"><a href="mailto:budi@schoolemail.com" class="text-teal-600">budi@schoolemail.com</a></td>
                            <td class="border px-4 py-2">0812-3456-7890</td>
                        </tr>
                        <!-- Second Contact -->
                        <tr class="bg-white">
                            <td class="border px-4 py-2">Ani Purnamasari</td>
                            <td class="border px-4 py-2">Wakil Kepala Sekolah</td>
                            <td class="border px-4 py-2"><a href="mailto:ani@schoolemail.com" class="text-teal-600">ani@schoolemail.com</a></td>
                            <td class="border px-4 py-2">0813-5678-9012</td>
                        </tr>
                        <!-- Third Contact -->
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">Dedi Mulyadi</td>
                            <td class="border px-4 py-2">Guru Matematika</td>
                            <td class="border px-4 py-2"><a href="mailto:dedi@schoolemail.com" class="text-teal-600">dedi@schoolemail.com</a></td>
                            <td class="border px-4 py-2">0812-9876-5432</td>
                        </tr>
                        <!-- Add more contacts as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</x-layout>