<?php

namespace App\Http\Controllers;

use App\Models\Cementing;
use Illuminate\Http\Request;

class ShortsizeBuildingController extends Controller
{
    public function index()
    {
        return view('shortsize.building.index',[
            'title' => 'Building Short Size'
        ]);
    }
}
