@extends('layouts.admin')

@section('content')
    <h1>Daftar Penulis</h1>
    <a href="{{ route('admin.penulis.create') }}">Tambah Penulis</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($penulis as $item)
            <li>
                {{ $item->nama_penulis }}
                <a href="{{ route('admin.penulis.edit', $item->id) }}">Edit</a>
                <form action="{{ route('admin.penulis.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
