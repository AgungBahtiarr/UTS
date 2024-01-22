<?php

namespace App\Http\Controllers;

use App\Models\Agung;
use App\Models\Nim;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $barang = Nim::all();
        $transaksi = Agung::all();
        return view('index', [
            'dataBarang' => $barang,
            'dataTransaksi' => $transaksi
        ]);
    }
}
