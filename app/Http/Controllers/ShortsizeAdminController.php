<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortsizeKaryawan;

class ShortsizeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shortsize.admin.dashboard',[
            'title' => 'dashboard'
        ]);
    }

    public function karyawan()
    {
        return view('shortsize.admin.karyawan',[
            'title' => 'karyawan',
            'karyawan' => ShortsizeKaryawan::all()
        ]);
    }

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

    public function edit(string $id)
    {
        return view('shortsize.admin.karyawan.edit',[
            'edit' => ShortsizeKaryawan::find($id)
        ]);
    }

    public function update(Request $request, string $id)
    {
        $edit = ShortsizeKaryawan::find($id);

        $edit->nama = $request->input('nama');
        $edit->nik = $request->input('nik');
        $edit->password = $request->input('password');
        $edit->jabatan = $request->input('jabatan');
        $edit->grup = $request->input('grup');
        $edit->line = $request->input('line');
        $edit->bagian = $request->input('bagian');
        $edit->noMesin = $request->input('noMesin');

        $edit->save();
    }

    public function destroy(string $id)
    {
        ShortsizeKaryawan::find($id)->delete();

        return back();
    }
}
