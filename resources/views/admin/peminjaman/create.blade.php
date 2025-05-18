@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Tambah Peminjaman</h1>

    <form action="{{ route('admin.peminjaman.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="user_id">User *</label>
                <select name="user_id" id="user_id" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                    <option value="">-- Pilih User --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                            {{ $user->user_name }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="peminjaman_pinjam">Tanggal Pinjam *</label>
                <input
                    type="date"
                    name="peminjaman_pinjam"
                    id="peminjaman_pinjam"
                    value="{{ old('peminjaman_pinjam') }}"
                    class="w-full border-gray-300 rounded-md shadow-sm mt-1"
                    required
                    max="9999-12-31"
                >
                @error('peminjaman_pinjam')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="peminjaman_vent">Tanggal Kembali</label>
                <input
                    type="date"
                    name="peminjaman_vent"
                    id="peminjaman_vent"
                    value="{{ old('peminjaman_vent') }}"
                    class="w-full border-gray-300 rounded-md shadow-sm mt-1"
                    max="9999-12-31"
                >
                @error('peminjaman_vent')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="peminjaman_note">Note</label>
                <textarea
                    name="peminjaman_note"
                    id="peminjaman_note"
                    class="w-full border-gray-300 rounded-md shadow-sm mt-1"
                >{{ old('peminjaman_note') }}</textarea>
                @error('peminjaman_note')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="peminjaman_denda">Denda (Rp)</label>
                <input
                    type="number"
                    name="peminjaman_denda"
                    id="peminjaman_denda"
                    value="{{ old('peminjaman_denda') }}"
                    class="w-full border-gray-300 rounded-md shadow-sm mt-1"
                    min="0"
                    step="1000"
                >
                @error('peminjaman_denda')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="mt-4 bg-green-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
        <a href="{{ route('admin.peminjaman.index') }}" class="ml-4 text-gray-600">
            Batal
        </a>
    </form>
</main>
@endsection

