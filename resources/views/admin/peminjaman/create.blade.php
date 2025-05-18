@extends('layouts.admin')

@section('content')
<main class="p-6 bg-gray-50 rounded-lg shadow-sm mx-screen mt-8 max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Tambah Peminjaman</h1>

    <form action="{{ route('admin.peminjaman.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="user_id" class="block font-medium text-gray-700">User <span class="text-red-500">*</span></label>
                <select name="user_id" id="user_id" required
                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option value="">-- Pilih User --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                            {{ $user->user_name }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="peminjaman_pinjam" class="block font-medium text-gray-700">Tanggal Pinjam <span class="text-red-500">*</span></label>
                <input
                    type="date"
                    name="peminjaman_pinjam"
                    id="peminjaman_pinjam"
                    value="{{ old('peminjaman_pinjam') }}"
                    required
                    max="9999-12-31"
                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                >
                @error('peminjaman_pinjam')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="peminjaman_vent" class="block font-medium text-gray-700">Tanggal Kembali</label>
                <input
                    type="date"
                    name="peminjaman_vent"
                    id="peminjaman_vent"
                    value="{{ old('peminjaman_vent') }}"
                    max="9999-12-31"
                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                >
                @error('peminjaman_vent')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="peminjaman_denda" class="block font-medium text-gray-700">Denda (Rp)</label>
                <input
                    type="number"
                    name="peminjaman_denda"
                    id="peminjaman_denda"
                    value="{{ old('peminjaman_denda') }}"
                    min="0"
                    step="1000"
                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                >
                @error('peminjaman_denda')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="peminjaman_note" class="block font-medium text-gray-700">Note</label>
                <textarea
                    name="peminjaman_note"
                    id="peminjaman_note"
                    rows="4"
                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white shadow-sm
                           focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                >{{ old('peminjaman_note') }}</textarea>
                @error('peminjaman_note')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-6 flex items-center space-x-4">
            <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-md font-semibold
                           hover:bg-blue-700 transition duration-150">
                Simpan
            </button>
            <a href="{{ route('admin.peminjaman.index') }}"
               class="text-gray-600 hover:text-gray-800 font-medium transition duration-150">
                Batal
            </a>
        </div>
    </form>
</main>
@endsection

