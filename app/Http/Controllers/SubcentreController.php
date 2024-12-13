<?php

namespace App\Http\Controllers;
use App\Models\SubCentre;

use Illuminate\Http\Request;

class SubcentreController extends Controller
{
    public function index()
    {
        $subcentres = SubCentre::all();
        return view('pages.subcentre.index', compact('subcentres'));
    }
}
