<?php

namespace App\Http\Controllers\Cms;

use App\SuccessStory;
use App\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SuccessStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $successStories = SuccessStory::all();
        return view('admin.page.successStory.home', compact('successStories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();
        return view('admin.page.successStory.create',compact('questions'));
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
                'question'=>'required',
                'image'=>'required'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $successStory = new SuccessStory;
        $successStory->title = $request->title;
        $successStory->author = $request->author;
        $successStory->content = $request->content;
        $successStory->question_id = $request->question;
        $file = $request->file('image');
        $uid = (string) Str::uuid();
        $filename = $uid . "." . $file->extension();
        $successStory->image =$filename;
        $file->move(public_path().'/img',$successStory['image']);
        $successStory->save();
        return redirect()->route('admin-success-story');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuccessStory  $successStory
     * @return \Illuminate\Http\Response
     */
    public function show(SuccessStory $successStory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuccessStory  $successStory
     * @return \Illuminate\Http\Response
     */
    public function edit(SuccessStory $successStory,$id)
    {
        $successStory = SuccessStory::find($id);
        $questions = Question::all();
        return view('admin.page.successStory.edit',compact('successStory','questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuccessStory  $successStory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuccessStory $successStory,$id)
    {
        $validate = Validator::make($request->all(),
            [
                'title'=>'required|min:1',
                'author'=>'required|min:1',
                'content'=>'required|min:1',
                'question'=>'required',
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $successStory = SuccessStory::find($id);
        $successStory->title = $request->title;
        $successStory->author = $request->author;
        $successStory->content = $request->content;
        $successStory->question_id = $request->question;
        if($request->file('image') != null){
            $file = $request->file('image');
            $uid = (string) Str::uuid();
            $filename = $uid . "." . $file->extension();
            $successStory->image =$filename;
            $file->move(public_path().'/img',$successStory['image']);
        }
        $successStory->save();
        return redirect()->route('admin-success-story');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuccessStory  $successStory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuccessStory $successStory,$id)
    {
        $successStory = SuccessStory::find($id)->delete();
        return redirect()->route('admin-success-story');
    }
}
