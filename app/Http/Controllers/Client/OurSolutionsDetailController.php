<?php

namespace App\Http\Controllers\Client;

use App\Article;
use App\Category;
use App\Question;
use App\SuccessStory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurSolutionsDetailController extends Controller
{
    function page($id) {
        $question = Question::where('id', $id)->first();
        $categories = Category::all();
        $successStories = SuccessStory::where('question_id', $id)->get();
        $articles = Article::where('category_id', $question->category->id)->get();
        return view('fe.page.our-solutions-detail', compact('question', 'categories', 'id', 'successStories', 'articles'));
    }

    function getByQuestionId($id) {
        $question = Question::where('id', $id)->first();
        $successStories = SuccessStory::where('question_id', $id)->get();
        $articles = Article::where('category_id', $question->category->id)->get();
        return [
            'successStories' => $successStories,
            'articles' => $articles
        ];
    }
}
