<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        $penulis = Penulis::all();
        return view('admin.penulis.index', compact('penulis'));
    }

    public function create()
    {
        return view('admin.penulis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penulis' => 'required|string|max:255',
        ]);

        Penulis::create($request->all());
        return redirect()->route('admin.penulis.index')->with('success', 'Penulis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('admin.penulis.edit', compact('penulis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penulis' => 'required|string|max:255',
        ]);

        $penulis = Penulis::findOrFail($id);
        $penulis->update($request->all());

        return redirect()->route('admin.penulis.index')->with('success', 'Penulis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('admin.penulis.index')->with('success', 'Penulis berhasil dihapus.');
    }
}

