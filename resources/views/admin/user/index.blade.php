@extends('layouts.admin')

@section('content')
<main class="screen p-6 bg-white rounded-lg shadow-md mt-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Daftar User</h1>
        <a href="{{ route('admin.user.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition">
           Tambah User
        </a>
    </div>

    @if(session('success'))
        <p class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</p>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border border-gray-300">Nama User</th>
                    <th class="py-2 px-4 border border-gray-300">Level</th>
                    <th class="py-2 px-4 border border-gray-300 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border border-gray-300">{{ $user->user_name }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ $user->user_level }}</td>
                        <td class="py-2 px-4 border border-gray-300 text-center space-x-2">
                            <a href="{{ route('admin.user.edit', $user->id) }}"
                               class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Yakin hapus?')"
                                        class="text-red-600 hover:underline">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if($users->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center py-4 text-gray-500">Tidak ada data user.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</main>
@endsection

