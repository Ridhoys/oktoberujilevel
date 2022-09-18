<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catatan = Catatan::all();
        return view('catatan.index', compact('catatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catatan.create');
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
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu_tubuh' => 'required'

        ]);

        Catatan::create([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'suhu_tubuh' => $request->suhu_tubuh

        ]);
        
        return redirect('/catatan')->with('success', 'Data Berhasil Ditambahkan');
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
        $catatan = Catatan::findorfail($id);
        return view('catatan.edit', compact('catatan'));
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
        $this->validate($request,[
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu_tubuh' => 'required'
        ]);

        $catatan = Catatan::findorfail($id);
        $catatan->update($request->all());
        return redirect('catatan')->with('success','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Catatan::destroy($id);
        return redirect('catatan')->with('flash_massage', 'Guru deleted!');
    }
}
