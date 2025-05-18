@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Tambah Kategori</h1>

    <form action="{{ route('admin.kategori.store') }}" method="POST">
        @csrf
        <div>
            <label for="kategori_nama">Nama Kategori *</label>
            <input type="text" name="kategori_nama" id="kategori_nama" required class="w-full border-gray-300 rounded-md shadow-sm mt-1" />
        </div>

        <div class="mt-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</main>
@endsection

