<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\creategalleryrequest;

class GalleryController extends Controller
{

    public function index()
    {
        //
        $gallery = Gallery::orderBy('id', 'DESC')->get();
        return view('admin.gallery.index', compact('gallery'));
    }

    public function create()
    {
        //
        return view('admin.gallery.create');
    }


    public function store(creategalleryrequest $request)
    {
        //
        $gallery = new Gallery();
        $file = $request->file('gallery');
        if (!empty($file)) {
            $image = $file->getClientOriginalName();
            $pathImage = 'images/gallery/' . $image;
            if (file_exists($pathImage)) {
                $image = bin2hex(random_bytes(10)) . $image;
            }
            $file->move('images/gallery', $image);
            $gallery->gallery = $image;

        }
        $gallery->save();
        session()->flash('success', 'اطلاعات مورد نظر با موفقیت در دیتا ثبت گردید');
        return redirect(route('gallery.create'));

    }


    public function show( $gallery)
    {

        $gallery=Gallery::findOrFail($gallery);
        return $gallery;
    }


    public function edit(Gallery $gallery)
    {
        //
    }


    public function update(Request $request, Gallery $gallery)
    {
        //
    }


    public function destroy(Gallery $gallery)
    {
        //
    }
}
