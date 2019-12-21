<?php

namespace App\Http\Controllers\Cms;

use App\Solution;
use App\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = Solution::all();
        $questions = Question::all();
        return view('admin.page.solution.home', compact('solutions','questions'));
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
                'solution'=>'required|min:1',
                'question'=>'required',
                'image'=>'required'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $solution = new Solution;
        $solution->solution = $request->solution;
        $solution->question_id = $request->question;
        $solution->image =$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path().'/img',$solution['image']);
        $solution->save();
        return redirect()->route('admin-solution');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution,$id)
    {
        $validate = Validator::make($request->all(),
            [
                'solution'=>'required|min:1',
                'question'=>'required',
                'image'=>'required'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $solution = Solution::find($id);
        $solution->solution = $request->solution;
        $solution->question_id = $request->question;
        $solution->image =$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path().'/img',$solution['image']);
        $solution->save();
        return redirect()->route('admin-solution');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution,$id)
    {
        $solution = Solution::find($id)->delete();
        return redirect()->route('admin-solution');
    }
}
