<div id="editModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white max-w-2xl w-full p-6 rounded-lg shadow-lg relative">
        <button onclick="document.getElementById('editModal').classList.add('hidden')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">&times;</button>
        <h2 class="text-xl font-semibold mb-4">Edit Profil</h2>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block font-medium mb-2">Foto Profil</label>
                <div
                    class="border-dashed border-2 border-gray-400 rounded-lg p-4 text-center cursor-pointer hover:bg-gray-100"
                    id="modal-dropzone"
                >
                    <p id="modal-dropzone-text">Drop foto di sini atau klik untuk memilih</p>
                    <input type="file" name="user_picture" id="modal_user_picture" class="hidden" accept="image/*" />
                    @if($user->user_picture)
                        <img src="{{ asset('storage/' . $user->user_picture) }}" class="w-20 h-20 rounded-full mx-auto mt-2" />
                    @endif
                </div>
                @error('user_picture')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium">Nama</label>
                <input type="text" name="user_name" value="{{ old('user_name', $user->user_name) }}" class="w-full border p-2 rounded" />
                @error('user_name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium">Username</label>
                <input type="text" name="user_username" value="{{ old('user_username', $user->user_username) }}" class="w-full border p-2 rounded" />
                @error('user_username')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium">Email</label>
                <input type="email" name="user_email" value="{{ old('user_email', $user->user_email) }}" class="w-full border p-2 rounded" />
                @error('user_email')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium">No. Telepon</label>
                <input type="text" name="user_notlp" value="{{ old('user_notlp', $user->user_notlp) }}" class="w-full border p-2 rounded" />
                @error('user_notlp')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium">Alamat</label>
                <textarea name="user_alamat" class="w-full border p-2 rounded">{{ old('user_alamat', $user->user_alamat) }}</textarea>
                @error('user_alamat')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium">Password Baru</label>
                <input type="password" name="user_password" class="w-full border p-2 rounded" />
                @error('user_password')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>

            <div class="text-right">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    const dropzoneModal = document.getElementById('modal-dropzone');
    const fileInputModal = document.getElementById('modal_user_picture');
    const textModal = document.getElementById('modal-dropzone-text');

    dropzoneModal.addEventListener('click', () => fileInputModal.click());

    dropzoneModal.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropzoneModal.classList.add('bg-gray-200');
    });

    dropzoneModal.addEventListener('dragleave', () => {
        dropzoneModal.classList.remove('bg-gray-200');
    });

    dropzoneModal.addEventListener('drop', (e) => {
        e.preventDefault();
        dropzoneModal.classList.remove('bg-gray-200');
        fileInputModal.files = e.dataTransfer.files;
        textModal.innerText = fileInputModal.files[0].name;
    });

    fileInputModal.addEventListener('change', () => {
        if (fileInputModal.files.length) {
            textModal.innerText = fileInputModal.files[0].name;
        }
    });
</script>

