@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Daftar Buku</h1>
    <a href="{{ route('admin.buku.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Buku</a>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 bg-white shadow rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Judul</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Penulis</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Penerbit</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Kategori</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Tahun</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">ISBN</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($buku as $item)
                    <tr>
                        <td class="px-4 py-2">{{ $item->buku_judul }}</td>
                        <td class="px-4 py-2">{{ $item->penulis->nama_penulis }}</td>
                        <td class="px-4 py-2">{{ $item->penerbit->penerbit_nama }}</td>
                        <td class="px-4 py-2">{{ $item->kategori->kategori_nama }}</td>
                        <td class="px-4 py-2">{{ $item->buku_thnterbit }}</td>
                        <td class="px-4 py-2">{{ $item->buku_isbn }}</td>

                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('admin.buku.edit', $item->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                            <form action="{{ route('admin.buku.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection

