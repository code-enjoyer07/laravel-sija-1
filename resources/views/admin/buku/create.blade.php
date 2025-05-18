@extends('layouts.admin')

@section('content')
<main class="max-w-4xl mx-auto p-6 bg-white rounded-md shadow-md">
    <h1 class="text-3xl font-bold mb-8 text-gray-800">Tambah Buku</h1>

    <form action="{{ route('admin.buku.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex flex-col">
                <label for="buku_judul" class="mb-2 font-medium text-gray-700">Judul Buku <span class="text-red-500">*</span></label>
                <input
                    type="text"
                    name="buku_judul"
                    id="buku_judul"
                    required
                    class="rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none transition"
                />
            </div>

            <div class="flex flex-col">
                <label for="penulis_id" class="mb-2 font-medium text-gray-700">Penulis Buku <span class="text-red-500">*</span></label>
                <select
                    name="penulis_id"
                    id="penulis_id"
                    required
                    class="rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none transition"
                >
                    <option value="">Pilih Penulis</option>
                    @foreach ($penulis as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_penulis }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label for="penerbit_id" class="mb-2 font-medium text-gray-700">Penerbit Buku <span class="text-red-500">*</span></label>
                <select
                    name="penerbit_id"
                    id="penerbit_id"
                    required
                    class="rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none transition"
                >
                    <option value="">Pilih Penerbit</option>
                    @foreach ($penerbit as $p)
                        <option value="{{ $p->id }}">{{ $p->penerbit_nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label for="buku_thnterbit" class="mb-2 font-medium text-gray-700">Tahun Terbit <span class="text-red-500">*</span></label>
                <input
                    type="number"
                    name="buku_thnterbit"
                    id="buku_thnterbit"
                    required
                    class="rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none transition"
                />
            </div>

            <div class="flex flex-col">
                <label for="kategori_id" class="mb-2 font-medium text-gray-700">Kategori Buku <span class="text-red-500">*</span></label>
                <select
                    name="kategori_id"
                    id="kategori_id"
                    required
                    class="rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none transition"
                >
                    <option value="">Pilih Kategori</option>
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}">{{ $k->kategori_nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label for="buku_isbn" class="mb-2 font-medium text-gray-700">Nomor ISBN <span class="text-red-500">*</span></label>
                <input
                    type="text"
                    name="buku_isbn"
                    id="buku_isbn"
                    required
                    class="rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none transition"
                />
            </div>
        </div>

        <div class="pt-6">
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

