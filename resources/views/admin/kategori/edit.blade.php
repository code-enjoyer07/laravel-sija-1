@extends('layouts.admin')

@section('content')
<main class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
    <h1 class="text-3xl font-bold mb-6 text-gray-900">Tambah Kategori</h1>

    <form action="{{ route('admin.kategori.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="kategori_nama" class="block mb-2 font-semibold text-gray-700">
                Nama Kategori <span class="text-red-500">*</span>
            </label>
            <input
                type="text"
                name="kategori_nama"
                id="kategori_nama"
                required
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm
                       focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
            />
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md font-semibold hover:bg-blue-700 transition">
            Simpan
        </button>
    </form>
</main>
@endsection

