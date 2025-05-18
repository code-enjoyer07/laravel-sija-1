@extends('layouts.admin')

@section('content')
                <main class="flex-1">
                    <h1 class="text-xl font-bold mb-5">Data Peminjaman</h1>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th
                                        class="text-left px-4 py-2 text-gray-700 font-semibold"
                                    >
                                        ID
                                    </th>
                                    <th
                                        class="text-left px-4 py-2 text-gray-700 font-semibold"
                                    >
                                        Nama Peminjam
                                    </th>
                                    <th
                                        class="text-left px-4 py-2 text-gray-700 font-semibold"
                                    >
                                        Judul Buku
                                    </th>
                                    <th
                                        class="text-left px-4 py-2 text-gray-700 font-semibold"
                                    >
                                        Tanggal Pinjam
                                    </th>
                                    <th
                                        class="text-left px-4 py-2 text-gray-700 font-semibold"
                                    >
                                        Status
                                    </th>
                                    <th
                                        class="text-left px-4 py-2 text-gray-700 font-semibold"
                                    >
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Replace with dynamic data -->
                                <tr>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-4 py-2">
                                        Budi Santoso
                                    </td>
                                    <td class="border px-4 py-2">
                                        Laskar Pelangi
                                    </td>
                                    <td class="border px-4 py-2">2023-10-01</td>
                                    <td class="border px-4 py-2 text-green-500">
                                        Dipinjam
                                    </td>
                                    <td class="border px-4 py-2">
                                        <button
                                            class="text-blue-500 hover:underline"
                                            onclick="window.location.href='/update-peminjaman/1'"
                                        >
                                            Update Status
                                        </button>
                                    </td>
                                </tr>
                                <!-- Repeat rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </main>
@endsection
