<?php

namespace App\Http\Controllers\Client;

use App\Article;
use App\SuccessStory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogDetailController extends Controller
{
    function page($id) {
        $blog = Article::where('id', $id)->first();
        $related = Article::all()->random(3);

        return view('fe.page.blog-detail', compact('blog', 'related'));
    }

    function successStoryPage($id) {
        $blog = SuccessStory::where('id', $id)->first();
        $related = Article::all()->random(3);

        return view('fe.page.blog-detail', compact('blog', 'related'));
    }
}
