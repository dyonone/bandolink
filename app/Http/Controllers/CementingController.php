<?php

namespace App\Http\Controllers;

use App\Models\Cementing;
use App\Models\CementingKanban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CementingController extends Controller
{
    public function index()
    {
        return view('cementing.index',[
            'title' => 'Cementing',
            'cementings' => Cementing::all()
        ]);
    }

    public function store(Request $request)
    {
      $mesin = $request->input('mesin'); //cek tobol mesin berapa yang di pencet
      
      $lotCementing = $mesin . 'A1' . date('dmy') . '-10';

      if ( $mesin == 1 ) {   
          $validatedData = $request->validate([
            'cord_1' => 'required',
            'lem_1' => 'required',
            'lotCord_1' => 'required',
            'lotCordUrut_1' => 'required',
            'lotLem_1' => 'required',
            'code_1' => 'required'
          ]);
          Cementing::create([
            'time' => date('H:i:s'),
            'jenisCord' => $validatedData['cord_1'],
            'jenisLem' => $validatedData['lem_1'],
            'lotSupplier' => $validatedData['lotCord_1'] . '/' . $validatedData['lotCordUrut_1'],
            'expDate' => 'belom buat',
            'lotLem' => $validatedData['lotLem_1'],
            'lotCementing' => $lotCementing,
            'code' => $validatedData['code_1'],
            'operator' => 'udin',
            'output' => $validatedData['cord_1'] . $validatedData['lem_1'],
            'terpakai' => false
          ]);

          // Input ke database kanban
          // CementingKanban::create([
          //   'cord' => $validatedData['cord_1'] . $validatedData['lem_1'],
          //   'lot' => $lotCementing,
          //   'code' => $validatedData['code_1']
          // ]);

      } else {
          $validatedData = $request->validate([
            'cord_2' => 'required',
            'lem_2' => 'required',
            'lotCord_2' => 'required',
            'lotCordUrut_2' => 'required',
            'lotLem_2' => 'required',
            'code_2' => 'required'
          ]);
          Cementing::create([
            'time' => date('H:i:s'),
            'jenisCord' => $validatedData['cord_2'],
            'jenisLem' => $validatedData['lem_2'],
            'lotSupplier' => $validatedData['lotCord_2'] . '/' . $validatedData['lotCordUrut_2'],
            'expDate' => 'belom buat',
            'lotLem' => $validatedData['lotLem_2'],
            'lotCementing' => $lotCementing,
            'code' => $validatedData['code_2'],
            'operator' => 'ucup'
          ]);

          // Input ke database kanban
          CementingKanban::create([
            'cord' => $validatedData['cord_2'] . $validatedData['lem_2'],
            'lot' => $lotCementing,
            'code' => $validatedData['code_2']
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
      //jenis Cord
        $cord  = [ '212GJ', '213GJ', '223GJ', '2x5GJ', '401GJ',
                    '212GM', '213GM', '223GM', '244GM', '247GM' ];
      //warna kanban tiap cord
        $color = [ '#FFD1DC', '#B2DFDB', '#D7C7E9', '#AADEFA', '#FFFFE0',
                    '#FAA5B4', '#A1D5C1', '#C8A2C8', '#7DADF1', '#FFE5B4' ];
      //rop cord
        $rop   = [ 28, 19, 20, 22, 16, 14, 19, 15, 24, 26 ];

      //menghitung qty cord dari database kanban
        foreach ($cord as $qtyCord) {
          $qty[] = CementingKanban::where('cord', $qtyCord)->count();
        }

        return view('cementing.kanban',[
            'title'  => 'Kanban',
            'cord'  => $cord,
            'color' => $color,
            'rop'   => $rop,
            'qty'   => $qty
        ]);
    }
}