@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Tambah Buku</h1>

    <form action="{{ route('admin.buku.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="buku_judul">Judul Buku *</label>
                <input type="text" name="buku_judul" id="buku_judul" required class="w-full border-gray-300 rounded-md shadow-sm mt-1" />
            </div>
            <div>
                <label for="penulis_id">Penulis Buku *</label>
                <select name="penulis_id" id="penulis_id" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                    <option value="">Pilih Penulis</option>
                    @foreach ($penulis as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_penulis }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="penerbit_id">Penerbit Buku *</label>
                <select name="penerbit_id" id="penerbit_id" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                    <option value="">Pilih Penerbit</option>
                    @foreach ($penerbit as $p)
                        <option value="{{ $p->id }}">{{ $p->penerbit_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="buku_thnterbit">Tahun Terbit *</label>
                <input type="number" name="buku_thnterbit" id="buku_thnterbit" required class="w-full border-gray-300 rounded-md shadow-sm mt-1" />
            </div>
            <div>
                <label for="kategori_id">Kategori Buku *</label>
                <select name="kategori_id" id="kategori_id" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                    <option value="">Pilih Kategori</option>
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}">{{ $k->kategori_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="buku_isbn">Nomor ISBN *</label>
                <input type="text" name="buku_isbn" id="buku_isbn" required class="w-full border-gray-300 rounded-md shadow-sm mt-1" />
            </div>
        </div>
        <div class="mt-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</main>
@endsection

