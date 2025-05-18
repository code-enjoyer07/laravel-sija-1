@extends('layouts.admin')

@section('content')
<main class="max-w-xl mx-auto p-6 bg-white rounded-md shadow-md">
    <h1 class="text-3xl font-bold mb-8 text-gray-800">Tambah Kategori</h1>

    <form action="{{ route('admin.kategori.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="flex flex-col">
            <label for="kategori_nama" class="mb-2 font-medium text-gray-700">Nama Kategori <span class="text-red-500">*</span></label>
            <input
                type="text"
                name="kategori_nama"
                id="kategori_nama"
                required
                class="rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none transition"
            />
        </div>

        <div>
            <button
                type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-blue-700 transition"
            >
                Simpan
            </button>
        </div>
    </form>
</main>
@endsection

