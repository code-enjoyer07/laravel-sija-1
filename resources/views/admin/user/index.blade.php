@extends('layouts.admin')

@section('content')
<h1>Daftar User</h1>
<a href="{{ route('admin.user.create') }}">Tambah User</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<ul>
    @foreach($users as $user)
        <li>
            {{ $user->user_name }} ({{ $user->user_level }})
            <a href="{{ route('admin.user.edit', $user->id) }}">Edit</a>
            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection

