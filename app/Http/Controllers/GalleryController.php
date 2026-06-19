<?php

namespace App\Http\Controllers;

use App\Data\GalleryData;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = GalleryData::all();
        $categories = GalleryData::categories();

        return view('gallery', compact('gallery', 'categories'));
    }
}
