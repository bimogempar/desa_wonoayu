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

    public function store(Request $request)
    {
        $attr = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        $attr = $request->all();

        $slug = \Str::slug(request('title'));
        $attr['slug'] = $slug;

        $thumbnail = request()->file('thumbnail') ? request()->file('thumbnail')->store("images/posts") : null;

        $attr['thumbnail'] = $thumbnail;

        //create new post
        Post::create($attr);

        session()->flash('success', 'Berita berhasil di upload');

        return redirect('admin');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        //validate the field
        $attr = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        if (request()->file('thumbnail')) {
            \Storage::delete($post->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("images/posts");
        } else {
            $thumbnail = $post->thumbnail;
        }

        $attr['thumbnail'] = $thumbnail;

        $post->update($attr);

        session()->flash('success', 'Berita berhasil di edit');

        return redirect('admin');
    }

    public function destroy(Post $post)
    {
        \Storage::delete($post->thumbnail);
        $post->delete();
        session()->flash('success', 'The post was deleted');
        return redirect('admin');
    }
}
