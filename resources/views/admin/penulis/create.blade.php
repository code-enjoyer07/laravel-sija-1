@extends('layouts.admin')

@section('content')
    <h1>Tambah Penulis</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.penulis.store') }}" method="POST">
        @csrf
        <label>Nama Penulis:</label>
        <input type="text" name="nama_penulis" value="{{ old('nama_penulis') }}" required>
        <button type="submit">Simpan</button>
    </form>
@endsection

