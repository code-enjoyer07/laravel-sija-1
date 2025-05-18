<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::with('user')->paginate(10);
        return view('admin.peminjaman.index', compact('peminjamans'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.peminjaman.create', compact('users'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'peminjaman_pinjam' => 'required|date',
            'peminjaman_vent' => 'nullable|date',
            'pemajaman_note' => 'nullable|string|max:500',
            'peminjaman_denda' => 'nullable|numeric|min:0',
        ]);

        Peminjaman::create($validated);

        return redirect()->route('admin.peminjaman.index')->with('success', 'Data peminjaman berhasil disimpan.');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $users = User::all();
        return view('admin.peminjaman.edit', compact('peminjaman', 'users'));
    }

    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'peminjaman_pinjam' => 'required|date',
            'peminjaman_vent' => 'nullable|date',
            'peminjaman_status' => 'required|string|max:255',
            'pemajaman_note' => 'nullable|string|max:500',
            'peminjaman_denda' => 'nullable|numeric|min:0',
        ]);

        $peminjaman->update($validated);

        return redirect()->route('admin.peminjaman.index')->with('success', 'Data peminjaman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('admin.peminjaman.index')->with('success', 'Data peminjaman berhasil dihapus.');
    }
}
