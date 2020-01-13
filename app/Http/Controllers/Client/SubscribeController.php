<?php

namespace App\Http\Controllers\Client;

use App\SubscribedUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    function post(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|unique:subscribed_users,email',
            'name' => 'required'
        ]);

        $subscribe = new SubscribedUser();
        $subscribe->email = $request->email;
        $subscribe->name = $request->name;
        $subscribe->save();
        return redirect()->back();
    }
}
