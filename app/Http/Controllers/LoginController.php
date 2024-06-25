<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function manuallogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        if ($user) {
            $hashPassword = $user->password;
            if (Hash::check($password, $hashPassword)) {
                Auth::login($user);
                return redirect('user/list');
            } else {
                dd('Password not match');
            }
        } else {
            dd('User not found');
        }
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('user/list');
        }
        dd('Credential not Match');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
