@extends('layouts.admin')

@section('content')
<main class="p-6 bg-gray-50 rounded-lg shadow-sm">
    <h1 class="text-3xl font-bold mb-6">{{ isset($buku) ? 'Edit Buku' : 'Tambah Buku' }}</h1>

    <form action="{{ isset($buku) ? route('admin.buku.update', $buku->id) : route('admin.buku.store') }}" method="POST" class="space-y-6">
        @csrf
        @if (isset($buku)) @method('PUT') @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="buku_judul" class="block text-sm font-medium text-gray-700">Judul Buku *</label>
                <input type="text" name="buku_judul" id="buku_judul"
                    value="{{ $buku->buku_judul ?? '' }}"
                    required
                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
            </div>

            <div>
                <label for="buku_thnterbit" class="block text-sm font-medium text-gray-700">Tahun Terbit *</label>
                <input type="number" name="buku_thnterbit" id="buku_thnterbit"
                    value="{{ $buku->buku_thnterbit ?? '' }}"
                    required
                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
            </div>

            <div>
                <label for="penulis_id" class="block text-sm font-medium text-gray-700">Penulis *</label>
                <select name="penulis_id" id="penulis_id" required
                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Pilih Penulis</option>
                    @foreach ($penulis as $p)
                        <option value="{{ $p->id }}" {{ (isset($buku) && $buku->penulis_id == $p->id) ? 'selected' : '' }}>
                            {{ $p->nama_penulis }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="penerbit_id" class="block text-sm font-medium text-gray-700">Penerbit *</label>
                <select name="penerbit_id" id="penerbit_id" required
                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Pilih Penerbit</option>
                    @foreach ($penerbit as $p)
                        <option value="{{ $p->id }}" {{ (isset($buku) && $buku->penerbit_id == $p->id) ? 'selected' : '' }}>
                            {{ $p->penerbit_nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="kategori_id" class="block text-sm font-medium text-gray-700">Kategori *</label>
                <select name="kategori_id" id="kategori_id" required
                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Pilih Kategori</option>
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}" {{ (isset($buku) && $buku->kategori_id == $k->id) ? 'selected' : '' }}>
                            {{ $k->kategori_nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="buku_isbn" class="block text-sm font-medium text-gray-700">Nomor ISBN *</label>
                <input type="text" name="buku_isbn" id="buku_isbn"
                    value="{{ $buku->buku_isbn ?? '' }}"
                    required
                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
            </div>

            <div class="flex flex-col">
                <label for="buku_image_url" class="block text-sm font-medium text-gray-700">URL Gambar Buku</label>
                <input
                type="url"
                name="buku_image_url"
                id="buku_image_url"
                value="{{ $buku->buku_image_url ?? '' }}"
                placeholder="https://example.com/image.jpg"
                class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
            </div>

        </div>

        <div>
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none">
                {{ isset($buku) ? 'Perbarui' : 'Simpan' }}
            </button>
        </div>
    </form>
</main>
@endsection

