@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Edit Peminjaman</h1>

    <form action="{{ route('admin.peminjaman.update', $peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="user_id">User *</label>
                <select name="user_id" id="user_id" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                    <option value="">-- Pilih User --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $peminjaman->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="peminjaman_pinjam">Tanggal Pinjam *</label>
                <input type="date" name="peminjaman_pinjam" id="peminjaman_pinjam" value="{{ old('peminjaman_pinjam', $peminjaman->peminjaman_pinjam) }}" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                @error('peminjaman_pinjam')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="peminjaman_vent">Tanggal Kembali</label>
                <input type="date" name="peminjaman_vent" id="peminjaman_vent" value="{{ old('peminjaman_vent', $peminjaman->peminjaman_vent) }}" class="w-full border-gray-300 rounded-md shadow-sm mt-1">
                @error('peminjaman_vent')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="peminjaman_status">Status *</label>
                <input type="text" name="peminjaman_status" id="peminjaman_status" value="{{ old('peminjaman_status', $peminjaman->peminjaman_status) }}" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                @error('peminjaman_status')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div class="md:col-span-2">
                <label for="pemajaman_note">Note</label>
                <textarea name="pemajaman_note" id="pemajaman_note" class="w-full border-gray-300 rounded-md shadow-sm mt-1">{{ old('pemajaman_note', $peminjaman->pemajaman_note) }}</textarea>
                @error('pemajaman_note')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="peminjaman_denda">Denda (Rp)</label>
                <input type="number" name="peminjaman_denda" id="peminjaman_denda" value="{{ old('peminjaman_denda', $peminjaman->peminjaman_denda) }}" class="w-full border-gray-300 rounded-md shadow-sm mt-1" min="0" step="1000">
                @error('peminjaman_denda')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
        </div>

        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('admin.peminjaman.index') }}" class="ml-4 text-gray-600">Batal</a>
    </form>
</main>
@endsection

