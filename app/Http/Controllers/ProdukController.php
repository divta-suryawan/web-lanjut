<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = ProdukModel::all();
        return view('produk.index', compact('data'));
    }
}
