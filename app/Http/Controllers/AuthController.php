<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => "required|string|max:255",
            'email' => "required|string|unique:users",
            "password" => "required|min:3|confirmed"
        ]);

        #store user data
        $user = User::create($validated);

        # Login automatically
        Auth::login($user);
        
    }
    public function login(Request $request){
        $validated = $request->validate([
            'email' => "required|string",
            "password" => "required|min:3"
        ]);

        if( Auth::attempt($validated) ) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'credentials' => 'Sorry incorrect Credentials'
        ]);
    }


    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
