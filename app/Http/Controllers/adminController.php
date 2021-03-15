<?php

namespace App\Http\Controllers;

use App\Post;
use Dotenv\Result\Success;
use Illuminate\Http\Request;

class adminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('admin', [
            'posts' => Post::latest()->paginate(15),
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //validate the field
        $attr = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ]);

        //assign title to the slug
        $attr['slug'] = \Str::slug(request('title'));

        //create new post
        Post::create($attr);

        session()->flash('success', 'Berita berhasil di upload');

        return redirect('admin');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        //validate the field
        $attr = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ]);

        $post->update($attr);

        session()->flash('success', 'Berita berhasil di edit');

        return redirect('admin');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('success', 'The post was deleted');
        return redirect('admin');
    }
}
