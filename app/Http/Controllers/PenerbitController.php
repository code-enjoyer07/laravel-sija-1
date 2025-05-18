<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbits = Penerbit::all();
        return view('admin.penerbit.index', compact('penerbits'));
    }

    public function create()
    {
        return view('admin.penerbit.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'penerbit_nama' => 'required|string|max:255',
            'penerbit_alamat' => 'nullable|string',
            'penerbit_notelp' => 'nullable|string|max:20',
            'penerbit_email' => 'nullable|email|max:255',
        ]);

        Penerbit::create($validated);
        return redirect()->route('admin.penerbit.index')->with('success', 'Penerbit berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('admin.penerbit.edit', compact('penerbit'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'penerbit_nama' => 'required|string|max:255',
            'penerbit_alamat' => 'nullable|string',
            'penerbit_notelp' => 'nullable|string|max:20',
            'penerbit_email' => 'nullable|email|max:255',
        ]);

        $penerbit = Penerbit::findOrFail($id);
        $penerbit->update($validated);

        return redirect()->route('admin.penerbit.index')->with('success', 'Penerbit berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->delete();
        return redirect()->route('admin.penerbit.index')->with('success', 'Penerbit berhasil dihapus.');
    }
}

