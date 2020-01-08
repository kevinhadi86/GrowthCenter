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
        $q = Question::whereIn('id', $questionIds)->get();
        $questions = [];
        for($i = 0; $i < 2; $i++) {
            foreach($q as $a) {
                $questions[] = $a;
            }
        }
        return view('fe.page.our-solutions', compact('questions'));
    }
}
