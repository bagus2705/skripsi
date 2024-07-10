<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }
    public function store(Request $request)
    {
       $validatedData=$request->validate([
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:255'
       ]);
        $validatedData['password']=Hash::make($validatedData['password']);
       User::create($validatedData);
       return redirect('/login')->with('success', 'Sukses Register Login');
    }
}
