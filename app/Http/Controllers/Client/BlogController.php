<?php

namespace App\Http\Controllers\Client;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function page() {
        $populars = Article::all()->random(3);
        $featureds = Article::all()->random(3);

        $categories = Category::all();
        $articles = Article::where('category_id', $categories[0]->id)->get();

        return view('fe.page.blog',
            compact('populars', 'featureds', 'articles', 'categories')
        );
    }

    function getByCategory($categoryId) {
        $articles = Article::where('category_id', $categoryId)->get();
        return $articles;
    }
}
