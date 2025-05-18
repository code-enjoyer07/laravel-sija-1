@extends('layouts.admin')

@section('content')
<main class="flex-1">
    <h1 class="text-xl font-bold mb-5">Tambah Kategori Buku</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form  method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_kategori" class="block text-gray-700 font-semibold mb-2">
                    Nama Kategori
                </label>
                <input
                    type="text"
                    id="nama_kategori"
                    name="nama_kategori"
                    class="w-full border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama kategori"
                    required>
            </div>

            <div class="mt-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</main>
@endsection

