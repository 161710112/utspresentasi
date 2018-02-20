<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $anggotas = Anggota::all();
        return view('anggota.index',compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
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
            'nama' => 'required|unique:anggotas|max:255',
            'kelas' => 'required|min:6',
            'alamat' => 'required|min:6',
            'spesialis' => 'required|max:5',
            'tgl_pelantikan' => 'required|min:10'
        ]);

        $anggotas = new Anggota;
        $anggotas->nama = $request->nama;
        $anggotas->kelas = $request->kelas;
        $anggotas->alamat = $request->alamat;
        $anggotas->spesialis = $request->spesialis;
        $anggotas->tgl_pelantikan = $request->tgl_pelantikan;
        $anggotas->save();
        return redirect()->route('anggotas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggotas = Anggota::findOrFail($id);
        return view('anggota.show',compact('anggotas'));
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
        $anggotas = Anggota::findOrFail($id);
        return view('anggota.edit',compact('anggotas'));
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
            'nama' => 'required|unique:anggotas|max:255',
            'kelas' => 'required|min:6',
            'alamat' => 'required|min:6',
            'spesialis' => 'required|max:5',
            'tgl_pelantikan' => 'required|min:10'
        ]);

        // update data berdasarkan id
        $anggotas = Anggota::findOrFail($id);
        $anggotas->nama = $request->nama;
        $anggotas->kelas = $request->kelas;
        $anggotas->alamat = $request->alamat;
        $anggotas->spesialis = $request->spesialis;
        $anggotas->tgl_pelantikan = $request->tgl_pelantikan;
        $anggotas->save();
        return redirect()->route('anggotas.index');
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
        $anggotas = Anggota::findOrFail($id);
        $anggotas->delete();
        return redirect()->route('anggotas.index');  
    }
}
