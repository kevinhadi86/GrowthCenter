<?php

namespace App\Http\Controllers\Client;

use App\Article;
use App\Configuration;
use App\Diagram;
use App\Http\Controllers\Controller;
use App\Question;
use App\Testimony;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        $homeQuestionIds = unserialize(Configuration::where('key', 'homeQuestion')->first()->value);
        $homeQuestions = Question::whereIn('id', $homeQuestionIds)->get();

        $homeTestimonyIds = unserialize(Configuration::where('key', 'homeTestimony')->first()->value);
        $homeTestimony = Testimony::whereIn('id', $homeTestimonyIds)->get();

        $diagrams = Diagram::get();

        $topId = Configuration::where('key', 'blogTop')->first();
        $topArticle = Article::find($topId->value)->first();

        $featuredIds = unserialize(Configuration::where('key', 'blogFeatured')->first()->value);
        $featured = Article::whereIn('id', $featuredIds)->get();

        return view('fe.page.home',
            compact('homeQuestions', 'homeTestimony', 'diagrams', 'featured', 'topArticle')
        );
    }
}
