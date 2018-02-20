<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $kegiatans = Kegiatan::all();
        return view('kegiatan.index',compact('kegiatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
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
            'nama_kegiatan' => 'required|unique:kegiatans|max:255',
            'kegiatan' => 'required|min:6',
            'hari_kegiatan' => 'required|min:6',
            'waktu_kegiatan' => 'required|min:2',
            'tempat_kegiatan' => 'required|min:10'
        ]);

        $kegiatans = new Kegiatan;
        $kegiatans->nama_kegiatan = $request->nama_kegiatan;
        $kegiatans->kegiatan = $request->kegiatan;
        $kegiatans->hari_kegiatan = $request->hari_kegiatan;
        $kegiatans->waktu_kegiatan = $request->waktu_kegiatan;
        $kegiatans->tempat_kegiatan = $request->tempat_kegiatan;
        $kegiatans->save();
        return redirect()->route('kegiatans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatans = Kegiatan::findOrFail($id);
        return view('kegiatan.show',compact('kegiatans'));
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
        $kegiatans = Kegiatan::findOrFail($id);
        return view('kegiatan.edit',compact('kegiatans'));
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
            'nama_kegiatan' => 'required|unique:kegiatans|max:255',
            'kegiatan' => 'required|min:6',
            'hari_kegiatan' => 'required|min:6',
            'waktu_kegiatan' => 'required|min:2',
            'tempat_kegiatan' => 'required|min:10'
        ]);

        // update data berdasarkan id
        $kegiatans = Kegiatan::findOrFail($id);
        $kegiatans->nama_kegiatan = $request->nama_kegiatan;
        $kegiatans->kegiatan = $request->kegiatan;
        $kegiatans->hari_kegiatan = $request->hari_kegiatan;
        $kegiatans->waktu_kegiatan = $request->waktu_kegiatan;
        $kegiatans->tempat_kegiatan = $request->tempat_kegiatan;
        $kegiatans->save();
        return redirect()->route('kegiatan.index');
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
        $kegiatans = Kegiatan::findOrFail($id);
        $kegiatans->delete();
        return redirect()->route('kegiatan.index');  
    }
}
