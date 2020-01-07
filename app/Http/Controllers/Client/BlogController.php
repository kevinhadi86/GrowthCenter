<?php

namespace App\Http\Controllers\Client;

use App\Article;
use App\Category;
use App\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function page() {
        $populars = Article::all()->random(3);
        $featureds = Article::all()->random(3);

        $categories = Category::all();
        $articles = Article::where('category_id', $categories[0]->id)->get();

        $featuredIds = Configuration::where('key', 'like', 'article%')->get()->pluck('id');
        $featured = Article::whereIn('id', $featuredIds)->get();

        return view('fe.page.blog',
            compact('populars', 'featureds', 'articles', 'categories', 'featured')
        );
    }

    function getByCategory($categoryId) {
        $articles = Article::where('category_id', $categoryId)->get();
        return $articles;
    }
}
