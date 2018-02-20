<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $materis = Materi::all();
        return view('materi.index',compact('materis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materi.create');
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
            'pp' => 'required|max:255',
            'pk' => 'required|max:255',
            'tandu' => 'required|max:255',
            'doras' => 'required|max:225',
            'asican' => 'required|max:255'
        ]);

        $materis = new Materi;
        $materis->pp = $request->pp;
        $materis->pk = $request->pk;
        $materis->tandu = $request->tandu;
        $materis->doras = $request->doras;
        $materis->asican = $request->asican;
        $materis->save();
        return redirect()->route('materis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materis = Materi::findOrFail($id);
        return view('materi.show',compact('materis'));
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
        $materis = Materi::findOrFail($id);
        return view('materi.edit',compact('materis'));
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
            'pp' => 'required|max:255',
            'pk' => 'required|max:255',
            'tandu' => 'required|max:255',
            'doras' => 'required|max:225',
            'asican' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $materis = Materi::findOrFail($id);
        $materis->pp = $request->pp;
        $materis->pk = $request->pk;
        $materis->tandu = $request->tandu;
        $materis->doras = $request->doras;
        $materis->asican = $request->asican;
        $materis->save();
        return redirect()->route('materis.index');
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
        $materis = Materi::findOrFail($id);
        $materis->delete();
        return redirect()->route('materis.index');  
    }
}
