<?php

namespace App\Http\Controllers\Client;

use App\Configuration;
use App\Question;
use App\Solution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurSolutionsController extends Controller
{
    function page() {
        $questionIds = unserialize(Configuration::where('key', 'solutionQuestion')->first()->value);
        $questions = Question::whereIn('id', $questionIds)->get();
        return view('fe.page.our-solutions', compact('questions'));
    }
}
