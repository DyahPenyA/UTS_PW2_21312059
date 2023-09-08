<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peran;
use RealRashid\SweetAlert\Facades\Alert;

class PeranController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman peran
    }


 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peran = new Peran;

        $request->validate([
            'film' => 'required',
            'cast' => 'required',
            'nama' => 'required',
            'action' => 'required',

        ]);

        $peran->film = $request->film;
        $peran->cast = $request->cast;
        $peran->nama = $request->nama;
        $peran->action = $request->action;


        $simpan = $peran->save();

        if ($simpan) {
            Alert::success('Success', 'Data Berhasil ditambah');
            return redirect('/peran');
        } else {
            Alert::error('Failed', 'Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peran = Peran::where('id', $id)->first();
        return view('peran.edit', compact('peran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'film' => 'required',
            'cast' => 'required',
            'nama' => 'required',
            'action' => 'required',

        ]);

        $peran = Peran::find($id);
        $peran->film = $request->film;
        $peran->cast = $request->cast;
        $peran->nama = $request->nama;
        $peran->action = $request->action;

        $ubah = $film->save();

        if ($ubah) {
            Alert::success('Success', 'Data berhasil diubah');
            return redirect('/peran');
        } else {
            Alert::error('Failed', 'Gagal Mengubah data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peran = Peran::find($id);
        $remove = $peran->delete();
        if ($remove) {
            Alert::success('Success', 'Data Berhasil Dihapus');
            return redirect('/peran');
        } else {
            Alert::error('Failed', 'Gagal Menghapus data');
        }
    }
}
