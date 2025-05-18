<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Hashing\HashManager;

class AuthController extends Controller
{
    public function login()
    {
        $title = 'Login perpustakaan';
        return view('auth.login', compact('title'));
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'user_username' => 'required',
            'user_password' => 'required',
        ]);

        // Manually verify credentials
        $user = User::where('user_username', $credentials['user_username'])->first();

        if ($user && Hash::check($credentials['user_password'], $user->user_password)) {
            Auth::login($user, $request->filled('remember'));
            $request->session()->regenerate();
            if ($user->user_level === 'admin') {
                return redirect()->intended('/dashboard/admin');
            } else {
                return redirect()->intended('/dashboard/siswa');
            }
        }

        return back()
            ->withErrors([
                'user_username' => 'Username atau password salah.',
            ])
            ->onlyInput('user_username');
    }

    public function register()
    {
        $title = 'Register perpustakaan';
        return view('auth.register', compact('title'));
    }

    public function registerPost(Request $request)
    {
        $validated = $request->validate([
            'user_name' => 'required|max:255',
            'user_username' => 'required|unique:users|min:3|max:255',
            'user_email' => 'required|email|unique:users|max:255',
            'user_notlp' => 'required|max:20',
            'user_alamat' => 'required',
            'user_password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'user_name' => $validated['user_name'],
            'user_username' => $validated['user_username'],
            'user_email' => $validated['user_email'],
            'user_notlp' => $validated['user_notlp'],
            'user_alamat' => $validated['user_alamat'],
            'user_password' => Hash::make($validated['user_password']),
            'user_level' => 'anggota',
        ]);

        Auth::login($user);

        return redirect('/login')->with('success', 'Registrasi berhasil!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function profile()
    {
        $title = 'Edit Profil';
        $user = Auth::user();
        return view('profile.index', compact('title', 'user'));
    }


    public function updateProfile(Request $request)
    {

        $user = User::find(Auth::id());


        $validated = $request->validate([
            'user_name' => 'required|max:255',
            'user_email' => 'required|email|max:255|unique:users,user_email,' . $user->id,
            'user_username' => 'required|max:255|unique:users,user_username,' . $user->id,
            'user_notlp' => 'required|max:20',
            'user_alamat' => 'required',
            'user_password' => 'nullable|min:8|confirmed',
            'user_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $updateData = [
            'user_name' => $validated['user_name'],
            'user_email' => $validated['user_email'],
            'user_username' => $validated['user_username'],
            'user_notlp' => $validated['user_notlp'],
            'user_alamat' => $validated['user_alamat'],
        ];

        if (!empty($validated['user_password'])) {
            $updateData['user_password'] = Hash::make($validated['user_password']);
        }

        if ($request->hasFile('user_picture')) {
            $file = $request->file('user_picture');
            $filename = time() . '_' . Hash::make($file->getClientOriginalName());
            $file->move(public_path('images/profile'), $filename);
            $updateData['user_picture'] = $filename;
        }

        $user->update($updateData);

        return back()->with('success', 'Profil berhasil diperbarui.');
    }
}
