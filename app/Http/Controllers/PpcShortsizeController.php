<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PpcShortsize;

class PpcShortsizeController extends Controller
{
    public function api()
    {
        $ppc = PpcShortsize::all();
        return response()->json($ppc);
    }
}
