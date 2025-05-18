@extends('layouts.head')

@section('content')
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <section class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
            <div class="text-center mb-4">
                <img src="./images/smk6.ico" alt="Logo" class="mx-auto mb-2" />
                <h3 class="text-lg font-semibold">Register - Web Perpustakaan</h3>
            </div>
            <div>
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="user_name" class="block text-sm font-medium text-gray-700">Nama Lengkap *</label>
                        <input type="text" name="user_name" id="user_name" value="{{ old('user_name') }}"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan nama lengkap" required />
                        @error('user_name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="user_username" class="block text-sm font-medium text-gray-700">Username *</label>
                        <input type="text" name="user_username" id="user_username" value="{{ old('user_username') }}"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan username" required />
                        @error('user_username')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="user_email" class="block text-sm font-medium text-gray-700">Email *</label>
                        <input type="email" name="user_email" id="user_email" value="{{ old('user_email') }}"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan email" required />
                        @error('user_email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="user_notlp" class="block text-sm font-medium text-gray-700">Nomor Telepon *</label>
                        <input type="text" name="user_notlp" id="user_notlp" value="{{ old('user_notlp') }}"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan nomor telepon" required />
                        @error('user_notlp')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="user_alamat" class="block text-sm font-medium text-gray-700">Alamat *</label>
                        <textarea name="user_alamat" id="user_alamat"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan alamat" required>{{ old('user_alamat') }}</textarea>
                        @error('user_alamat')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="user_password" class="block text-sm font-medium text-gray-700">Password *</label>
                        <input type="password" name="user_password" id="user_password"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan password (min 8 karakter)" required />
                        @error('user_password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="user_password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password *</label>
                        <input type="password" name="user_password_confirmation" id="user_password_confirmation"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Ulangi password" required />
                    </div>
                    <div class="mb-4">
                        <button class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-700"
                            type="submit">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
            <div class="text-center">
                <a href="{{ route('login') }}">
                    <p class="text-blue-600 hover:underline">Sudah punya akun? Silahkan login</p>
                </a>
            </div>
        </section>
    </div>
@endsection