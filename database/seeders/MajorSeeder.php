<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSeeder extends Seeder
{
    public function run(): void
    {
        $majors = [
            [
                'name' => 'Rekayasa Perangkat Lunak',
                'slug' => 'rekayasa-perangkat-lunak',
                'description' => 'Focusing on software development, including programming, software design, and system analysis.',
            ],
            [
                'name' => 'Teknik Komputer dan Jaringan',
                'slug' => 'teknik-komputer-dan-jaringan',
                'description' => 'Specializing in computer networks, hardware configuration, and IT infrastructure management.',
            ],
            [
                'name' => 'Multimedia',
                'slug' => 'multimedia',
                'description' => 'Covering multimedia production, including graphic design, animation, video editing, and web design.',
            ],
            [
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'slug' => 'akuntansi-dan-keuangan-lembaga',
                'description' => 'Providing knowledge in accounting principles, financial management, and institutional bookkeeping.',
            ],
            [
                'name' => 'Perbankan dan Keuangan Mikro',
                'slug' => 'perbankan-dan-keuangan-mikro',
                'description' => 'Emphasizing banking operations, microfinance systems, and customer service in financial institutions.',
            ],
            [
                'name' => 'Otomatisasi dan Tata Kelola Perkantoran',
                'slug' => 'otomatisasi-dan-tata-kelola-perkantoran',
                'description' => 'Teaching office administration, automation systems, and modern workplace management.',
            ],
            [
                'name' => 'Bisnis Daring dan Pemasaran',
                'slug' => 'bisnis-daring-dan-pemasaran',
                'description' => 'Focusing on e-commerce, online marketing strategies, and digital business operations.',
            ],
        ];        

        foreach ($majors as $major) {
            Major::create($major);
        }
    }
}
