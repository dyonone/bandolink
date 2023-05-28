<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortsizeKaryawan;

class ShortsizeKaryawanController extends Controller
{

    public function store(Request $request)
    {
        ShortsizeKaryawan::create([
            'nama'      => $request->input('nama'),
            'nik'       => $request->input('nik'),
            'password'  => $request->input('password'),
            'jabatan'   => $request->input('jabatan'),
            'grup'      => $request->input('grup'),
            'line'      => $request->input('line'),
            'bagian'    => $request->input('bagian'),
            'noMesin'   => $request->input('noMesin')
        ]);

        return back();
    }

    public function destroy($id)
    {
        ShortsizeKaryawan::find($id)->delete();

        return back();
    }
}
