<?php

namespace App\Mail;

use App\ContactUs;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactUsData extends Mailable
{
    use Queueable, SerializesModels;

    protected $contactUs;

    /**
     * Create a new message instance.
     *
     * @param $contactUs
     */
    public function __construct($contactUs)
    {
        $this->contactUs = $contactUs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Inquiry")->to("jordantheyinz@gmail.com")->from("adminweb@growthcenter.id")->view('mail.contact')->with([
            'contactUs' => $this->contactUs
        ]);
    }
}
