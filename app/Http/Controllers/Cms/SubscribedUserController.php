<?php

namespace App\Http\Controllers\Cms;

use App\SubscribedUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscribedUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.subscribedUser.home');
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
     * @param  \App\SubscribedUser  $subscribedUser
     * @return \Illuminate\Http\Response
     */
    public function show(SubscribedUser $subscribedUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubscribedUser  $subscribedUser
     * @return \Illuminate\Http\Response
     */
    public function edit(SubscribedUser $subscribedUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubscribedUser  $subscribedUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubscribedUser $subscribedUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubscribedUser  $subscribedUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubscribedUser $subscribedUser)
    {
        //
    }
}
