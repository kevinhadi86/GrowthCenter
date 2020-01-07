<?php

namespace App\Http\Controllers\Client;

use App\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    function page() {
        return view('fe.page.contact-us');
    }

    function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' =>'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contactUs = new ContactUs();
        $contactUs->name = $request->input('name');
        $contactUs->email = $request->email;
        $contactUs->subject = $request->subject;
        $contactUs->message = $request->message;
        $contactUs->save();
        return redirect()->back();
    }
}
