<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = DosenModel::all();
        return view('dosen.index', compact('data'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        DosenModel::create($request->all());
        return redirect()->route('dosen.index')->with('success', 'Data berhasil ditambahkan!');
    }





    
}
