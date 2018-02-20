<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ketua;
class KetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $ketuas = Ketua::all();
        return view('ketua.index',compact('ketuas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ketua.create');
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
            'nama' => 'required|unique:ketuas|max:255',
            'kelas' => 'required|min:6',
            'ttl' => 'required|min:10',
            'alamat' => 'required|max:255',
            'spesialis' => 'required|max:255'
        ]);

        $ketuas = new Ketua;
        $ketuas->nama = $request->nama;
        $ketuas->kelas = $request->kelas;
        $ketuas->ttl = $request->ttl;
        $ketuas->alamat = $request->alamat;
        $ketuas->spesialis = $request->spesialis;
        $ketuas->save();
        return redirect()->route('ketuas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ketuas = Ketua::findOrFail($id);
        return view('ketua.show',compact('ketuas'));
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
        $ketuas = Ketua::findOrFail($id);
        return view('ketua.edit',compact('ketuas'));
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
            'nama' => 'required|unique:ketuas|max:255',
            'kelas' => 'required|min:6',
            'ttl' => 'required|min:10',
            'alamat' => 'required|max:255',
            'spesialis' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $ketuas = Ketua::findOrFail($id);
        $ketuas->nama = $request->nama;
        $ketuas->kelas = $request->kelas;
        $ketuas->ttl = $request->ttl;
        $ketuas->alamat = $request->alamat;
        $ketuas->spesialis = $request->spesialis;
        $ketuas->save();
        return redirect()->route('ketuas.index');
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
        $ketuas = Ketua::findOrFail($id);
        $ketuas->delete();
        return redirect()->route('ketuas.index');  
    }
}
