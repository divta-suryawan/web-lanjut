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
}
