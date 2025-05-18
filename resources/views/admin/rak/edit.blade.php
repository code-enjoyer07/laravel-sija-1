@extends('layouts.admin')

@section('content')
<main class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md mt-8">
    <h1 class="text-2xl font-semibold mb-6 text-gray-800">Edit Rak</h1>

    <form action="{{ route('admin.rak.update', $rak->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label for="rak_nama" class="block mb-1 font-medium text-gray-700">Nama Rak <span class="text-red-500">*</span></label>
            <input id="rak_nama" name="rak_nama" type="text" required
                value="{{ old('rak_nama', $rak->rak_nama) }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            @error('rak_nama')
                <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="rak_lokasi" class="block mb-1 font-medium text-gray-700">Lokasi Rak <span class="text-red-500">*</span></label>
            <input id="rak_lokasi" name="rak_lokasi" type="text" required
                value="{{ old('rak_lokasi', $rak->rak_lokasi) }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            @error('rak_lokasi')
                <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="rak_kapasitas" class="block mb-1 font-medium text-gray-700">Kapasitas <span class="text-red-500">*</span></label>
            <input id="rak_kapasitas" name="rak_kapasitas" type="number" min="1" required
                value="{{ old('rak_kapasitas', $rak->rak_kapasitas) }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            @error('rak_kapasitas')
                <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md transition">
            Update
        </button>
    </form>
</main>
@endsection

