<?php

namespace App\Http\Controllers;

use App\Mail\TextMail;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function sendmail()
    {
      $data=['name'=>'reza'];
        Mail::send(new TextMail('name'));
    }
}
