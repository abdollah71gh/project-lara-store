<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
        return view('admin.gallery.create');
    }



    public function store(Request $request)
    {
        //
    }


    public function show(Gallery $gallery)
    {
        //
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
