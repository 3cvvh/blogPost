<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signController extends Controller
{
    public function index(){
        return view('sign',[
            'judul' => 'sign'
        ]);
    }
}
