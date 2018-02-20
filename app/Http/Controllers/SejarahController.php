<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejarah;
class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $sejarahs = Sejarah::all();
        return view('sejarah.index',compact('sejarahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sejarah.create');
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
            'nama' => 'required|unique:sejarahs|max:255',
            'ttl' => 'required|min:6',
            'warga_negara' => 'required|max:255',
            'sejarah' => 'required|max:225',
            'semenjak' => 'required|max:225'
        ]);

        $sejarahs = new Sejarah;
        $sejarahs->nama = $request->nama;
        $sejarahs->ttl = $request->ttl;
        $sejarahs->warga_negara = $request->warga_negara;
        $sejarahs->sejarah = $request->sejarah;
        $sejarahs->semenjak = $request->semenjak;
        $sejarahs->save();
        return redirect()->route('sejarahs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sejarahs = Sejarah::findOrFail($id);
        return view('sejarah.show',compact('sejarahs'));
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
        $sejarahs = Sejarah::findOrFail($id);
        return view('sejarah.edit',compact('sejarahs'));
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
            'nama' => 'required|unique:sejarahs|max:255',
            'ttl' => 'required|min:6',
            'warga_negara' => 'required|max:225',
            'sejarah' => 'required|max:225',
            'semenjak' => 'required|max:225'
        ]);

        // update data berdasarkan id
        $sejarahs = Sejarah::findOrFail($id);
        $sejarahs->nama = $request->nama;
        $sejarahs->ttl = $request->ttl;
        $sejarahs->warga_negara = $request->warga_negara;
        $sejarahs->sejarah = $request->sejarah;
        $sejarahs->semenjak = $request->semenjak;
        $sejarahs->save();
        return redirect()->route('sejarahs.index');
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
        $sejarahs = Sejarah::findOrFail($id);
        $sejarahs->delete();
        return redirect()->route('sejarahs.index');  
    }
}

