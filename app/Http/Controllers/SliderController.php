<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('adminslider', [
            'sliders' => Slider::latest()->paginate(15),
        ]);
    }

    public function create()
    {
        return view('sliders/create');
    }

    public function store(Request $request)
    {
        $attr = request()->validate([
            'imageslider' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $attr = $request->all();

        $imageslider = request()->file('imageslider') ? request()->file('imageslider')->store("images/slider") : null;

        $attr['imageslider'] = $imageslider;

        //create new post
        Slider::create($attr);

        session()->flash('success', 'Slider berhasil di upload');

        return redirect('admin/sliders');
    }

    public function edit(Slider $slider)
    {
        return view('sliders.edit', compact('slider'));
    }

    public function update(Slider $slider)
    {
        $attr = request()->validate([
            'imageslider' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if (request()->file('imageslider')) {
            \Storage::delete($slider->imageslider);
            $imageslider = request()->file('imageslider')->store("images/sliders");
        } else {
            $imageslider = $slider->imageslider;
        }

        $attr['imageslider'] = $imageslider;

        $slider->update($attr);

        session()->flash('success', 'Slider berhasil di edit');

        return redirect('admin/sliders');
    }

    public function destroy(Slider $slider)
    {
        \Storage::delete($slider->imageslider);
        $slider->delete();
        session()->flash('success', 'The post was deleted');
        return redirect('admin/sliders');
    }
}
