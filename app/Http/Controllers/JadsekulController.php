<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadsekul;

class JadsekulController extends Controller
{
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $jadsekuls = Jadsekul::all();
        return view('jadsekul.index',compact('jadsekuls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadsekul.create');
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
            'hari' => 'required|max:255',
            'jam' => 'required|max:2',
            'materi' => 'required|max:30',
            'pembina' => 'required|max:255',
            'tempat' => 'required|max:255'
        ]);

        $jadsekuls = new Jadsekul;
        $jadsekuls->hari = $request->hari;
        $jadsekuls->jam = $request->jam;
        $jadsekuls->materi = $request->materi;
        $jadsekuls->pembina = $request->pembina;
        $jadsekuls->tempat = $request->tempat;
        $jadsekuls->save();
        return redirect()->route('jadsekuls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadsekuls = Jadsekul::findOrFail($id);
        return view('jadsekul.show',compact('jadsekuls'));
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
        $jadsekuls = Jadsekul::findOrFail($id);
        return view('jadsekul.edit',compact('jadsekuls'));
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
            'hari' => 'required|max:255',
            'jam' => 'required|max:2',
            'materi' => 'required|max:30',
            'pembina' => 'required|max:255',
            'tempat' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $jadsekuls = Jadsekul::findOrFail($id);
        $jadsekuls->hari = $request->hari;
        $jadsekuls->jam = $request->jam;
        $jadsekuls->materi = $request->materi;
        $jadsekuls->pembina = $request->pembina;
        $jadsekuls->tempat = $request->tempat;
        $jadsekuls->save();
        return redirect()->route('jadsekuls.index');
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
        $jadsekuls = Jadsekul::findOrFail($id);
        $jadsekuls->delete();
        return redirect()->route('jadsekuls.index');  
    }
}
