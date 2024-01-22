<?php

namespace App\Http\Controllers;


use App\Models\Agung;
use Illuminate\Http\Request;

class AgungController extends Controller
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
            'tanggal' => $request->tanggal,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah
        ];

        $transaksi = Agung::create($data);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agung $agung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agung $agung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaksi = Agung::findOrFail($id);

        $data = [
            'tanggal' => $request->tanggal,
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah
        ];

        $transaksi->update($data);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaksi = Agung::findOrFail($id);
        $transaksi->delete();
        return redirect('/');
    }
}
