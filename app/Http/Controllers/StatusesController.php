<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statuses;

class StatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Statuses::all();
        return view('data.status.index',[
            'title'=>'Status'
        ],compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input.status.status',['title'=>'Tambah status']);
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
            'status'=>'required'
        ]);
        Statuses::create($request->all());
        return redirect()->route('status.index')->with('success','Data berhasil ditambahkan');
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
    public function edit(Statuses $status)
    {
        return view('input.status.edit',[
            'title'=>'Edit status'
        ],compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statuses $status)
    {
        $request->validate([
            'status'=>'required'
        ]);
        $status->update($request->all());
        return redirect()->route('status.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statuses $status)
    {
        Statuses::destroy($status->id_status);
        return redirect()->route('status.index')->with('delete','Data berhasil didelete');
    }
}
