<?php

namespace App\Http\Controllers;

use App\Data\ActivityData;
use App\Data\ProgramData;
use App\Data\GalleryData;

class HomeController extends Controller
{
    public function index()
    {
        $activities = ActivityData::latest(4);
        $programs = ProgramData::all();
        $gallery = GalleryData::preview(8);

        return view('home', compact('activities', 'programs', 'gallery'));
    }
}
