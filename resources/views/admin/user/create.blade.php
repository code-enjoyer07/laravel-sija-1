@extends('layouts.admin')

@section('content')
<h1>Tambah User</h1>

<form action="{{ route('admin.user.store') }}" method="POST">
    @csrf
    <input type="text" name="user_name" placeholder="Nama" required>
    <input type="text" name="user_alamat" placeholder="Alamat" required>
    <input type="text" name="user_username" placeholder="Username" required>
    <input type="email" name="user_email" placeholder="Email" required>
    <input type="text" name="user_notlp" placeholder="No Telepon" required>
    <input type="password" name="user_password" placeholder="Password" required>
    <select name="user_level" required>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <button type="submit">Simpan</button>
</form>
@endsection

