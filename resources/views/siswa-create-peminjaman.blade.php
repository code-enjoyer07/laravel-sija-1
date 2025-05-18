@extends('layouts.siswa')

@section('content')
                <main>
                    <div class="container mx-auto">
                        <h1 class="text-2xl font-bold mt-4">Peminjaman Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                Halaman Peminjaman Buku
                            </li>
                        </ol>
                        <form action="">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="form-group">
                                    <label for="nama" class="form-label"
                                        >Nama Peminjam *</label
                                    >
                                    <input
                                        type="text"
                                        name="nama"
                                        id="nama"
                                        class="form-control border rounded p-2 w-full"
                                        disabled
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="tgl_pinjam" class="form-label"
                                        >Tanggal Pinjam *</label
                                    >
                                    <input
                                        type="date"
                                        name="tgl_pinjam"
                                        id="tgl_pinjam"
                                        class="form-control border rounded p-2 w-full"
                                    />
                                </div>
                            </div>
                            <div
                                class="grid grid-cols-1 md:grid-cols-3 gap-4 my-3"
                            >
                                <div class="form-group">
                                    <label for="tgl_kembali" class="form-label"
                                        >Tanggal Kembali *</label
                                    >
                                    <input
                                        type="date"
                                        name="tgl_kembali"
                                        id="tgl_kembali"
                                        class="form-control border rounded p-2 w-full"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="buku" class="form-label"
                                        >Buku 1 *</label
                                    >
                                    <select
                                        class="form-control border rounded p-2 w-full"
                                        name="buku"
                                        id="buku"
                                    >
                                        <option selected>-Pilih Buku-</option>
                                        <option value="bulan">
                                            Bulan - Tere Liye
                                        </option>
                                        <option value="bumi">
                                            Bumi - Tere Liye
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="my-3">
                                <button
                                    class="bg-blue-500 text-white rounded p-2 mr-2"
                                >
                                    Buat Peminjaman
                                </button>
                                <button
                                    class="bg-yellow-500 text-white rounded p-2"
                                >
                                    Tambah Buku
                                </button>
                            </div>
                        </form>
                    </div>
                </main>
@endsection
