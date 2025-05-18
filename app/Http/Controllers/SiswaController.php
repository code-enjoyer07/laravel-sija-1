<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa_dashboard() {
        $title = "Siswa Dashboard";
        return view("siswa", compact("title"));
    }
    public function siswa_dashboard_create_peminjaman() {
        $title = "Siswa Pinjaman";
        return view('siswa-create-peminjaman', compact('title'));
    }
    public function siswa_dashboard_buku() {
        $title = "Siswa Buku";
        return view('siswa-buku', compact('title'));
    }
}
