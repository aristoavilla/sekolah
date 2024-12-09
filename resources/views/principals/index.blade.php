<x-layout>
    <x-navbar></x-navbar>

    <div class="bg-yellow-100 flex flex-col items-center py-8">
        {{ Breadcrumbs::render() }}   

        <h1 class="text-2xl font-bold text-teal-800 mb-4">Kepala Sekolah SMKN 2 Balikpapan</h1>
        
        <div class="container bg-white px-6 py-8 shadow-lg rounded-md flex flex-col md:flex-row items-center gap-6 mb-4">
            
            <!-- Text Section -->
            <section class="md:w-2/3">
                <h2 class="text-xl font-bold text-gray-700 mb-2">{{ $activePrincipal->name }}</h2>
                <h3 class="text-lg font-bold text-teal-950 mb-2">{{ $activePrincipal->promoted_date}}{{ $activePrincipal->retire_date === null ? '  - now' : ' - '. $activePrincipal->retire_date}}</h3>
                <p class="text-gray-600 leading-relaxed">
                    {{ $activePrincipal->biodate }}
                </p>
            </section>
    
            <!-- Image Section -->
            <div class="md:w-1/3 flex justify-center">
                <img src="{{ asset('storage/'. $activePrincipal->image) }}" alt="Gambar Kepala Sekolah" 
                     class="w-96 object-cover rounded-md shadow-md">
            </div>
        </div>

        <hr class="h-px my-8 border-0 bg-gray-700">

        <h1 class="text-2xl font-bold text-teal-800 mb-4">Mantan Kepala Sekolah SMKN 2 Balikpapan</h1>
        
        @foreach ($retiredPrincipals as $retiredPrincipal)
            
        <div class="container bg-gray-200 px-6 py-8 shadow-lg rounded-md flex flex-col md:flex-row items-center gap-6 mb-4">
            
            <!-- Text Section -->
            <section class="md:w-2/3">
                <h2 class="text-xl font-bold text-gray-700 mb-2">{{ $retiredPrincipal->name }}</h2>
                <h3 class="text-lg font-bold text-teal-950 mb-2">{{ $retiredPrincipal->promoted_date}}{{ $retiredPrincipal->retire_date === null ? '  - now' : ' - '. $retiredPrincipal->retire_date}}</h3>
                <p class="text-gray-600 leading-relaxed">
                    {{ $retiredPrincipal->biodate }}
                </p>
            </section>
    
            <!-- Image Section -->
            <div class="md:w-1/3 flex justify-center">
                <img src="{{ asset('storage/'. $retiredPrincipal->image) }}" alt="Gambar Kepala Sekolah" 
                     class="w-96 object-cover rounded-md shadow-md">
            </div>
        </div>
        @endforeach

        <div class="container bg-gray-200 px-6 py-8 shadow-lg rounded-md flex flex-col md:flex-row items-center gap-6 mb-2">
            <!-- Text Section -->
            <section class="md:w-2/3">
                <h2 class="text-xl font-bold text-gray-700 mb-2">Edy Widodo, S.Pd</h2>
                <h3 class="text-lg font-bold text-teal-950 mb-2"> 2023</h3>
                <p class="text-gray-600 leading-relaxed">
                    Assalamu'alaikum wr.wb<br><br>
                    Alhamdulillah, Puji Syukur kami panjatkan kehadirat-Mu Ya Allah Tuhan Yang Maha Esa atas segala Nikmat dan Karunia yang Engkau berikan kepada keluarga besar SMKN 2 Balikpapan.
                    <br><br>
                    Kami ucapkan selamat datang di Website kami ini. Seiring dengan berkembangnya Bisnis Manajemen dan Teknologi Digital serta Teknologi Informasi yang sangat pesat, kami berharap dengan adanya Website SMKN 2 Balikpapan ini dapat menjadi media yang efektif untuk sarana KBM, informasi, penyebaran berita sekolah, dan juga menjadi media untuk bertemu dengan para alumni kami.
                    <br><br>
                    Kami menyadari bahwasanya masih banyak yang harus kami perbaiki, oleh karena itu kami sangat mengharapkan saran, kritik, maupun ide yang lebih kreatif dari segenap pihak agar website kami dapat menjadi media yang up to date dalam memberikan informasi yang lebih bermanfaat. Salam Sehat dan Salam Pengabdian menuju SMKN 2 Balikpapan yang lebih baik. Terimakasih.
                </p>
            </section>
    
            <!-- Image Section -->
            <div class="md:w-1/3 flex justify-center">
                <img src="{{ asset('storage/img/siredy.jpg') }}" alt="Gambar Kepala Sekolah" 
                     class="w-96 object-cover rounded-md shadow-md">
            </div>
        </div>

    </div>
    <x-footer></x-footer>
</x-layout>