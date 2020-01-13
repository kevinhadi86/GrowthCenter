<?php

namespace App\Http\Controllers\Client;

use App\ContactUs;
use App\Mail\SendContactUsData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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

//        Mail::send("mail.contact", $contactUs, function ($mail) {
//            $mail->from("adminweb@growthcenter.id");
//            $mail->to("inquiries@growthcenter.id")->subject("Inquiries");
//        });

        try {
            Mail::send(new SendContactUsData($contactUs));
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->back();
    }
}
