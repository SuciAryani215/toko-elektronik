<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index', ['data' => Barang::all()]);
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $r)
    {
        Barang::create($r->only('nama_barang','harga','stok'));
        return redirect('/barang');
    }

    public function edit($id)
    {
        return view('barang.edit', ['data' => Barang::findOrFail($id)]);
    }

    public function update(Request $r, $id)
    {
        Barang::findOrFail($id)->update($r->only('nama_barang','harga','stok'));
        return redirect('/barang');
    }

    public function destroy($id)
    {
        Barang::findOrFail($id)->delete();
        return redirect('/barang');
    }
}