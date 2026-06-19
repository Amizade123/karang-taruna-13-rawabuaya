<?php

namespace App\Http\Controllers;

use App\Data\OrganizationData;

class OrganizationController extends Controller
{
    public function index()
    {
        $members = OrganizationData::all();

        return view('organization', compact('members'));
    }
}
