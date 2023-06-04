<?php

namespace App\Http\Controllers;

use App\Models\Cementing;
use App\Models\CementingKanban;
use Illuminate\Http\Request;

class ShortsizeBuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //jenis Cord
        $cord  = [  '212GJ', '213GJ', '223GJ', '2x5GJ', '401GJ',
                    '212GM', '213GM', '223GM', '244GM', '247GM' ];
        
        for ($i=0; $i < count($cord) ; $i++) { 
            $lot[] = Cementing::where('output', $cord[$i])->where('terpakai', true)->first();
        }
        
        return view('shortsize.building.index',[
            'title' => 'building',
            'lot' => $lot
        ]);
    }

    public function mandrel()
    {
        return view('shortsize.building.mandrel',[
            'title' => 'mandrel & pisau'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function gantiCord(Request $request)
    {
        $code = $request->input('code');

        //ubah status cord menjadi terpakai
        $status = Cementing::where('code', $code)->first();
        $status->terpakai = true;
        $status->save();

        return back();
    }
}
