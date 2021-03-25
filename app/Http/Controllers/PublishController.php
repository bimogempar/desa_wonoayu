<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Post;
use App\Statistic;
use Illuminate\Http\Request;

class PublishController extends Controller
{
    public function index()
    {
        return view('wonoayu', [
            'posts' => Post::latest()->paginate(3),
            'sliders' => Slider::where('status', 1)->get(),
            'statistics' => Statistic::all(),
        ]);
    }
}
