<?php

namespace App\Data;

class GalleryData
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
                'description' => 'Perayaan HUT Kemerdekaan RI ke-79 yang diselenggarakan oleh Karang Taruna 13. Rangkaian acara meliputi lomba tradisional, lomba mewarnai, dan pentas seni warga.',
                'image' => '/images/gallery/17-agustus/17-agustus-1.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Halal Bihalal',
                'category' => 'Keagamaan',
                'date' => '2025-05-10',
                'excerpt' => 'Acara halal bihalal anggota Karang Taruna dan warga RT 13.',
                'description' => 'Acara halal bihalal yang diadakan setelah Hari Raya Idul Fitri. Menjadi momentum silaturahmi antar anggota, pengurus, dan warga RT 13.',
                'image' => '/images/gallery/halal-bihalal/halal-bihalal-1.jpg',
            ],
            [
                'id' => 3,
                'title' => 'Nonton Bareng',
                'category' => 'Sosial',
                'date' => '2026-06-18',
                'excerpt' => 'Kegiatan nobar untuk mempererat kebersamaan anggota.',
                'description' => 'Kegiatan nonton bareng yang diadakan sebagai ajang refreshing dan mempererat tali silaturahmi antar anggota Karang Taruna 13.',
                'image' => '/images/gallery/nobar/nobar-1.jpeg',
            ],
        ];
    }

    public static function preview(int $limit = 8): array
    {
        return array_slice(self::all(), 0, $limit);
    }

    public static function categories(): array
    {
        return array_values(array_unique(array_column(self::all(), 'category')));
    }
}
