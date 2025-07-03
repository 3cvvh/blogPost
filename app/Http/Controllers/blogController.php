<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class blogController extends Controller
{
    public function index(){
        return view('blogspot',[
            'judul' => 'post | page',
            'data' => Blog::with(['author','cate'])->get(),
                ]
        );
    }
    public function single( Blog $blog){
                return view('single',[
                    'judul' => $blog->judul,
                    'data' => $blog
                ]);
    }
    public function authorpos(User $user){
        return view('authorpos',[
            'data' => $user->blog->load('cate'),
            'judul' => $user->name
        ]);

    }
}
