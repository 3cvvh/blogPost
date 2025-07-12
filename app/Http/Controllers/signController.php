<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class signController extends Controller
{
    public function index(){
        return view('sign',[
            'judul' => 'sign'
        ]);
    }
    public function store(Request $request){
        $datavaldi = $request->validate([
            'name' => ['required'],
            'username' => ['required','unique:users'],
            'email' => ['required','email:dns','unique:users'],
            'password' => ['min:5','required']
        ]);
        User::create($datavaldi);
        return redirect('/login')->with('berhasil','berhasil menambahkan akun');
    }
}
