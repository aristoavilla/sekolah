<?php

namespace Database\Seeders;

use App\Models\Principal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 9 retired principals
        Principal::factory()
            ->count(9)
            ->create();

        // Create 1 active principal (retire_date = null)
        // Principal::factory()
        //     ->create([
        //         'retire_date' => null,
        //     ]);

        Principal::create([
            'name' => 'Suparman, S.Pd',
            'promoted_date' => '2023-10-12',
            'image' => 'img/bapakkepalasekolah.jpg',
            'retire_date' => null,
            'biodate' => "Assalamu'alaikum wr.wb\nAlhamdulillah, Puji Syukur kami panjatkan kehadirat-Mu Ya Allah Tuhan Yang Maha Esa atas segala Nikmat dan Karunia yang Engkau berikan kepada keluarga besar SMKN 2 Balikpapan.\n\nKami ucapkan selamat datang di Website kami ini. Seiring dengan berkembangnya Bisnis Manajemen dan Teknologi Digital serta Teknologi Informasi yang sangat pesat, kami berharap dengan adanya Website SMKN 2 Balikpapan ini dapat menjadi media yang efektif untuk sarana KBM, informasi, penyebaran berita sekolah, dan juga menjadi media untuk bertemu dengan para alumni kami.\n\nKami menyadari bahwasanya masih banyak yang harus kami perbaiki, oleh karena itu kami sangat mengharapkan saran, kritik, maupun ide yang lebih kreatif dari segenap pihak agar website kami dapat menjadi media yang up to date dalam memberikan informasi yang lebih bermanfaat.\n\nSalam Sehat dan Salam Pengabdian menuju SMKN 2 Balikpapan yang lebih baik. Terimakasih",
        ]);
    }
}
