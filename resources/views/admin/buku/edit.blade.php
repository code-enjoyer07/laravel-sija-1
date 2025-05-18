@extends('layouts.admin')

@section('content')
<main>
    <h1 class="text-2xl font-semibold mb-4">Edit Buku</h1>

    <form action="{{ route('admin.buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="buku_judul">Judul Buku *</label>
                <input type="text" name="buku_judul" id="buku_judul" value="{{ $buku->buku_judul }}" required class="w-full border-gray-300 rounded-md shadow-sm mt-1" />
            </div>
            <div>
                <label for="penulis_id">Penulis Buku *</label>
                <select name="penulis_id" id="penulis_id" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                    @foreach ($penulis as $p)
                        <option value="{{ $p->id }}" {{ $buku->penulis_id == $p->id ? 'selected' : '' }}>{{ $p->nama_penulis }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="penerbit_id">Penerbit Buku *</label>
                <select name="penerbit_id" id="penerbit_id" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                    @foreach ($penerbit as $p)
                        <option value="{{ $p->id }}" {{ $buku->penerbit_id == $p->id ? 'selected' : '' }}>{{ $p->penerbit_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="buku_thnterbit">Tahun Terbit *</label>
                <input type="number" name="buku_thnterbit" id="buku_thnterbit" value="{{ $buku->buku_thnterbit }}" required class="w-full border-gray-300 rounded-md shadow-sm mt-1" />
            </div>
            <div>
                <label for="kategori_id">Kategori Buku *</label>
                <select name="kategori_id" id="kategori_id" class="w-full border-gray-300 rounded-md shadow-sm mt-1" required>
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}" {{ $buku->kategori_id == $k->id ? 'selected' : '' }}>{{ $k->kategori_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="buku_isbn">Nomor ISBN *</label>
                <input type="text" name="buku_isbn" id="buku_isbn" value="{{ $buku->buku_isbn }}" required class="w-full border-gray-300 rounded-md shadow-sm mt-1" />
            </div>
        </div>
        <div class="mt-4">
            <button class="bg-yellow-500 text-white px-4 py-2 rounded">Perbarui</button>
        </div>
    </form>
</main>
@endsection

