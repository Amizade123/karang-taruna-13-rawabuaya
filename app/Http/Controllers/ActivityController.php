<?php

namespace App\Http\Controllers;

use App\Data\ActivityData;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = ActivityData::all();
        $categories = ActivityData::categories();

        return view('activities', compact('activities', 'categories'));
    }
}
