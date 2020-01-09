<?php

namespace App\Http\Controllers\Cms;

use App\testimony;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonies = Testimony::all();
        return view('admin.page.testimony.home', compact('testimonies'));
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
                'company'=>'required|min:1:max:30',
                'name'=>'required|min:1|max:20',
                'image'=>'required',
                'position'=>'required|min:1|max:30',
                'quote'=>'required|min:1|max:50'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $testimony = new Testimony;
        $testimony->company = $request->company;
        $testimony->name = $request->name;
        $testimony->position = $request->position;
        $testimony->quote = $request->quote;
        $file = $request->file('image');
        $uid = (string) Str::uuid();
        $filename = $uid . "." . $file->extension();
        $testimony->image =$filename;
        $file->move(public_path().'/img',$testimony['image']);
        $testimony->save();
        return redirect()->route('admin-testimony');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(testimony $testimony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimony $testimony, $id)
    {
        $validate = Validator::make($request->all(),
            [
                'company'=>'required|min:1:max:30',
                'name'=>'required|min:1|max:20',
                'position'=>'required|min:1|max:30',
                'quote'=>'required|min:1|max:50'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $testimony = Testimony::find($id);
        $testimony->company = $request->company;
        $testimony->name = $request->name;
        $testimony->position = $request->position;
        $testimony->quote = $request->quote;
        if($request->file('image') != null){
            $file = $request->file('image');
            $uid = (string) Str::uuid();
            $filename = $uid . "." . $file->extension();
            $testimony->image =$filename;
            $file->move(public_path().'/img',$testimony['image']);
        }
        $testimony->save();
        return redirect()->route('admin-testimony');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimony $testimony,$id)
    {
        $testimony = Testimony::find($id)->delete();
        return redirect()->route('admin-testimony');
    }
}
