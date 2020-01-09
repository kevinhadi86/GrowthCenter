<?php

namespace App\Http\Controllers\Cms;

use App\Question;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        $categories = Category::all();
        return view('admin.page.question.home', compact('questions','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'question'=>'required|min:1|max:40',
                'category'=>'required',
                'description'=>'required|min:1|max:150',
                'image'=>'required',
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $question = new Question;
        $question->question = $request->question;
        $question->category_id = $request->category;
        $question->description = $request->description;
        $file = $request->file('image');
        $uid = (string) Str::uuid();
        $filename = $uid . "." . $file->extension();
        $question->image =$filename;
        $file->move(public_path().'/img',$question['image']);
        $question->save();
        return redirect()->route('admin-question');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question, $id)
    {
        $validate = Validator::make($request->all(),
            [
                'question'=>'required|min:1|max:40',
                'category'=>'required',
                'description'=>'required|min:1|max:150',
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $question = Question::find($id);
        $question->question = $request->question;
        $question->category_id = $request->category;
        $question->description = $request->description;
        if($request->file('image')!=null){
            $file = $request->file('image');
            $uid = (string) Str::uuid();
            $filename = $uid . "." . $file->extension();
            $question->image =$filename;
            $file->move(public_path().'/img',$question['image']);
        }
        $question->save();
        return redirect()->route('admin-question');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question, $id)
    {
        $question = Question::find($id)->delete();
        return redirect()->route('admin-question');
    }
}
