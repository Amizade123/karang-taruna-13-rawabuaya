<?php

namespace App\Data;

class ProgramData
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'field' => 'Kesehatan',
                'name' => 'Cek Kesehatan Gratis',
                'target' => '2—3 bulan sekali',
                'status' => 'Segera Hadir',
            ],
            [
                'id' => 2,
                'field' => 'Olahraga',
                'name' => 'Senam Pagi',
                'target' => '2 minggu sekali',
                'status' => 'Segera Hadir',
            ],
        ];
    }

    public static function byField(): array
    {
        $programs = self::all();
        $grouped = [];

        foreach ($programs as $program) {
            $grouped[$program['field']][] = $program;
        }

        return $grouped;
    }
}
