<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_alamat' => 'required|string',
            'user_username' => 'required|string|unique:users',
            'user_email' => 'required|email|unique:users',
            'user_notlp' => 'required|string',
            'user_password' => 'required|string|min:6',
            'user_level' => 'required|string'
        ]);

        User::create([
            'user_name' => $request->user_name,
            'user_alamat' => $request->user_alamat,
            'user_username' => $request->user_username,
            'user_email' => $request->user_email,
            'user_notlp' => $request->user_notlp,
            'user_password' => Hash::make($request->user_password),
            'user_level' => $request->user_level
        ]);

        return redirect()->route('admin.user.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_alamat' => 'required|string',
            'user_username' => 'required|string|unique:users,user_username,' . $id,
            'user_email' => 'required|email|unique:users,user_email,' . $id,
            'user_notlp' => 'required|string',
            'user_level' => 'required|string'
        ]);

        $data = $request->only([
            'user_name', 'user_alamat', 'user_username', 'user_email', 'user_notlp', 'user_level'
        ]);

        if ($request->filled('user_password')) {
            $data['user_password'] = Hash::make($request->user_password);
        }

        $user->update($data);

        return redirect()->route('admin.user.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('admin.user.index')->with('success', 'User berhasil dihapus.');
    }
}

