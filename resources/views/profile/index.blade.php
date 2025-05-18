@extends(Auth::user()->user_level === 'admin' ? 'layouts.admin' : 'layouts.siswa')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-xl font-semibold mb-4">Profil Saya</h1>

    @if(session('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
    @endif

    <div class="flex flex-col items-center space-y-4">
        @if($user->user_picture)
            <img src="{{ asset('/images/profile/' . $user->user_picture) }}" class="w-24 h-24 rounded-full" />
        @endif
        <div class="text-center">
            <p class="text-lg font-semibold">{{ $user->user_name }}</p>
            <p class="text-sm text-gray-600">{{ $user->user_username }}</p>
            <p class="text-sm text-gray-600">{{ $user->user_email }}</p>
            <p class="text-sm text-gray-600">{{ $user->user_notlp }}</p>
            <p class="text-sm text-gray-600">{{ $user->user_alamat }}</p>
        </div>

        <button
            onclick="document.getElementById('editModal').classList.remove('hidden')"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
        >
            Edit Profil
        </button>
    </div>
</div>

@include('profile._edit_modal')
@endsection

