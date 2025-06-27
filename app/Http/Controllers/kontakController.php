<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontakController extends Controller
{
    public function index(){
        return view('kontak',[
            'nama' => 'axyl',
            'hp' => '021023910',
            'alamat' => 'jelekong',
            'judul' => 'contact | page'
        ]);
    }
}
