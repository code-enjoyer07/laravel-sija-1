@extends('layouts.head')

@section('content')
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <section class="w-full max-w-sm p-6 bg-white rounded-lg shadow-lg">
            <div class="text-center mb-4">
                <img src="./images/smk6.ico" alt="Logo" class="mx-auto mb-2" />
                <h3 class="text-lg font-semibold">Login - Web Perpustakaan CIHUY NGERI</h3>
            </div>
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif
            <div>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="user_username" class="block text-sm font-medium text-gray-700">Username *</label>
                        <input type="text" name="user_username" id="user_username" value="{{ old('user_username') }}"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan username Anda" required />
                        @error('user_username')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="user_password" class="block text-sm font-medium text-gray-700">Password *</label>
                        <input type="password" name="user_password" id="user_password"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan password Anda" required />
                        @error('user_password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember" class="text-sm text-gray-700">Ingat saya</label>
                    </div>
                    <div class="mb-4">
                        <button class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-700"
                            type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
            <div class="text-center">
                <a href="{{ route('register') }}">
                    <p class="text-blue-600 hover:underline">Tidak punya akun? Silahkan mendaftar</p>
                </a>
            </div>
        </section>
    </div>
@endsection