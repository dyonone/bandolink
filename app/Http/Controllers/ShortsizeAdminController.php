<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        User::create([
            'nama'       => $request->input('nama'),
            'nik'        => $request->input('nik'),
            'password'   => bcrypt($request->input('password')),
            'role'       => $request->input('role'),
            'grup'       => $request->input('grup'),
            'line'       => $request->input('line'),
            'noMesin'    => $request->input('noMesin'),
            'departemen' => 'Shortsize'
        ]);

        return back();
    }

    public function edit(string $id)
    {
        return view('shortsize.admin.karyawan.edit',[
            'edit' => User::find($id)
        ]);
    }

    public function update(Request $request, string $id)
    {
        $edit = User::find($id);

        $edit->nama     = $request->input('nama');
        $edit->nik      = $request->input('nik');
        $edit->password = $request->input('password');
        $edit->role     = $request->input('role');
        $edit->grup     = $request->input('grup');
        $edit->line     = $request->input('line');
        $edit->noMesin  = $request->input('noMesin');

        $edit->save();
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();

        return back();
    }
}
