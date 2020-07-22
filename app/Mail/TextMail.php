<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TextMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;

    public function __construct($name)

    {
        //
        $this->name = $name;
    }

    public function build()
    {
        return $this->view('mails.test')->to('abdollahghasemi10@gmail.com')
            ->subject('این ایمیل تستی میباشد')->with(['data'=>'jamshid']);

    }
}
