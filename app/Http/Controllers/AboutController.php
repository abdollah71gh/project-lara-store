<?php

namespace App\Http\Controllers;

use App\About;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\createAboutReauest;

class AboutController extends Controller
{

    public function index()
    {
        //

        $about = About::all();
        return view('admin.about.index', compact('about'));

    }


    public function create()
    {
        //
        return view('admin.about.create');
    }


    public function store(createAboutReauest $request)
    {
        //
        $slider = new  About();
        $slider->font = $request->font;
        $slider->color = $request->color;
        $slider->about = $request->about;
        $slider->save();

        session()->flash('success', 'اطلاعات مورد نظر با موفیت ثبت گردید');
        return redirect(route('about.index'));
    }


    public function show($about)
    {
        //
        $about = About::findOrFail($about);
        return $about;
    }


    public function destroy( $about)
    {
        //
        About::destroy($about);
        session()->flash('danger','ایتم مورد نظر با موفقیت در دیتا حذف گردید');
        return redirect(route('about.index'));
    }
}
