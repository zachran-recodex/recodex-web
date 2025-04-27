<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Kami menyediakan layanan pembuatan website profesional yang responsif, fungsional, dan sesuai kebutuhan bisnis Anda, baik untuk company profile, e-commerce, maupun platform custom.',
                'icon' => 'window',
                'image_path' => null,
                'is_active' => true
            ],
            [
                'title' => 'SEO Optimization',
                'description' => 'Layanan optimasi mesin pencari untuk meningkatkan visibilitas website Anda di Google dan mesin pencari lainnya, sehingga bisnis Anda lebih mudah ditemukan oleh calon pelanggan.',
                'icon' => 'cursor-arrow-rays',
                'image_path' => null,
                'is_active' => true
            ],
            [
                'title' => 'Domain Registration',
                'description' => 'Penyediaan layanan registrasi domain dengan berbagai pilihan ekstensi yang sesuai dengan identitas bisnis Anda, sekaligus memastikan keamanan dan kemudahan pengelolaan.',
                'icon' => 'bookmark-square',
                'image_path' => null,
                'is_active' => true
            ],
            [
                'title' => 'Hosting',
                'description' => 'Menyediakan layanan hosting yang aman, cepat, dan stabil untuk menjamin performa website tetap optimal, didukung oleh server berkualitas tinggi.',
                'icon' => 'server-stack',
                'image_path' => null,
                'is_active' => true
            ],
            [
                'title' => 'Maintenance & Support',
                'description' => 'Layanan pemeliharaan website dan aplikasi, termasuk update sistem, perbaikan bug, dan dukungan teknis agar performa digital bisnis Anda tetap prima.',
                'icon' => 'wrench-screwdriver',
                'image_path' => null,
                'is_active' => true
            ],
            [
                'title' => 'IT Consultant',
                'description' => 'Memberikan konsultasi teknologi informasi yang strategis untuk membantu bisnis menentukan solusi digital yang tepat, efisien, dan sesuai kebutuhan.',
                'icon' => 'briefcase',
                'image_path' => null,
                'is_active' => true
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Perancangan antarmuka (UI) dan pengalaman pengguna (UX) yang intuitif, modern, dan menarik, guna memastikan kenyamanan dan kemudahan bagi pengguna website maupun aplikasi.',
                'icon' => 'layout',
                'image_path' => null,
                'is_active' => true
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
