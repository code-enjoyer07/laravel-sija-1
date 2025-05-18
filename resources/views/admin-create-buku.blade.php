@extends('layouts.admin')

@section('content')
                <main>
                    <h1 class="text-2xl font-semibold mb-4">Tambah Buku</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">
                            Halaman Tambah Data Buku
                        </li>
                    </ol>
                    <form action="">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="form-group">
                                <label
                                    for="judul_buku"
                                    class="block text-sm font-medium text-gray-700"
                                    >Judul Buku *</label
                                >
                                <input
                                    type="text"
                                    name="judul_buku"
                                    id="judul_buku"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                    placeholder="Masukkan judul buku"
                                />
                            </div>
                            <div class="form-group">
                                <label
                                    for="penulis_buku"
                                    class="block text-sm font-medium text-gray-700"
                                    >Penulis Buku *</label
                                >
                                <select
                                    name="penulis_buku"
                                    id="penulis_buku"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                >
                                    <option selected>
                                        -Pilih Penulis Buku-
                                    </option>
                                    <option value="Tere Liye">Tere Liye</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label
                                    for="penerbit_buku"
                                    class="block text-sm font-medium text-gray-700"
                                    >Penerbit Buku *</label
                                >
                                <select
                                    name="penerbit_buku"
                                    id="penerbit_buku"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                >
                                    <option selected>
                                        -Pilih Penerbit Buku-
                                    </option>
                                    <option value="Gramedia">Gramedia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label
                                    for="tahun_terbit"
                                    class="block text-sm font-medium text-gray-700"
                                    >Tahun Terbit *</label
                                >
                                <input
                                    type="text"
                                    name="tahun_terbit"
                                    id="tahun_terbit"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                    placeholder="Masukkan tahun terbit"
                                />
                            </div>
                            <div class="form-group">
                                <label
                                    for="kategori_buku"
                                    class="block text-sm font-medium text-gray-700"
                                    >Kategori Buku *</label
                                >
                                <select
                                    name="kategori_buku"
                                    id="kategori_buku"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                >
                                    <option selected>
                                        -Pilih Kategori Buku-
                                    </option>
                                    <option value="Fiksi">Fiksi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label
                                    for="rak_buku"
                                    class="block text-sm font-medium text-gray-700"
                                    >Rak Buku *</label
                                >
                                <select
                                    name="rak_buku"
                                    id="rak_buku"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                >
                                    <option selected>-Pilih Rak Buku-</option>
                                    <option value="4-L">4-L</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label
                                    for="isbn"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nomor ISBN *</label
                                >
                                <input
                                    type="text"
                                    name="isbn"
                                    id="isbn"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                    placeholder="Masukkan nomor ISBN"
                                />
                            </div>
                        </div>
                        <div class="mt-4">
                            <button
                                class="bg-blue-500 text-white font-semibold py-2 px-4 rounded"
                            >
                                Tambahkan
                            </button>
                        </div>
                    </form>
                </main>
@endsection
