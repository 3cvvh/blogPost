<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class blogController extends Controller
{
        public function index(){
        $data = Blog::with(['author','cate'])->latest(); //memanggil model blog beserta relasinya
        if(request('search')){
            $data->where('judul','LIKE', '%' . request('search') . '%');

        }
        $judul = "All Posts";
        $data = $data->paginate(10);
        return view('blogspot',compact('data','judul') //mengirim data ke view megunakan compact
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
