<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouses;

class WarehousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouse = warehouses::all();
        return view('data.warehouse.index', [
            'title' => 'Warehouses',
        ],  compact('warehouse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input.warehouse.warehouse',[
            'title'=>'Tambah Warehouse'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required'
        ]);
        Warehouses::create($request->all());
        return redirect()->route('warehouse.index')->with('success', 'Data Berhasil ditambahkan');
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
    public function edit(warehouses $warehouse)
    {
        return view('input.warehouse.edit',[
            'title'=>'Edit Warehouses'
        ],compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, warehouses $warehouse)
    {
        $request->validate([
            'address'=>'required'
        ]);
        $warehouse->update($request->all());
        return redirect()->route('warehouse.index')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouses $warehouse)
    {
        Warehouses::destroy($warehouse->id_warehouse);

        return redirect()->route('warehouse.index')->with('delete','Data berhasil didelete');
    }
}
