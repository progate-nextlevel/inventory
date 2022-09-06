<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Items;
use App\Models\Suppliers;
use App\Models\Warehouses;
use App\Models\Racks;
use App\Models\Statuses;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = DB::table('items')
                ->join('suppliers', 'items.id_supplier', '=', 'suppliers.id_supplier')
                ->join('warehouses', 'items.id_warehouse', '=', 'warehouses.id_warehouse')
                ->join('racks','items.id_rack','=','racks.id_rack')
                ->join('statuses','items.id_status','=','statuses.id_status')
                ->select('items.item_name','items.id_item','items.exp_date','items.barcode', 'suppliers.company_name', 'warehouses.address','racks.size','statuses.status')
                ->get();
        return view('data.item.index',[
            'title'=>'Items'
        ],compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Suppliers::all();
        $warehouse = Warehouses::all();
        $rack = Racks::all();
        $status = Statuses::all();
        return view('input.item.item',[
            'title'=>'Tambah item'
        ],compact('supplier','warehouse','rack','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'item_name'=>'required',
            'id_supplier'=>'required|numeric',
            'id_warehouse'=>'required|numeric',
            'id_rack'=>'required|numeric',
            'exp_date'=>'required',
            'id_status'=>'required|numeric',
            'barcode'=>'required'
        ]);
        Items::create($request->all());
        return redirect()->route('item.index')->with('success','Data berhasil ditambahkan');
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
    public function edit(Items $item)
    {
        $supplier = Suppliers::all();
        $warehouse = Warehouses::all();
        $rack = Racks::all();
        $status = Statuses::all();
        // return compact('warehouse');
        return view('input.item.edit',[
            'title'=>'Edit item'
        ],compact('supplier','warehouse','rack','status','item'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
