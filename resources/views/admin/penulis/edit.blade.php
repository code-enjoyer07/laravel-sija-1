@extends('layouts.admin')

@section('content')
    <h1>Edit Penulis</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('admin.penulis.update', $penulis->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama Penulis:</label>
        <input type="text" name="nama_penulis" value="{{ $penulis->nama_penulis }}" required>
        <button type="submit">Update</button>
    </form>
@endsection

