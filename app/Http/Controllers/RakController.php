<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    public function index()
    {
        $rak = Rak::all();
        return view('admin.rak.index', compact('rak'));
    }

    public function create()
    {
        return view('admin.rak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rak_nama' => 'required|string|max:255',
            'rak_lokasi' => 'required|string|max:255',
            'rak_kapasitas' => 'required|integer|min:1'
        ]);

        Rak::create($request->all());

        return redirect()->route('admin.rak.index')->with('success', 'Rak berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $rak = Rak::findOrFail($id);
        return view('admin.rak.edit', compact('rak'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'rak_nama' => 'required|string|max:255',
            'rak_lokasi' => 'required|string|max:255',
            'rak_kapasitas' => 'required|integer|min:1'
        ]);

        $rak = Rak::findOrFail($id);
        $rak->update($request->all());

        return redirect()->route('admin.rak.index')->with('success', 'Rak berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Rak::findOrFail($id)->delete();
        return redirect()->route('admin.rak.index')->with('success', 'Rak berhasil dihapus.');
    }
}

