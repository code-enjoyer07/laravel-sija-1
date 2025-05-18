@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Daftar Kategori</h1>
    <a href="{{ route('admin.kategori.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Kategori</a>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">{{ session('success') }}</div>
    @endif

    <table class="min-w-full bg-white rounded shadow">
        <thead>
            <tr>
                <th class="border px-4 py-2">No</th>
                <th class="border px-4 py-2">Nama Kategori</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $item)
            <tr>
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $item->kategori_nama }}</td>
                <td class="border px-4 py-2 space-x-2">
                    <a href="{{ route('admin.kategori.edit', $item->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('admin.kategori.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection

