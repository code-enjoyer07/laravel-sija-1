@extends('layouts.admin')

@section('content')
<h1>Tambah Rak</h1>

<form action="{{ route('admin.rak.store') }}" method="POST">
    @csrf
    <input type="text" name="rak_nama" placeholder="Nama Rak" required>
    <input type="text" name="rak_lokasi" placeholder="Lokasi Rak" required>
    <input type="number" name="rak_kapasitas" placeholder="Kapasitas" min="1" required>
    <button type="submit">Simpan</button>
</form>
@endsection

