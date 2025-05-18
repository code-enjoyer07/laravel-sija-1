@extends('layouts.siswa')

@section('content')
    <h1>{{ $title }}</h1>

    <table class="table-auto border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Judul</th>
                <th class="border border-gray-300 px-4 py-2">ISBN</th>
                <th class="border border-gray-300 px-4 py-2">Tahun Terbit</th>
                <th class="border border-gray-300 px-4 py-2">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bukus as $buku)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $buku->buku_judul }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $buku->buku_isbn }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $buku->buku_thnterbit }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        @if($buku->buku_image_url)
                            <img src="{{ $buku->buku_image_url }}" alt="Gambar Buku" class="w-20 h-auto">
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

