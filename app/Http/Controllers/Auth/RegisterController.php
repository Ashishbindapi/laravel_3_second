<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        User::create([
            'username' => $request->name.'ji',
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => now(),
            'updated_at' => now(),
            'status' => 1,
        ]);
        return redirect()->back();
    }
}
