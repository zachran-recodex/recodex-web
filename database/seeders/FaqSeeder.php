<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Apa layanan utama yang ditawarkan Recodex ID?',
                'answer' => 'Recodex ID menyediakan layanan pembuatan website, pengembangan aplikasi mobile, SEO optimization, registrasi domain, hosting, maintenance & support, IT consultant, dan UI/UX design.',
            ],
            [
                'question' => 'Apa keunggulan layanan website Recodex ID?',
                'answer' => 'Kami mengembangkan website yang responsif, fungsional, estetik, serta mengutamakan user experience dan optimasi SEO.',
            ],
            [
                'question' => 'Bagaimana proses kerja di Recodex ID?',
                'answer' => 'Proses kerja kami meliputi konsultasi & perencanaan, desain & pengembangan, pengujian & optimasi, peluncuran, serta dukungan berkelanjutan.',
            ],
            [
                'question' => 'Apakah Recodex ID menyediakan layanan maintenance website?',
                'answer' => 'Ya, kami menyediakan layanan maintenance termasuk update sistem, perbaikan bug, dan dukungan teknis jangka panjang.',
            ],
            [
                'question' => 'Apakah Recodex ID membantu dalam SEO website?',
                'answer' => 'Ya, kami menyediakan layanan SEO untuk meningkatkan visibilitas website di Google dan mesin pencari lainnya.',
            ],
            [
                'question' => 'Apakah Recodex ID menyediakan domain dan hosting?',
                'answer' => 'Kami menyediakan layanan registrasi domain berbagai ekstensi dan layanan hosting yang aman, cepat, dan stabil.',
            ],
            [
                'question' => 'Apakah bisa berkonsultasi sebelum mulai proyek?',
                'answer' => 'Tentu saja! Kami menyediakan layanan konsultasi IT untuk membantu menentukan solusi digital yang tepat dan efisien.',
            ],
            [
                'question' => 'Bagaimana cara menghubungi Recodex ID?',
                'answer' => 'Anda dapat menghubungi kami melalui email di info@recodex.id atau WhatsApp di +62 822-9814-1940.',
            ],
            [
                'question' => 'Apa visi dari Recodex ID?',
                'answer' => 'Menjadi mitra teknologi digital terpercaya dalam menghadirkan solusi website inovatif yang mendorong pertumbuhan bisnis di era revolusi industri.',
            ],
            [
                'question' => 'Apa misi utama Recodex ID?',
                'answer' => 'Misi kami meliputi penyediaan website responsif, fokus pada user experience, meningkatkan visibilitas online, layanan profesional, serta inovasi berkelanjutan.',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
