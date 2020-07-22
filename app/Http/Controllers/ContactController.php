<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\createContactRequest;

class ContactController extends Controller
{

    public function index()
    {
        //
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    }


    public function store(createContactRequest $request)
    {
        //
        $contact = new Contact();
        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->comment = $request->comment;
        $contact->save();
        session()->flash('success', 'اطلاعات مورد نظر با موفقیت به مدیر سایت ارسال شد');
        return redirect(route('show'));
    }

    public function show($contact)
    {
        $contact=Contact::findOrFail($contact);
        return $contact;

    }


    public function destroy( $contact)
    {

        Contact::destroy($contact);
        session()->flash('danger','کامنت مورد نظر با موفقیت حذف گردید');
        return redirect(route('contact.index'));
    }
}
