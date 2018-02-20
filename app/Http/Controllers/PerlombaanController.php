<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perlombaan;
class perlombaanController extends Controller
{
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $perlombaans = Perlombaan::all();
        return view('perlombaan.index',compact('perlombaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perlombaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'spesialis' => 'required|max:255',
            'nama_perlombaan' => 'required|min:6',
            'tgl_lomba' => 'required|min:2',
            'tgl_daftar_ulang' => 'required|min:2',
            'tempat' => 'required|min:8',
            'jumlah_peserta' => 'required|min:2'

        ]);

        $perlombaans = new Perlombaan;
        $perlombaans->spesialis = $request->spesialis;
        $perlombaans->nama_perlombaan = $request->nama_perlombaan;
        $perlombaans->tgl_lomba = $request->tgl_lomba;
        $perlombaans->tgl_daftar_ulang = $request->tgl_daftar_ulang;
        $perlombaans->tempat = $request->tempat;
        $perlombaans->jumlah_peserta = $request->jumlah_peserta;
        $perlombaans->save();
        return redirect()->route('perlombaans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perlombaans = Perlombaan::findOrFail($id);
        return view('perlombaan.show',compact('perlombaans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $perlombaan = Perlombaan::findOrFail($id);
        return view('perlombaan.edit',compact('perlombaans'));
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
         // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'spesialis' => 'required|max:255',
            'nama_perlombaan' => 'required|min:6',
            'tgl_lomba' => 'required|min:2',
            'tgl_daftar_ulang' => 'required|min:2',
            'tempat' => 'required|min:8',
            'jumlah_peserta' => 'required|min:2'
        ]);

        // update data berdasarkan id
        $perlombaans = Perlombaan::findOrFail($id);
        $perlombaans->spesialis = $request->spesialis;
        $perlombaans->nama_perlombaan = $request->nama_perlombaan;
        $perlombaans->tgl_lomba = $request->tgl_lomba;
        $perlombaans->tgl_daftar_ulang = $request->tgl_daftar_ulang;
        $perlombaans->tempat = $request->tempat;
        $perlombaans->jumlah_peserta = $request->jumlah_peserta;
        $perlombaans->save();
        return redirect()->route('perlombaans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $perlombaans = Perlombaan::findOrFail($id);
        $perlombaans->delete();
        return redirect()->route('perlombaans.index');  
    }
}
