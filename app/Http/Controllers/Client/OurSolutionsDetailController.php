<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurSolutionsDetailController extends Controller
{
    function page() {
        return view('fe.page.our-solutions-detail');
    }
}
