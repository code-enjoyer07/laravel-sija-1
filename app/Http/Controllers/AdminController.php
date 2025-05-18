<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Penulis;
use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        $title = "Admin Dashboard";
        return view('admin', compact('title'));
    }
    public function admin_create_buku_dashboard()
    {
        $title = "Admin Create Buku";
        $penulis = Penulis::all();
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        $rak = Rak::all();
        $buku = DB::table('buku')
            ->join('penulis', 'buku.penulis_id', '=', 'penulis.id')
            ->join('penerbit', 'buku.penerbit_id', '=', 'penerbit.id')
            ->join('kategori', 'buku.kategori_id', '=', 'kategori.id')
            ->select(
                'buku.*',
                'penulis.nama_penulis',
                'penerbit.penerbit_nama',
                'kategori.kategori_nama',
            )
            ->orderBy('buku.id', 'desc')
            ->get();

        return view('admin-create-buku', compact('title', 'penulis', 'penerbit', 'kategori', 'rak', 'buku'));
    }
    public function admin_update_buku_dashboard()
    {
        $title = "Admin Update Buku";
        return view('admin-update-buku', compact('title'));
    }
    public function admin_penulis_dashboard()
    {
        $title = "Admin Penulis";
        return view('admin-penulis', compact('title'));
    }
    public function admin_penerbit_dashboard()
    {
        $title = "Admin Penerbit";
        return view('admin-penerbit', compact('title'));
    }
    public function admin_peminjaman_dashboard()
    {
        $title = "Admin Peminjaman";
        return view('admin-peminjaman', compact('title'));
    }
    public function admin_kategori_dashboard()
    {
        $title = "Admin Kategori";
        return view('admin-kategori', compact('title'));
    }
    public function admin_create_kategori_dashboard()
    {
        $title = "Form create kategori";
        return view('admin-create-kategori', compact('title'));
    }
    public function admin_penulis_update_dashboard()
    {
        $title = "Admin Penulis Update";
        return view('admin-penulis-update', compact('title'));
    }
    public function admin_create_penulis_dashboard()
    {
        $title = "Form create penulis";
        return view('admin-create-penulis', compact('title'));
    }
    public function admin_penerbit_update_dashboard()
    {
        $title = "Admin Penerbit Update";
        return view('admin-penerbit-update', compact('title'));
    }
}
