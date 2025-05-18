@extends('layouts.admin')

@section('content')
<main class="p-6 bg-gray-50 rounded-lg shadow-sm mt-8 max-w-xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Tambah Penerbit</h1>

    <form action="{{ route('admin.penerbit.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="penerbit_nama" class="block text-gray-700 font-medium mb-2">Nama <span class="text-red-500">*</span></label>
            <input id="penerbit_nama" type="text" name="penerbit_nama" value="{{ old('penerbit_nama') }}" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
            @error('penerbit_nama')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="penerbit_alamat" class="block text-gray-700 font-medium mb-2">Alamat</label>
            <textarea id="penerbit_alamat" name="penerbit_alamat" rows="3"
                      class="w-full px-4 py-2 border border-gray-300 rounded-md resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('penerbit_alamat') }}</textarea>
            @error('penerbit_alamat')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="penerbit_notelp" class="block text-gray-700 font-medium mb-2">No. Telepon</label>
            <input id="penerbit_notelp" type="text" name="penerbit_notelp" value="{{ old('penerbit_notelp') }}"
                   placeholder="0812xxxxxxx"
                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
            @error('penerbit_notelp')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="penerbit_email" class="block text-gray-700 font-medium mb-2">Email</label>
            <input id="penerbit_email" type="email" name="penerbit_email" value="{{ old('penerbit_email') }}"
                   placeholder="email@example.com"
                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
            @error('penerbit_email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center space-x-4">
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md transition">
                Simpan
            </button>
            <a href="{{ route('admin.penerbit.index') }}"
               class="text-gray-600 hover:text-gray-900 font-medium transition">
                Batal
            </a>
        </div>
    </form>
</main>
@endsection

