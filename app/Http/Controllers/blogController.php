<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(){
        return view('blogspot',[
            'judul' => 'post | page',
            'data' => [
                [
                    'judul' => 'adit sopo nya jawo',
                    'author' => 'iyah',
                    'isi' => 'iadqoijdioqjdiojqiowdji'
                ],
                [
                    'judul' => 'wdwqjd',
                    'author' => 'ioa',
                    'isi' => 'iadqoijdioqjdiojqiowdji'
                ]
                ]
        ]);
    }
}
