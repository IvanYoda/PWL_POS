<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $user = UserModel::findOrFail(Auth::id());

        $breadcrumb = (object) [
            'title' => 'Data Profil',
            'list' => [
                ['name' => 'Home', 'url' => url('/')],
                ['name' => 'Profil', 'url' => url('/profil')]
            ]
        ];

        $activeMenu = 'profil';

        return view('profil', compact('user'), [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu,
            'title' => 'Profil'
        ]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|min:3|unique:m_user,username,' . $id . ',user_id',
            'nama'     => 'required|string|max:100',
            'old_password' => 'nullable|string',
            'password' => 'nullable|min:5',
            'profile_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $user = UserModel::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;

        // Proses password lama
        if ($request->filled('old_password')) {
            if (Hash::check($request->old_password, $user->password)) {
                $user->password = Hash::make($request->password);
            } else {
                return back()
                    ->withErrors(['old_password' => __('Password lama salah')])
                    ->withInput();
            }
        }

        // Proses upload gambar
        if ($request->hasFile('profile_image')) {
            if ($user->profile_image && Storage::exists('public/' . $user->profile_image)) {
                Storage::delete('public/' . $user->profile_image);
            }

            $filePath = $request->file('profile_image')->store('photos', 'public');
            $user->profile_image = $filePath;
        }

        $user->save();

        return back()->with('status', 'Profil berhasil diperbarui');
    }
}
