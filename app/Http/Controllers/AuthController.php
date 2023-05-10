<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return Redirect::back()->withErrors(['message' => 'Email or Password not found!']);
        }

        return redirect()->intended('/addresses');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}