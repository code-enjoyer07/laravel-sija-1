@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Data Penerbit</h1>

    <a href="{{ route('admin.penerbit.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Penerbit</a>

    @if(session('success'))
        <div class="text-green-600 mb-2">{{ session('success') }}</div>
    @endif

    <table class="w-full border">
        <thead>
            <tr>
                <th class="border px-2 py-1">#</th>
                <th class="border px-2 py-1">Nama</th>
                <th class="border px-2 py-1">Alamat</th>
                <th class="border px-2 py-1">No. Telp</th>
                <th class="border px-2 py-1">Email</th>
                <th class="border px-2 py-1">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penerbits as $penerbit)
                <tr>
                    <td class="border px-2 py-1">{{ $loop->iteration }}</td>
                    <td class="border px-2 py-1">{{ $penerbit->penerbit_nama }}</td>
                    <td class="border px-2 py-1">{{ $penerbit->penerbit_alamat }}</td>
                    <td class="border px-2 py-1">{{ $penerbit->penerbit_notelp }}</td>
                    <td class="border px-2 py-1">{{ $penerbit->penerbit_email }}</td>
                    <td class="border px-2 py-1">
                        <a href="{{ route('admin.penerbit.edit', $penerbit->id) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('admin.penerbit.destroy', $penerbit->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 ml-2">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection

