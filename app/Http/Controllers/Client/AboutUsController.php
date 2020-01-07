<?php

namespace App\Http\Controllers\Client;

use App\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    function page() {
        $mainSection = Configuration::where('key', 'aboutMain')->first();
        $ourBeliefSection = Configuration::where('key', 'aboutOur')->first();
        $weBelieveSection = Configuration::where('key', 'aboutWe')->first();

        return view('fe.page.about-us',
            compact('mainSection', 'ourBeliefSection', 'weBelieveSection')
        );
    }
}
