<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class blogController extends Controller
{
    public function index(){
        $data = Blog::with(['author','cate']);
        if(request('search')){
            $data->where('judul','LIKE', '%' . request('search') . '%');
        }
        return view('blogspot',[
            'judul' => 'post | page',
            'data' => $data->get()
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
        $data = $user->blog()->with(['author','cate']);
        if(request('search')){
            $data->where('judul', 'LIKE', '%' . request('search') . '%');
        }
        return view('authorpos',[
            'data' => $data->get(),
            'judul' => $user->name
        ]);

    }
}
