<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.SignUp');
    }

    public function store(Request $request)
    {
        // return request()->all();
        $validatedData = $request->validate([
            'first_name'      => 'required',
            'last_name'      => 'required',
            'phone'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:8|confirmed'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData); //create data berdasarkan input

        return redirect('/')->with('success', 'Registration seccessfull! Please login'); //kembali ke halaman login
    }
}