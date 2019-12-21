<?php

namespace App\Http\Controllers\Cms;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.page.article.home', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.page.article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),
            [
                'title'=>'required|min:1',
                'author'=>'required|min:1',
                'content'=>'required|min:1',
                'category'=>'required',
                'image'=>'required'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $article = new Article;
        $article->title = $request->title;
        $article->author = $request->author;
        $article->content = $request->content;
        $article->category_id = $request->category;
        $article->image =$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path().'/img',$article['image']);
        $article->save();
        return redirect()->route('admin-article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article,$id)
    {
        $article = Article::find($id);
        $categories = Category::all();
        return view('admin.page.article.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article,$id)
    {
        $validate = Validator::make($request->all(),
            [
                'title'=>'required|min:1',
                'author'=>'required|min:1',
                'content'=>'required|min:1',
                'category'=>'required',
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $article = Article::find($id);
        $article->title = $request->title;
        $article->author = $request->author;
        $article->content = $request->content;
        $article->category_id = $request->category;
        if($request->file('image') != null){
            $article->image =$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/img',$article['image']);
        }
        $article->save();
        return redirect()->route('admin-article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article,$id)
    {
        $article = Article::find($id)->delete();
        return redirect()->route('admin-article');
    }
}
