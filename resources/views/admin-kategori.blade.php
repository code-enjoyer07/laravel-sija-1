@extends('layouts.admin')

@section('content')
                <main class="flex-1">
                    <h1 class="text-xl font-bold mb-5">Daftar Kategori Buku</h1>
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
                                        Nama Kategori
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
                                    <td class="border px-4 py-2">Fiksi</td>
                                    <td class="border px-4 py-2">
                                        <a
                                            href="/dashboard/admin/update-book"
                                            class="text-blue-500 hover:underline"
                                            >Edit</a
                                        >
                                        |
                                        <button
                                            class="text-red-500 hover:underline"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <!-- Repeat as needed -->
                            </tbody>
                        </table>
                    </div>
                </main>
@endsection
