<?php

namespace App\Http\Controllers;

use App\Models\Cementing;
use Illuminate\Http\Request;

class TracingController extends Controller
{
    public function index()
    {
        return view('tracing',[
            'title' => 'tracing'
        ]);
    }

    public function tracing(Request $request)
    {
        $tracing = Cementing::where('code', $request->input('code'))->first();
        dd($tracing);
    }
}
