<?php

namespace App\Http\Controllers\Cms;

use App\testimony;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('cms.testimony.home', compact('testimonies'));
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
        //
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
    public function update(Request $request, testimony $testimony)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimony $testimony)
    {
        //
    }
}