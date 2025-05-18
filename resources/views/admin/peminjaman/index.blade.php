@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Daftar Peminjaman</h1>

    <a href="{{ route('admin.peminjaman.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Peminjaman</a>

    @if(session('success'))
        <div class="mb-4 p-2 bg-green-300 text-green-800 rounded">{{ session('success') }}</div>
    @endif

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-2">ID</th>
                <th class="border border-gray-300 p-2">User</th>
                <th class="border border-gray-300 p-2">Tanggal Pinjam</th>
                <th class="border border-gray-300 p-2">Tanggal Kembali</th>
                <th class="border border-gray-300 p-2">Status</th>
                <th class="border border-gray-300 p-2">Note</th>
                <th class="border border-gray-300 p-2">Denda</th>
                <th class="border border-gray-300 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($peminjamans as $item)
            <tr>
                <td class="border border-gray-300 p-2">{{ $item->id }}</td>
                <td class="border border-gray-300 p-2">{{ $item->user->user_name ?? 'N/A' }}</td>
                <td class="border border-gray-300 p-2">{{ $item->peminjaman_pinjam }}</td>
                <td class="border border-gray-300 p-2">{{ $item->peminjaman_vent ?? '-' }}</td>
                <td class="border border-gray-300 p-2">{{ $item->peminjaman_status }}</td>
                <td class="border border-gray-300 p-2">{{ $item->pemajaman_note ?? '-' }}</td>
                <td class="border border-gray-300 p-2">Rp {{ number_format($item->peminjaman_denda, 0, ',', '.') }}</td>
                <td class="border border-gray-300 p-2">
                    <a href="{{ route('admin.peminjaman.edit', $item->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                    <form action="{{ route('admin.peminjaman.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="8" class="text-center p-4">Tidak ada data peminjaman.</td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $peminjamans->links() }}
    </div>
</main>
@endsection

