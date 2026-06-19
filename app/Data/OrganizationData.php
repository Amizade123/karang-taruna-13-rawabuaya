<?php

namespace App\Data;

class OrganizationData
{
    public static function all(): array
    {
        return [
            // Level 0 — Puncak
            [
                'id' => 1,
                'name' => 'Supriatna',
                'position' => 'Ketua',
                'photo' => 'https://placehold.co/120x120/282829/F9B41A?text=SP',
                'level' => 0,
            ],
            // Level 1 — Wakil, Sekretaris, Bendahara
            [
                'id' => 2,
                'name' => 'Abbas Abdullah',
                'position' => 'Wakil Ketua',
                'photo' => 'https://placehold.co/120x120/282829/F9B41A?text=AB',
                'level' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Siti Mahmudha',
                'position' => 'Sekretaris',
                'photo' => 'https://placehold.co/120x120/282829/F9B41A?text=SM',
                'level' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Atika Rahma',
                'position' => 'Bendahara',
                'photo' => 'https://placehold.co/120x120/282829/F9B41A?text=AR',
                'level' => 1,
            ],
            // Level 2 — Koordinator Bidang
            [
                'id' => 5,
                'name' => 'Bambang Supra Yogi',
                'position' => 'Koordinator Bidang Keagamaan',
                'photo' => 'https://placehold.co/120x120/282829/F9B41A?text=BY',
                'level' => 2,
            ],
            [
                'id' => 6,
                'name' => 'Reynaldi Chandra Kirana',
                'position' => 'Koordinator Bidang Olahraga',
                'photo' => 'https://placehold.co/120x120/282829/F9B41A?text=RC',
                'level' => 2,
            ],
            [
                'id' => 7,
                'name' => 'Ariansyah Nur Rohman',
                'position' => 'Koordinator Bidang Sosial & Lingkungan',
                'photo' => 'https://placehold.co/120x120/282829/F9B41A?text=AN',
                'level' => 2,
            ],
            [
                'id' => 8,
                'name' => 'Frans Dito',
                'position' => 'Koordinator Bidang Pendidikan',
                'photo' => 'https://placehold.co/120x120/282829/F9B41A?text=FD',
                'level' => 2,
            ],
        ];
    }
}
