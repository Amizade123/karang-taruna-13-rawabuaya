<?php

namespace App\Data;

class ActivityData
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Lomba 17 Agustusan',
                'category' => 'Sosial',
                'date' => '2025-08-17',
                'excerpt' => 'Perayaan HUT RI dengan lomba tradisional dan malam puncak.',
                'description' => 'Perayaan HUT Kemerdekaan RI ke-79 yang diselenggarakan oleh Karang Taruna 13. Rangkaian acara meliputi lomba tradisional (balap karung, tarik tambang, panjat pinang), lomba mewarnai untuk anak-anak, dan puncak acara berupa pentas seni warga di malam hari.',
                'image' => '/images/gallery/17-agustus/17-agustus-1.jpg',
                'images' => [
                    '/images/gallery/17-agustus/17-agustus-1.jpg',
                    '/images/gallery/17-agustus/17-agustus-2.jpg',
                    '/images/gallery/17-agustus/17-agustus-3.jpg',
                    '/images/gallery/17-agustus/17-agustus-4.jpg',
                    '/images/gallery/17-agustus/17-agustus-5.jpg',
                    '/images/gallery/17-agustus/17-agustus-6.jpg',
                    '/images/gallery/17-agustus/17-agustus-7.jpg',
                    '/images/gallery/17-agustus/17-agustus-8.jpg',
                    '/images/gallery/17-agustus/17-agustus-9.jpg',
                    '/images/gallery/17-agustus/17-agustus-10.jpg',
                    '/images/gallery/17-agustus/17-agustus-11.jpg',
                    '/images/gallery/17-agustus/17-agustus-12.jpg',
                    '/images/gallery/17-agustus/17-agustus-13.jpg',
                    '/images/gallery/17-agustus/17-agustus-14.jpg',
                    '/images/gallery/17-agustus/17-agustus-15.jpg',
                ],
            ],
            [
                'id' => 2,
                'title' => 'Halal Bihalal',
                'category' => 'Keagamaan',
                'date' => '2025-05-10',
                'excerpt' => 'Acara halal bihalal anggota Karang Taruna dan warga RT 13.',
                'description' => 'Acara halal bihalal yang diadakan setelah Hari Raya Idul Fitri. Menjadi momentum silaturahmi antar anggota Karang Taruna, pengurus, dan warga RT 13. Acara diisi dengan sambutan, saling maaf-memaafkan, dan ramah tamah.',
                'image' => '/images/gallery/halal-bihalal/halal-bihalal-1.jpg',
                'images' => [
                    '/images/gallery/halal-bihalal/halal-bihalal-1.jpg',
                    '/images/gallery/halal-bihalal/halal-bihalal-2.jpg',
                    '/images/gallery/halal-bihalal/halal-bihalal-3.jpg',
                    '/images/gallery/halal-bihalal/halal-bihalal-4.jpg',
                    '/images/gallery/halal-bihalal/halal-bihalal-5.jpg',
                ],
            ],
            [
                'id' => 3,
                'title' => 'Nonton Bareng',
                'category' => 'Sosial',
                'date' => '2026-06-18',
                'excerpt' => 'Kegiatan nobar untuk mempererat kebersamaan anggota.',
                'description' => 'Kegiatan nonton bareng yang diadakan sebagai ajang refreshing dan mempererat tali silaturahmi antar anggota Karang Taruna 13. Suasana hangat dan penuh kebersamaan mewarnai acara ini.',
                'image' => '/images/gallery/nobar/nobar-1.jpeg',
                'images' => [
                    '/images/gallery/nobar/nobar-1.jpeg',
                    '/images/gallery/nobar/nobar-2.jpeg',
                    '/images/gallery/nobar/nobar-3.jpeg',
                    '/images/gallery/nobar/nobar-4.jpeg',
                    '/images/gallery/nobar/nobar-5.jpeg',
                    '/images/gallery/nobar/nobar-6.jpeg',
                    '/images/gallery/nobar/nobar-7.jpeg',
                ],
            ],
        ];
    }

    public static function latest(int $limit = 4): array
    {
        return array_slice(self::all(), 0, $limit);
    }

    public static function categories(): array
    {
        return array_values(array_unique(array_column(self::all(), 'category')));
    }
}
