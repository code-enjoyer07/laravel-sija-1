@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Edit Penerbit</h1>

    <form action="{{ route('admin.penerbit.update', $penerbit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 gap-4">
            <div>
                <label>Nama *</label>
                <input type="text" name="penerbit_nama" value="{{ old('penerbit_nama', $penerbit->penerbit_nama) }}" required class="w-full border-gray-300 rounded">
                @error('penerbit_nama') <p class="text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label>Alamat</label>
                <textarea name="penerbit_alamat" class="w-full border-gray-300 rounded">{{ old('penerbit_alamat', $penerbit->penerbit_alamat) }}</textarea>
            </div>

            <div>
                <label>No. Telepon</label>
                <input type="text" name="penerbit_notelp" value="{{ old('penerbit_notelp', $penerbit->penerbit_notelp) }}" class="w-full border-gray-300 rounded">
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="penerbit_email" value="{{ old('penerbit_email', $penerbit->penerbit_email) }}" class="w-full border-gray-300 rounded">
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('admin.penerbit.index') }}" class="text-gray-600 ml-4">Batal</a>
        </div>
    </form>
</main>
@endsection

