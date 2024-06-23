<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function store(Request $request, $id)
    {
        $profile = User::findOrFail($id);



        // Validate the new password and confirmation password
        $request->validate([

            'current_password' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',

        ],[
            'current_password.required' => 'Password saat ini tidak boleh kosong.',
            'password.required' => 'Password baru tidak boleh kosong.',
            'password.min' => 'Password baru harus terdiri dari minimal 8 karakter.',
            'password_confirmation.required' => 'Konfirmasi password tidak boleh kosong.',
            'password_confirmation.same' => 'Konfirmasi password tidak sesuai dengan password baru.',
        ]);

    // Validate the current password
    if (!Hash::check($request->input('current_password'), $profile->password)) {
        return redirect()->back()->with('error', 'Password saat ini tidak sesuai.');
    }

    $profile->password = Hash::make($request->input('password'));
    $profile->save();

    Alert::success('Berhasil', 'Password Berhasil Diubah');
    return back();
    }


}
