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

    public function edit($id)
    {
        $data = DosenModel::find($id);
        return view('dosen.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = DosenModel::find($id);
        $data->update($request->all());
        return redirect()->route('dosen.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $data = DosenModel::findOrFail($id);
        $data->delete();

        return redirect()->route('dosen.index')->with('success', 'Data berhasil dihapus!');
    }
}
