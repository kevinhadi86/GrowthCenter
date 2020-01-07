<?php

namespace App\Http\Controllers\Client;

use App\TeamMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurTeamController extends Controller
{
    function page() {
        $teams = TeamMember::all();
        return view('fe.page.our-team', compact('teams'));
    }
}
