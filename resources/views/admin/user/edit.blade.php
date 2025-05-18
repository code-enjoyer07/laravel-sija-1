@extends('layouts.admin')

@section('content')
<main class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
    <h1 class="text-2xl font-semibold mb-6 text-gray-800">Edit User</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="user_name" value="{{ old('user_name', $user->user_name) }}" required
               class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <input type="text" name="user_alamat" value="{{ old('user_alamat', $user->user_alamat) }}" required
               class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <input type="text" name="user_username" value="{{ old('user_username', $user->user_username) }}" required
               class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <input type="email" name="user_email" value="{{ old('user_email', $user->user_email) }}" required
               class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <input type="text" name="user_notlp" value="{{ old('user_notlp', $user->user_notlp) }}" required
               class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <input type="password" name="user_password" placeholder="Ganti password (opsional)"
               class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <select name="user_level" required
                class="w-full px-4 py-2 border border-gray-300 rounded bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="" disabled>Pilih level user</option>
            <option value="admin" @selected(old('user_level', $user->user_level) == 'admin')>Admin</option>
            <option value="user" @selected(old('user_level', $user->user_level) == 'user')>User</option>
        </select>

        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded transition">
            Update
        </button>
    </form>
</main>
@endsection

