<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Penulis;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    public function index()
    {
        $title = 'Daftar Buku';
        $buku = Buku::with(['penulis', 'penerbit', 'kategori'])->get();
        return view('admin.buku.index', compact('title', 'buku'));
    }

    public function create()
    {
        $title = 'Tambah Buku';
        $penulis = Penulis::all();
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();

        return view('admin.buku.create', compact('title', 'penulis', 'penerbit', 'kategori'));
    }

    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect()->route('admin.buku.index');
    }


    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penulis = Penulis::all();
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();

        return view('admin.buku.edit', compact('buku', 'penulis', 'penerbit', 'kategori'));
    }


    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return redirect()->route('admin.buku.index');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('admin.buku.index');
    }
}
