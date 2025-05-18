@extends('layouts.admin')

@section('content')
<main class="p-6 bg-gray-50 rounded-lg shadow-sm mx-screen mt-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Daftar Peminjaman</h1>
        <a href="{{ route('admin.peminjaman.create') }}"
           class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-medium">
            Tambah Peminjaman
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold">ID</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">User</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Tanggal Pinjam</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Tanggal Kembali</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Status</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Note</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Denda</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-gray-700">
                @forelse ($peminjamans as $item)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-4 py-2">{{ $item->id }}</td>
                    <td class="px-4 py-2">{{ $item->user->user_name ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $item->peminjaman_pinjam }}</td>
                    <td class="px-4 py-2">{{ $item->peminjaman_vent ?? '-' }}</td>
                    <td class="px-4 py-2">{{ $item->peminjaman_status }}</td>
                    <td class="px-4 py-2">{{ $item->pemajaman_note ?? '-' }}</td>
                    <td class="px-4 py-2">Rp {{ number_format($item->peminjaman_denda, 0, ',', '.') }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('admin.peminjaman.edit', $item->id) }}"
                           class="inline-flex px-3 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded">
                            Edit
                        </a>
                        <form action="{{ route('admin.peminjaman.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="inline-flex px-3 py-1 text-sm text-white bg-red-500 hover:bg-red-600 rounded">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center py-6 text-gray-500">
                        Tidak ada data peminjaman.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $peminjamans->links() }}
    </div>
</main>
@endsection

