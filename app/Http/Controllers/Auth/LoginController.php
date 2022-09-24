<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage(){
        return view('backend.pages.auth.login');
    }

    public function login(Request $request){

        $validated = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string|min:4'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Login attmpt

        if(Auth::attempt($credentials, $request->filled('remember'))){
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }else{
            return back()->withErrors([
                'email' => 'Wrong credentials!'
            ])->onlyInput('email');
        }
    }

    // Logout Method
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
