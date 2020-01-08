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
        $categoryId = request()->query('category');

        $populars = Article::all()->random(3);
        $featureds = Article::all()->random(3);

        $categories = Category::all();
        if ($categoryId != null) {
            $category = Category::find($categoryId);
        } else {
            $category = $categories[0];
        }
        $articles = Article::where('category_id', $category->id)->get();

        $topId = Configuration::where('key', 'blogTop')->first();
        $topArticle = Article::find($topId->value);

        $featuredIds = unserialize(Configuration::where('key', 'blogFeatured')->first()->value);
        $featured = Article::whereIn('id', $featuredIds)->get();

        return view('fe.page.blog',
            compact('populars', 'featureds', 'articles', 'categories', 'featured', 'topArticle')
        );
    }

    function getByCategory($categoryId) {
        $articles = Article::where('category_id', $categoryId)->get();
        return $articles;
    }
}
