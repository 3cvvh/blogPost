<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function sign(UsersRequest $request){
        $validated = $request->validated(); //validasi data
        $validated['password'] = bcrypt($validated['password']); //hash password
        \App\Models\User::create($validated); //membuat user baru
        Auth::login(\App\Models\User::where('username',$validated['username'])->first()); //login otomatis

        return redirect(route('dashboard'))->with('success','Registrasi Berhasil! Silahkan Login'); //redirect ke dashboard dengan pesan sukses
    }

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
        return back()->with('loginError','Login Gagal!');
    }
    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
