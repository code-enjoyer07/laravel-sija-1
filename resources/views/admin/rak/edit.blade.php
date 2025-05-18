@extends('layouts.admin')

@section('content')
<h1>Edit Rak</h1>

<form action="{{ route('admin.rak.update', $rak->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="rak_nama" value="{{ $rak->rak_nama }}" required>
    <input type="text" name="rak_lokasi" value="{{ $rak->rak_lokasi }}" required>
    <input type="number" name="rak_kapasitas" value="{{ $rak->rak_kapasitas }}" min="1" required>
    <button type="submit">Update</button>
</form>
@endsection

