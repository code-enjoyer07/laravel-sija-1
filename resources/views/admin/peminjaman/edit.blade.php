@extends('layouts.admin')

@section('content')
<main class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6 text-gray-800">Edit Peminjaman</h1>

    <form action="{{ route('admin.peminjaman.update', $peminjaman->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-700 mb-1">User <span class="text-red-500">*</span></label>
                <select name="user_id" id="user_id" required
                    class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option value="" disabled>-- Pilih User --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $peminjaman->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="peminjaman_pinjam" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Pinjam <span class="text-red-500">*</span></label>
                <input type="date" name="peminjaman_pinjam" id="peminjaman_pinjam" required
                    value="{{ old('peminjaman_pinjam', $peminjaman->peminjaman_pinjam) }}"
                    class="block w-full rounded-md border border-gray-300 shadow-sm px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('peminjaman_pinjam')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="peminjaman_vent" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Kembali</label>
                <input type="date" name="peminjaman_vent" id="peminjaman_vent"
                    value="{{ old('peminjaman_vent', $peminjaman->peminjaman_vent) }}"
                    class="block w-full rounded-md border border-gray-300 shadow-sm px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('peminjaman_vent')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="peminjaman_status" class="block text-sm font-medium text-gray-700 mb-1">Status <span class="text-red-500">*</span></label>
                <input type="text" name="peminjaman_status" id="peminjaman_status" required
                    value="{{ old('peminjaman_status', $peminjaman->peminjaman_status) }}"
                    class="block w-full rounded-md border border-gray-300 shadow-sm px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('peminjaman_status')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="md:col-span-2">
                <label for="pemajaman_note" class="block text-sm font-medium text-gray-700 mb-1">Note</label>
                <textarea name="pemajaman_note" id="pemajaman_note" rows="3"
                    class="block w-full rounded-md border border-gray-300 shadow-sm px-3 py-2 resize-y focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('pemajaman_note', $peminjaman->pemajaman_note) }}</textarea>
                @error('pemajaman_note')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="peminjaman_denda" class="block text-sm font-medium text-gray-700 mb-1">Denda (Rp)</label>
                <input type="number" name="peminjaman_denda" id="peminjaman_denda" min="0" step="1000"
                    value="{{ old('peminjaman_denda', $peminjaman->peminjaman_denda) }}"
                    class="block w-full rounded-md border border-gray-300 shadow-sm px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @error('peminjaman_denda')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="flex items-center gap-4 mt-6">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Update</button>
            <a href="{{ route('admin.peminjaman.index') }}" class="text-gray-600 hover:text-gray-900 transition">Batal</a>
        </div>
    </form>
</main>
@endsection

