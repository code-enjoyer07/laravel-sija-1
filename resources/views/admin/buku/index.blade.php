@extends('layouts.admin')

@section('content')
<main class="p-6 bg-gray-50 rounded-lg shadow-sm">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Daftar Buku</h1>
        <a href="{{ route('admin.buku.create') }}"
            class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-medium">
            Tambah Buku
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Judul</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Penulis</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Penerbit</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Kategori</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Tahun</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">ISBN</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Image Preview</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-gray-700">
                @foreach ($buku as $item)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-2">{{ $item->buku_judul }}</td>
                        <td class="px-4 py-2">{{ $item->penulis->nama_penulis }}</td>
                        <td class="px-4 py-2">{{ $item->penerbit->penerbit_nama }}</td>
                        <td class="px-4 py-2">{{ $item->kategori->kategori_nama }}</td>
                        <td class="px-4 py-2">{{ $item->buku_thnterbit }}</td>
                        <td class="px-4 py-2">{{ $item->buku_isbn }}</td>
                        <td class="px-3 py-2"><a class="text-blue-500" href="{{ $item->buku_image_url }}">View</a></td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('admin.buku.edit', $item->id) }}"
                                class="inline-flex px-3 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded">
                                Edit
                            </a>
                            <form action="{{ route('admin.buku.destroy', $item->id) }}" method="POST" class="inline"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex px-3 py-1 text-sm text-white bg-red-500 hover:bg-red-600 rounded">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection

