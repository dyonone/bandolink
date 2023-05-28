<?php

namespace App\Http\Controllers;

use App\Models\Cementing;
use App\Models\CementingKanban;
use Illuminate\Http\Request;

class CementingController extends Controller
{
    public function store(Request $request)
    {
        $mesin = $request->input('mesin'); //cek tobol mesin berapa yang di pencet

        if ( $mesin == 1 ) {   
            $request->validate([
                'cord_1' => 'required',
                'lem_1' => 'required',
                'lotCord_1' => 'required',
                'lotCordUrut_1' => 'required',
                'lotLem_1' => 'required',
                'code_1' => 'required'
            ]);
            Cementing::create([
                'time' => date('H:i:s'),
                'jenisCord' => $request->input('cord_1'),
                'jenisLem' =>$request->input('lem_1'),
                'lotSupplier' =>$request->input('lotCord_1') . '/' . $request->input('lotCordUrut_1'),
                'expDate' => 'belom buat',
                'lotLem' => $request->input('lotLem_1'),
                'lotCementing' => $request->input('mesin') . 'A1' . date('dmy') . '-10',
                'code' => $request->input('code_1'),
                'operator' => 'udin'
            ]);
        } else {
            $request->validate([
                'cord_2' => 'required',
                'lem_2' => 'required',
                'lotCord_2' => 'required',
                'lotCordUrut_2' => 'required',
                'lotLem_2' => 'required',
                'code_2' => 'required'
            ]);  
            Cementing::create([
                'time' => date('H:i:s'),
                'jenisCord' => $request->input('cord_2'),
                'jenisLem' =>$request->input('lem_2'),
                'lotSupplier' =>$request->input('lotCord_2') . '/' . $request->input('lotCordUrut_2'),
                'expDate' => 'belom buat',
                'lotLem' => $request->input('lotLem_2'),
                'lotCementing' => $request->input('mesin') . 'A1' . date('dmy') . '-10',
                'code' =>$request->input('code_2'),
                'operator' => 'udin'
            ]);
        }

        $request->flash();

        return back();
    }

    public function destroy($id)
    {
        Cementing::find($id)->delete();

        return back();
    }

    public function kanban()
    {
        $colors = ['#FFD1DC', '#B2DFDB', '#D7C7E9', '#AADEFA', '#FFFFE0', '#FAA5B4', '#A1D5C1', '#C8A2C8', '#7DADF1', '#FFE5B4'];

        return view('cementing.kanban',[
            'title' => 'Kanban',
            'kanbans' => CementingKanban::all(),
            'colors' => $colors,
            'i' => 0
        ]);
    }

    // public function api()
    // {
    //     $cementing = Cementing::all();
    //     return response()->json($cementing);
    // }

}