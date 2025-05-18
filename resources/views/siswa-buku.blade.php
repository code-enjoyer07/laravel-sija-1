@extends('layouts.siswa')

@section('content')
<main class="flex-1 p-6">
                    <div class="max-w-6xl mx-auto">
                        <h1 class="text-4xl font-semibold mb-4">Buku</h1>
                        <ol class="text-gray-600 mb-6">
                            <li>Halaman Daftar Buku</li>
                        </ol>

                        <div
                            class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3"
                        >
                            <!-- Card 1 -->
                            <div
                                class="bg-white shadow-lg rounded-lg overflow-hidden"
                            >
                                <img
                                    src="images/book.jpeg"
                                    alt="Bulan"
                                    class="w-full h-48 object-cover"
                                />
                                <div class="p-4">
                                    <p
                                        class="text-center font-semibold text-xl"
                                    >
                                        Bulan
                                    </p>
                                    <p class="text-center text-gray-500 mb-3">
                                        Ditulis oleh Tere Liye
                                    </p>
                                    <button
                                        class="bg-blue-500 text-white py-2 px-4 w-full rounded hover:bg-blue-600"
                                    >
                                        Pinjam
                                    </button>
                                </div>
                            </div>
                                                        <div
                                class="bg-white shadow-lg rounded-lg overflow-hidden"
                            >
                                <img
                                    src="images/book.jpeg"
                                    alt="Bulan"
                                    class="w-full h-48 object-cover"
                                />
                                <div class="p-4">
                                    <p
                                        class="text-center font-semibold text-xl"
                                    >
                                        Bulan
                                    </p>
                                    <p class="text-center text-gray-500 mb-3">
                                        Ditulis oleh Tere Liye
                                    </p>
                                    <button
                                        class="bg-blue-500 text-white py-2 px-4 w-full rounded hover:bg-blue-600"
                                    >
                                        Pinjam
                                    </button>
                                </div>
                            </div>
                                                        <div
                                class="bg-white shadow-lg rounded-lg overflow-hidden"
                            >
                                <img
                                    src="images/book.jpeg"
                                    alt="Bulan"
                                    class="w-full h-48 object-cover"
                                />
                                <div class="p-4">
                                    <p
                                        class="text-center font-semibold text-xl"
                                    >
                                        Bulan
                                    </p>
                                    <p class="text-center text-gray-500 mb-3">
                                        Ditulis oleh Tere Liye
                                    </p>
                                    <button
                                        class="bg-blue-500 text-white py-2 px-4 w-full rounded hover:bg-blue-600"
                                    >
                                        Pinjam
                                    </button>
                                </div>
                            </div>
                            <!-- Repeat for additional cards as needed -->
                        </div>
                    </div>
                </main>

@endsection

