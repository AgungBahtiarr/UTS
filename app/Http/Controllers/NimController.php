<?php

namespace App\Http\Controllers;

use App\Models\Nim;
use Illuminate\Http\Request;

class NimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama_barang,
            'harga_satuan' => $request->harga_barang
        ];

        $barang = Nim::create($data);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nim $nim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nim $nim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang = Nim::findOrFail($id);
        $data = [
            'nama' => $request->nama_barang,
            'harga_satuan' => $request->harga_barang
        ];

        $barang->update($data);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Nim::findOrFail($id);
        $barang->delete();
        return redirect('/');
    }
}
