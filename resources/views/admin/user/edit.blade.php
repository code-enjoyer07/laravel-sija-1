@extends('layouts.admin')

@section('content')
<h1>Edit User</h1>

<form action="{{ route('admin.user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="user_name" value="{{ $user->user_name }}" required>
    <input type="text" name="user_alamat" value="{{ $user->user_alamat }}" required>
    <input type="text" name="user_username" value="{{ $user->user_username }}" required>
    <input type="email" name="user_email" value="{{ $user->user_email }}" required>
    <input type="text" name="user_notlp" value="{{ $user->user_notlp }}" required>
    <input type="password" name="user_password" placeholder="Ganti password (opsional)">
    <select name="user_level" required>
        <option value="admin" @if($user->user_level == 'admin') selected @endif>Admin</option>
        <option value="user" @if($user->user_level == 'user') selected @endif>User</option>
    </select>
    <button type="submit">Update</button>
</form>
@endsection

