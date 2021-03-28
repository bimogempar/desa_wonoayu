<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Post;
use App\Slider;
use App\Statistic;
use Dotenv\Result\Success;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class adminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('wonoayu', [
            'posts' => Post::latest()->paginate(3),
            'sliders' => Slider::where('status', 1)->get(),
            'statistics' => Statistic::all(),
            'galleries' => Gallery::latest()->paginate(10),
        ]);
    }

    public function throwAdmin()
    {
        return redirect('admin/posts');
    }
}
