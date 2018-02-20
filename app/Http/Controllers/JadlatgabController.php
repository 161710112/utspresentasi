<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadlatgab;
class JadlatgabController extends Controller
{
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $jadlatgabs = Jadlatgab::all();
        return view('jadlatgab.index',compact('jadlatgabs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadlatgab.create');
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
            'no_absen' => 'required|max:10',
            'lokasi' => 'required|max:20',
            'jam' => 'required|min:2',
            'hari' => 'required|max:10',
            'materi' => 'required|max:10'
        ]);

        $jadlatgabs = new Jadlatgab ;
        $jadlatgabs->no_absen = $request->no_absen;
        $jadlatgabs->lokasi = $request->lokasi;
        $jadlatgabs->jam = $request->jam;
        $jadlatgabs->hari = $request->hari;
        $jadlatgabs->materi = $request->materi;
        $jadlatgabs->save();
        return redirect()->route('jadlatgabs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadlatgabs = Jadlatgab::findOrFail($id);
        return view('jadlatgab.show',compact('jadlatgabs'));
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
        $jadlatgabs = Jadlatgab::findOrFail($id);
        return view('jadlatgab.edit',compact('jadlatgabs'));
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
            'no_absen' => 'required|max:10',
            'lokasi' => 'required|max:20',
            'jam' => 'required|min:2',
            'hari' => 'required|max:10',
            'materi' => 'required|max:10'
        ]);

        // update data berdasarkan id
        $jadlatgabs = Jadlatgab::findOrFail($id);
        $jadlatgabs->no_absen = $request->no_absen;
        $jadlatgabs->lokasi = $request->lokasi;
        $jadlatgabs->jam = $request->jam;
        $jadlatgabs->hari = $request->hari;
        $jadlatgabs->materi = $request->materi;
        $jadlatgabs->save();
        return redirect()->route('jadlatgabs.index');
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
        $jadlatgabs = Jadlatgab::findOrFail($id);
        $jadlatgabs->delete();
        return redirect()->route('jadlatgabs.index');  
    }
}
