<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $extracurriculars = [
            ['name' => 'Kerohanian Agama Islam', 'description' => 'Islamic religious activities.'],
            ['name' => 'Tahfidz (Putri & Putra)', 'description' => 'Quran memorization activities.'],
            ['name' => 'Baca Tulis Qur’an', 'description' => 'Learning Quran reading and writing.'],
            ['name' => 'Kerohanian Agama Kristen', 'description' => 'Christian religious activities.'],
            ['name' => 'Bidang Keagamaan', 'description' => 'General religious field activities.'],
            ['name' => 'Futsal/ Bola Sepak', 'description' => 'Football activities.'],
            ['name' => 'Bola Basket Putri', 'description' => 'Basketball for girls.'],
            ['name' => 'Bola Tangan (Hand Ball)', 'description' => 'Handball activities.'],
            ['name' => 'Bola Volly', 'description' => 'Volleyball activities.'],
            ['name' => 'Bela diri', 'description' => 'Martial arts activities.'],
            ['name' => 'Renang', 'description' => 'Swimming activities.'],
            ['name' => 'Badminton', 'description' => 'Badminton activities.'],
            ['name' => 'Atletik', 'description' => 'Athletics activities.'],
            ['name' => 'Tarian daerah dan Modern', 'description' => 'Traditional and modern dance activities.'],
            ['name' => 'Lampit', 'description' => 'Traditional lampit activities.'],
            ['name' => 'Skada Band', 'description' => 'Band and music activities.'],
            ['name' => 'Debat bahasa Inggris / English Club', 'description' => 'English debate club.'],
            ['name' => 'Mading', 'description' => 'School magazine activities.'],
            ['name' => 'Debat bahasa Indonesia', 'description' => 'Indonesian debate club.'],
            ['name' => 'Jurnalistik dan podcast', 'description' => 'Journalism and podcasting activities.'],
            ['name' => 'Pramuka', 'description' => 'Scouting activities.'],
            ['name' => 'Paskas / Paskibraka', 'description' => 'Flag-raising squad activities.'],
            ['name' => 'PMR', 'description' => 'Youth Red Cross activities.'],
            ['name' => 'Bidang Kepanduan, Kemanusiaan, Kepemimpinan dan Patriotisme', 'description' => 'Activities focused on scouting, humanity, leadership, and patriotism.'],
            ['name' => 'Green Generation Club', 'description' => 'Environmental activities.'],
            ['name' => 'PIK – Remaja', 'description' => 'Youth counseling activities.'],
            ['name' => 'Accounting Club', 'description' => 'Accounting activities.'],
            ['name' => 'Finance Skada Community', 'description' => 'Financial community activities.'],
        ];

        foreach ($extracurriculars as $ec) {
            Extracurricular::create($ec);
        }
    }
}
