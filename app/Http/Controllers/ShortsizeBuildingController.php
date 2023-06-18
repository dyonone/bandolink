<?php

namespace App\Http\Controllers;

use App\Models\Cementing;
use App\Models\CementingKanban;
use App\Models\ShortsizeBuilding;
use App\Models\ShortsizeBuildingMaterial;
use Illuminate\Http\Request;

class ShortsizeBuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shortsize.building.index',[
            'title' => 'building',
            'material' => ShortsizeBuildingMaterial::all()
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
        $data = [
            'ucr' => $request->input('ucr'),
            'ucrLot' => $request->input('ucrLot'),
            'adr' => substr($request->input('adr'), 12),
            'adrLot' => $request->input('adrLot'),
            'adrTebal' => $request->input('adrTebal'),
            'cord' => substr($request->input('cord'), 12),
            'cordLot' => $request->input('cordLot'),
            'cordPitch' => $request->input('cordPitch'),
            'cordTension' => $request->input('cordTension'),
            'jumlahKartu' => $request->input('kartu1') . '-' . $request->input('kartu2') . '/' . $request->input('kartu3'),
            'ukurMandrel' => $request->input('ukurMandrel'),
            'pcs1' => $request->input('pcs1'),
            'pcs2' => $request->input('pcs2'),
            'pcs3' => $request->input('pcs3'),
            'pcs4' => $request->input('pcs4'),
            'pcs5' => $request->input('pcs5'),
            'pcs6' => $request->input('pcs6'),
            'tebal1' => $request->input('tebal1'),
            'tebal2' => $request->input('tebal2'),
            'tebal3' => $request->input('tebal3'),
            'lebar1' => $request->input('lebar1'),
            'lebar2' => $request->input('lebar2'),
            'lebar3' => $request->input('lebar3'),
            'panjang1' => $request->input('panjang1'),
            'panjang2' => $request->input('panjang2'),
            'panjang3' => $request->input('panjang3'),
            'afkir1' => $request->input('afkir1'),
            'afkir2' => $request->input('afkir2'),
            'afkir3' => $request->input('afkir3'),
            'afkir4' => $request->input('afkir4'),
            'afkir5' => $request->input('afkir5'),
            'afkir6' => $request->input('afkir6'),
            'afkir7' => $request->input('afkir7'),
        ];

        dd($data);
        // $ppc = [
        //     'ppc' => 'xx',
        //     'spec' => 'ww',
        //     'type' => 'tipe',
        //     'size' => 1
        // ];

        // $validatedData = $request->validate([
        //     'ucr' => 'string',
        //     'ucrLot' => 'string',
        //     'adr' => 'string',
        //     'adrLot' => 'string',
        //     'adrTebal' => 'string',
        //     'cord' => 'string',
        //     'cordLot' => 'string',
        //     'cordPitch' => 'string',
        //     'cordTension' => 'string',
        //     'jumlahKartu' => 'string',
        //     'ukurMandrel' => 'string',
        //     'coresTebal1' => 'string',
        //     'coresTebal2' => 'string',
        //     'coresTebal3' => 'string',
        //     'coresLebar1' => 'string',
        //     'coresLebar2' => 'string',
        //     'coresLebar3' => 'string',
        //     'coresPanjang1' => 'string',
        //     'coresPanjang2' => 'string',
        //     'coresPanjang3' => 'string',
        //     'afkir1' => 'integer',
        //     'afkir2' => 'integer',
        //     'afkir3' => 'integer',
        //     'afkir4' => 'integer',
        //     'afkir5' => 'integer',
        //     'afkir6' => 'integer',
        //     'afkir7' => 'integer'
        // ]);

        // dd($validatedData);

        // ShortsizeBuilding::create([
        //     array_merge($ppc, $validatedData)
        // ]);

        // return back();
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
        //ambil index cord berdasarkan code
        $cord = Cementing::where('code', $request->input('code'))->first();

        //ubah qty kanban cord
        $kanban = CementingKanban::where('cord', $cord->cord)->first();
        $kanban->wip -= 1;
        $kanban->save();

        //update lot material
        $material = ShortsizeBuildingMaterial::where('material', $cord->cord)->first();
        $material->lot = $cord->lotCementing;
        $material->save();

        return back();
    }
}
