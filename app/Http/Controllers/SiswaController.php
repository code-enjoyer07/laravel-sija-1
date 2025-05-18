<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        $title = "Siswa Dashboard";
        return view('siswa', compact('title'));
    }

    public function buku_index()
    {
        $title = "Siswa Buku";
        $bukus = Buku::all();
        return view('siswa.buku.index', compact('title', 'bukus'));
    }
    public function peminjaman_index()
    {
        $title = "Peminjaman Saya";
        $user = Auth::user();

        $peminjaman = Peminjaman::with('peminjamanDetails.buku')
            ->where('user_id', $user->id)
            ->get();

        return view('siswa.peminjaman.index', compact('title', 'peminjaman'));
    }
}
