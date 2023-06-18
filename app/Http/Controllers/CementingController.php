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
      $n = $request->input('mesin'); //cek tobol mesin berapa yang di pencet
      
      $lotCementing = $n . 'A1' . date('dmy') . '-10';
   
      $validatedData = $request->validate([
        'cord_'.$n => 'required',
        'lem_'.$n  => 'required',
        'lotCord_'.$n => 'required',
        'lotCordUrut_'.$n => 'required',
        'lotLem_'.$n => 'required',
        'code_'.$n => 'required'
      ]);

      $cord = $validatedData['cord_'.$n] . $validatedData['lem_'.$n];

      Cementing::create([
        'jenisCord' => $validatedData['cord_'.$n],
        'jenisLem' => $validatedData['lem_'.$n],
        'lotSupplier' => $validatedData['lotCord_'.$n] . '/' . $validatedData['lotCordUrut_'.$n],
        'expDate' => 'belom buat',
        'lotLem' => $validatedData['lotLem_'.$n],
        'lotCementing' => $lotCementing,
        'code' => $validatedData['code_'.$n],
        'operator' => 'udin',
        'cord' => $cord
      ]);

      //tambah wip kanban
      $kanban = CementingKanban::where('cord', $cord)->first();
      $kanban->wip += 1;
      $kanban->save();

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
      return view('cementing.kanban', [
        'title'   => 'Kanban Cementing',
        'kanbans' => CementingKanban::all()
      ]);
    }
}