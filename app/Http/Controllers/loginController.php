<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login',[
            'judul' => 'login'
        ]);
    }
    public function store(Request $request){
        $creden = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        if(Auth::attempt($creden)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('failedlog','login gagal');
    }
    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
