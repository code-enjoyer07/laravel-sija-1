@extends('layouts.admin')

@section('content')
<main class="p-6 bg-gray-50 rounded-lg shadow-sm mt-8 mx-screen">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Penulis</h1>
        <a href="{{ route('admin.penulis.create') }}"
           class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-medium transition">
            Tambah Penulis
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold">#</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Nama Penulis</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-gray-700">
                @foreach($penulis as $index => $item)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $item->nama_penulis }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('admin.penulis.edit', $item->id) }}"
                           class="inline-flex px-3 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded transition">
                            Edit
                        </a>
                        <form action="{{ route('admin.penulis.destroy', $item->id) }}" method="POST" class="inline"
                              onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="inline-flex px-3 py-1 text-sm text-white bg-red-500 hover:bg-red-600 rounded transition">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection

