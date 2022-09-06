<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Racks;

class RacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rack =Racks::all();
        return view('data.rack.index',['title'=>'Racks'],compact('rack'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input.rack.rack',['title'=>'Tambah Racks']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $request->validate([
            'size'=>'required|numeric'
        ]);
        Racks::create($request->all());
        return redirect()->route('rack.index')->with('success','Data berhasil ditambahkan');
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
    public function edit(Racks $rack)
    {
        return view('input.rack.edit',['title'=>'Edit racks'],compact('rack'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Racks $rack)
    {
        $request->validate([
            'size'=>'required|numeric'
        ]);
        $rack->update($request->all());
        return redirect()->route('rack.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Racks $rack)
    {
        Racks::destroy($rack->id_rack);
        return redirect()->route('rack.index')->with('delete','Data berhasil didelete');
    }
}
