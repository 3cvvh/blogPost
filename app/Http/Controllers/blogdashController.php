<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\category;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

use function Laravel\Prompts\error;

class blogdashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index',[
            'data' => Blog::with('cate')->where('author_id',auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create',[
            'judul' => 'create post',
            'cate' => category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => ['min:4','required'],
            'author_id' => ['integer'],
            'cate_id' => ['required','integer'],
            'isi' => ['required','min:4','max:2000000000000000'],
            'gambar' => ['image']
        ]);
        if($request->file('gambar')){
            $data['gambar'] = $request->file('gambar')->store('blogs-img');
        }
        Blog::create($data);
        return redirect('/dashboard/blogs')->with('berhasil','berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        // return view('dashboard.show',[
        //     'data' => $blog->load(['cate', 'author']),
        // ]);
        if($blog->author->id !== auth()->user()->id){
            abort(404);
        }
        return view('dashboard.show', [
            'data' => $blog->load(['cate', 'author']),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        if($blog->author->id !== auth()->user()->id){
            return redirect('/dashboard/blogs')->with('sotau','sotau ajg');
        }
        return view('dashboard.edit',[
            'cate' => category::all(),
            'data' => $blog,
            'judul' => $blog->judul
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
         $data = $request->validate([
            'judul' => ['min:4','required'],
            'author_id' => ['integer'],
            'cate_id' => ['required','integer'],
            'isi' => ['required','min:4','max:2000000000000000']
        ]);
        Blog::where('id',$blog->id)->update($data);
        return redirect('/dashboard/blogs')->with('edited','berhasil mengedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Blog::destroy($blog->id);
        return redirect('/dashboard/blogs')->with('deleted','berhasil menghapus post');
    }
}
