<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request){
        return view('login');
    }

    public function register(){
        return view('register');
    }

        public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            return redirect('dashboard');
        }

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withInput()->withErrors(['login' => 'Login failed']);
        }
        
    }
        public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('login');
    }

    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'nama_lengkap' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);
        $encryptedPassword = Hash::make($request->input('password'));

    // Membuat pengguna baru dengan password terenkripsi
    $user = User::create([
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => $encryptedPassword,
        'nama_lengkap' => $request->input('nama_lengkap'),
        'alamat' => $request->input('alamat'),
    ]);

    Session::flash('status', 'success');
    Session::flash('message', 'Register success!');
    return redirect('register');

    }
}
