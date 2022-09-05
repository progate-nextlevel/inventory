<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = suppliers::all();
        return view('data.supplier.index', [
            'title' => 'Supplier',
        ],  compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input.supplier.supplier', [
            'title' => 'Input Supplier',
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
            'company_name' => 'required',
            'address' => 'required',
            'contact' => 'required|numeric',
        ]);
        Suppliers::create($request->all());
        return redirect()->route('supplier.index')->with('success', 'Data Berhasil di Input');
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
    public function edit(suppliers $supplier)
    {
        return view('input.supplier.edit',['title'=>'Edit Supplier'],compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suppliers $supplier)
    {
        $request->validate([
            'company_name' => 'required',
            'address' => 'required',
            'contact' => 'required|numeric',
        ]);
        $supplier->update($request->all());
        return redirect()->route('supplier.index')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(suppliers $supplier)
    {
        suppliers::destroy($supplier->id_supplier);
        // $supplier->delete();   cara ini atau cara di atas
        return redirect()->route('supplier.index')->with('succes','Siswa Berhasil di Hapus');
    }
}
