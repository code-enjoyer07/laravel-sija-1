@extends('layouts.admin')

@section('content')
                <main>
                    <div>
                        <h1 class="text-2xl font-bold">Dashboard</h1>
                        <ol class="mt-2 mb-4 text-sm text-gray-600">
                            <li class="active">
                                Halaman Dashboard Admin Perpustakaan
                            </li>
                        </ol>
                        <div
                            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"
                        >
                            <div class="bg-blue-500 text-white p-4 rounded-lg">
                                <div class="font-bold">Primary Card</div>
                                <div
                                    class="flex justify-between items-center mt-2"
                                >
                                    <a
                                        class="text-white text-sm hover:underline"
                                        href="#"
                                        >View Details</a
                                    >
                                    <div class="text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-yellow-500 text-white p-4 rounded-lg"
                            >
                                <div class="font-bold">Warning Card</div>
                                <div
                                    class="flex justify-between items-center mt-2"
                                >
                                    <a
                                        class="text-white text-sm hover:underline"
                                        href="#"
                                        >View Details</a
                                    >
                                    <div class="text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-green-500 text-white p-4 rounded-lg">
                                <div class="font-bold">Success Card</div>
                                <div
                                    class="flex justify-between items-center mt-2"
                                >
                                    <a
                                        class="text-white text-sm hover:underline"
                                        href="#"
                                        >View Details</a
                                    >
                                    <div class="text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-red-500 text-white p-4 rounded-lg">
                                <div class="font-bold">Danger Card</div>
                                <div
                                    class="flex justify-between items-center mt-2"
                                >
                                    <a
                                        class="text-white text-sm hover:underline"
                                        href="#"
                                        >View Details</a
                                    >
                                    <div class="text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection
