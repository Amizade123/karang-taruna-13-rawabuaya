<?php

namespace App\Data;

class GalleryData
{
    public static function all(): array
    {
        $activities = ActivityData::all();
        $items = [];

        foreach ($activities as $activity) {
            foreach ($activity['images'] as $img) {
                $items[] = [
                    'id' => count($items) + 1,
                    'title' => $activity['title'],
                    'category' => $activity['category'],
                    'date' => $activity['date'],
                    'description' => $activity['description'],
                    'image' => $img,
                    'images' => $activity['images'],
                ];
            }
        }

        return $items;
    }

    public static function preview(int $limit = 8): array
    {
        $all = self::all();

        $seen = [];
        $result = [];
        foreach ($all as $item) {
            $key = $item['title'];
            if (!isset($seen[$key])) {
                $seen[$key] = true;
                $result[] = $item;
            }
            if (count($result) >= $limit) {
                break;
            }
        }

        return $result;
    }

    public static function categories(): array
    {
        return array_values(array_unique(array_column(ActivityData::all(), 'category')));
    }
}
