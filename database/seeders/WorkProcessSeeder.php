<?php

namespace Database\Seeders;

use App\Models\WorkProcess;
use Illuminate\Database\Seeder;

class WorkProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workProcesses = [
            [
                'title' => 'Konsultasi & Perencanaan',
                'description' => 'Memahami kebutuhan dan tujuan bisnis Anda untuk merancang solusi digital yang tepat.',
                'is_active' => true
            ],
            [
                'title' => 'Desain & Pengembangan',
                'description' => 'Menciptakan website yang fungsional, menarik, dan sesuai dengan identitas bisnis Anda.',
                'is_active' => true
            ],
            [
                'title' => 'Pengujian & Optimasi',
                'description' => 'Memastikan performa website optimal di semua perangkat melalui pengujian dan penyempurnaan.',
                'is_active' => true
            ],
            [
                'title' => 'Peluncuran',
                'description' => 'Menerapkan dan meluncurkan website secara profesional untuk siap digunakan.',
                'is_active' => true
            ],
            [
                'title' => 'Dukungan Berkelanjutan',
                'description' => 'Memberikan layanan support dan pemeliharaan jangka panjang untuk mendukung pertumbuhan digital Anda.',
                'is_active' => true
            ],
        ];

        foreach ($workProcesses as $process) {
            WorkProcess::create($process);
        }
    }
}
