@extends('layouts.admin')

@section('content')
<h1>Daftar Rak</h1>
<a href="{{ route('admin.rak.create') }}">Tambah Rak</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Kapasitas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rak as $r)
        <tr>
            <td>{{ $r->rak_nama }}</td>
            <td>{{ $r->rak_lokasi }}</td>
            <td>{{ $r->rak_kapasitas }}</td>
            <td>
                <a href="{{ route('admin.rak.edit', $r->id) }}">Edit</a>
                <form action="{{ route('admin.rak.destroy', $r->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus rak ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

