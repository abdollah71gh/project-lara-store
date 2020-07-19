<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\creategalleryrequest;
use App\Http\Requests\updateGalleryRequest;

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


    public function show($gallery)
    {

        $gallery = Gallery::findOrFail($gallery);
        return $gallery;
    }


    public function edit($gallery)
    {
        //
        $gallery = Gallery::findOrFail($gallery);
        return view('admin.gallery.edit', compact('gallery'));
    }


    public function update(updateGalleryRequest $request, $gallery)
    {
        $gallery = Gallery::findOrFail($gallery);
        $file = $request->file('gallery');
        if (empty($file)) {
            $image = $gallery->gallery;
            $gallery->gallery = $image;
        } else {
            $deletegalley = $gallery->gallery;
            $pathgallery = 'images/gallery/' . $deletegalley;
            unlink($pathgallery);
            $image = $file->getClientOriginalName();
            $pathImage = 'images/gallery/' . $image;
            if (file_exists($pathImage)) {
                $image = time() . $image;
            }
            $file->move('images/gallery', $image);
            $gallery->gallery = $image;

        }
        $gallery->save();
        session()->flash('success', 'ایتم مورد نظر با موفقیت در دیتا ثبت گردید');
        return redirect(route('gallery.index'));

    }


    public function destroy($galleryId)
    {

        $gallery = Gallery::findorFail($galleryId);
        $deleteGallery = 'images/gallery/' . $gallery->gallery;
        unlink($deleteGallery);
        Gallery::destroy($galleryId);
        session()->flash('danger', 'ایتم مورد نظر با موفقیت در دیتا حذف گردید');
        return redirect(route('gallery.index'));


    }
}
