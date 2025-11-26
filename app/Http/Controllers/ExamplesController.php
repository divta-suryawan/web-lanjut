<?php

namespace App\Http\Controllers;

use App\Models\ExamplesModel;
use Illuminate\Http\Request;

class ExamplesController extends Controller
{
    public function getData()
    {
        $data = ExamplesModel::all();
        return view('example', compact('data'));
    }

    public function create()
    {
        return view('example.create');
    }

    public function store(Request $request)
    {
        ExamplesModel::create($request->all());
        return redirect()->route('example.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = ExamplesModel::findOrFail($id);
        return view('example.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $data = ExamplesModel::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('example.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $data = ExamplesModel::findOrFail($id);
        $data->delete();

        return redirect()->route('example.index')->with('success', 'Data berhasil dihapus!');
    }
}
