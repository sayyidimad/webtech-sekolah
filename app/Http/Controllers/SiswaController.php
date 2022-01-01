<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SiswaController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Siswa::class);

        if (auth()->user()->role == User::ADMIN) {
            $siswa = Siswa::all();
        } else {
            $siswa = Siswa::where('user_id', auth()->user()->id)->get(); // selct * from siswa where 'user_id' = 1
        }

        return view("siswa.index")->with("siswa", $siswa);
    }

    public function create()
    {
        Gate::authorize('create', Siswa::class);

        return view("siswa.create");
    }

    public function store(Request $request)
    {
        Gate::authorize('create', Siswa::class);

        $siswa = new Siswa;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_telp = $request->no_telp;

        $siswa->save();

        return redirect("siswa");
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);

        Gate::authorize('update', $siswa);

        return view("siswa.edit")->with("siswa", $siswa);
    }

    public function update($id, Request $request)
    {
        $siswa = Siswa::find($id);

        Gate::authorize('update', $siswa);

        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_telp = $request->no_telp;

        $siswa->save();

        return redirect("siswa");
    }

    public function delete($id, Request $request)
    {
        $siswa = Siswa::find($id);

        Gate::authorize('delete', $siswa);

        $siswa->delete();

        return redirect("siswa");
    }
}
