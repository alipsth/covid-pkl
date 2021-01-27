<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prov= Provinsi::all();
        return view('layouts.provinsi.index',compact('prov'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prov = new Provinsi;
        $prov->kode_prov = $request->kode_prov;
        $prov->nama_prov = $request->nama_prov;
        $prov->save();
        return redirect()->route('prov.index')->with(['message' => 'Data berhasil di Tambah']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\provinsi  $prov
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prov = Provinsi::findOrFail($id);
        return view('layouts.provinsi.show', compact('prov'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\provinsi  $prov
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prov = Provinsi::findOrFail($id);
        return view('layouts.provinsi.edit', compact('prov'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\provinsi  $prov
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $prov = Provinsi::findOrFail($id);
        $prov->kode_prov = $request->kode_prov;
        $prov->nama_prov= $request->nama_prov;
        $prov->save();
        return redirect()->route('prov.index')->with(['message' => 'Data berhasil di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\provinsi  $prov
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prov = Provinsi::findOrFail($id);
        $prov->delete();
        return redirect()->route('prov.index')->with(['message' => 'Data berhasil di Hapus']);
    }
}
