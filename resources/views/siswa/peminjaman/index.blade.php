@extends('layouts.siswa')

@section('content')
    <h1 class="text-xl font-bold mb-4">{{ $title }}</h1>

    @forelse ($peminjaman as $item)
        <div class="mb-6 border p-4 rounded bg-white shadow">
            <h2 class="text-lg font-semibold mb-2">Peminjaman tanggal: {{ $item->peminjaman_pinjam }}</h2>
            <h2 class="text-lg font-semibold mb-2">Peminjaman tanggal kembali: {{ $item->peminjaman_vent }}</h2>
            <p>Status: {{ ucfirst($item->peminjaman_status) }}</p>
            <p>Catatan: {{ $item->pemajaman_note ?? '-' }}</p>
        </div>
    @empty
        <p class="text-gray-600">Belum ada data peminjaman.</p>
    @endforelse
@endsection

