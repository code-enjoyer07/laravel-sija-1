@extends('layouts.admin')

@section('content')
<main class="p-6 bg-gray-50 rounded-lg shadow-sm mt-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Rak</h1>
        <a href="{{ route('admin.rak.create') }}"
           class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-medium transition">
            Tambah Rak
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto rounded-lg shadow bg-white">
        <table class="min-w-full divide-y divide-gray-200 ">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Nama</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Lokasi</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Kapasitas</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-gray-700">
                @foreach($rak as $r)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-3">{{ $r->rak_nama }}</td>
                    <td class="px-6 py-3">{{ $r->rak_lokasi }}</td>
                    <td class="px-6 py-3">{{ $r->rak_kapasitas }}</td>
                    <td class="px-6 py-3 space-x-2">
                        <a href="{{ route('admin.rak.edit', $r->id) }}"
                           class="inline-flex px-3 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded transition">
                            Edit
                        </a>
                        <form action="{{ route('admin.rak.destroy', $r->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus rak ini?')">
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

