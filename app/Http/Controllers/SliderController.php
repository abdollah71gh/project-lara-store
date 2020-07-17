<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use  App\Http\Requests\createSliderRequest;
use Opis\Closure\SecurityException;

class SliderController extends Controller
{

    public function index()
    {
        //
        $slider = Slider::paginate(3);
        return view('admin.slider.index', compact('slider'));
    }


    public function create()
    {
        //
        return view('admin.slider.create');
    }


    public function store(createSliderRequest $request)
    {
        //
        $slider = new Slider();
        $slider->caption = $request->caption;
        $slider->alt = $request->alt;
        $files = $request->file('image');
        if (!empty($files)) {
            $image = $files->getClientOriginalName();
            $pathImage = 'images/slider' . $image;
            if (file_exists($pathImage)) {
                $image = bin2hex(random_bytes(10)) . $image;
            }
            $files->move('images/slider', $image);
            $slider->image = $image;
        }
        $slider->save();
        session()->flash('success', 'اطلاعات مورد نظر با موفقیت در دیتا ثبت گردید');
        return redirect(route('slider.create'));
    }


    public function show($slider)
    {
        $slider = Slider::findOrFail($slider);
        return $slider;
    }


    public function edit(Slider $slider)
    {
        //
    }


    public function update(Request $request, Slider $slider)
    {
        //
    }


    public function destroy($sliderId)
    {
        //
        $slider = Slider::findOrFail($sliderId);
        $pathDelete = 'images/slider/' . $slider->image;
        unlink($pathDelete);
        Slider::destroy($sliderId);
        session()->flash('danger','ایتم مورد نظر حذف گردید');
        return redirect(route('slider.index'));

    }
}
