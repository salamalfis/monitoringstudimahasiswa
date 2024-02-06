<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;

class ResetController extends Controller
{
    public function index()
    {
        return view('forgot-password');
    }

    public function sendEmail(Request $request)
    {

            $request->validate(['email' => 'required|email'], ['email.required' => 'Email tidak boleh kosong']);

            $status = Password::sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                        ? back()->with(['success' => __($status)])
                        : back()->withErrors(['email' => __($status)]);

    }

    public function resetPass($token)
    {
        return view('session/reset-password/resetPassword', ['token' => $token]);

    }
}


