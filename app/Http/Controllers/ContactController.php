<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        //
        dd($request->all());
    }



    public function destroy(Contact $contact)
    {
        //
    }
}
