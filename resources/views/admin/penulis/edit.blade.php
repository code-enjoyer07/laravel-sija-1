@extends('layouts.admin')

@section('content')
<main class="p-6 bg-gray-50 rounded-lg shadow-sm mt-8 max-w-lg mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Penulis</h1>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 px-4 py-3 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.penulis.update', $penulis->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="nama_penulis" class="block mb-2 font-medium text-gray-700">Nama Penulis:</label>
            <input type="text" id="nama_penulis" name="nama_penulis" value="{{ old('nama_penulis', $penulis->nama_penulis) }}" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 font-semibold transition">
            Update
        </button>
        <a href="{{ route('admin.penulis.index') }}" class="ml-4 text-gray-600 hover:underline">Batal</a>
    </form>
</main>
@endsection

