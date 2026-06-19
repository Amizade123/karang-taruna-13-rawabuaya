<?php

namespace App\Http\Controllers;

use App\Data\ProgramData;

class ProgramController extends Controller
{
    public function index()
    {
        $programsByField = ProgramData::byField();

        return view('programs', compact('programsByField'));
    }
}
