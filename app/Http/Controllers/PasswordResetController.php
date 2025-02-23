<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PasswordResetController extends Controller
{
    public function showResetForm()
    {
        return view('reset.password_reset', [
            'title' => 'Reset Password',
        ]);
    }

    public function resetPassword(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|exists:users,email|max:50',
            'password' => 'required|min:5|max:12',
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if ($user) {

            $user->password = Hash::make($validatedData['password']);
            $user->save();

            return redirect('/login')->with('success', 'Password reset berhasil');
        }
    }
}
