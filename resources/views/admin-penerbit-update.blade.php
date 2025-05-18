@extends('layouts.admin')

@section('content')
    <main class="flex-1">
        <h1 class="text-xl font-bold mb-5">Edit Penulis</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <form method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Penerbit</label>
                    <input type="text" id="nama" name="nama"
                        class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-blue-300 focus:outline-none">
                </div>

                <div class="flex items-center space-x-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Simpan</button>
                    <a class="text-gray-600 hover:underline">Batal</a>
                </div>
            </form>
        </div>
    </main>
@endsection
