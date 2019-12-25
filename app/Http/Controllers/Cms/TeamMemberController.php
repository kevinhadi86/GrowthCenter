<?php

namespace App\Http\Controllers\Cms;

use App\TeamMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = TeamMember::all();
        return view('admin.page.teamMember.home', compact('members'));
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
                'name'=>'required|min:1',
                'image'=>'required',
                'position'=>'required|min:1',
                'description'=>'required|min:1'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $member = new TeamMember;
        $member->name = $request->name;
        $member->position = $request->position;
        $member->description = $request->description;
        $member->image =$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path().'/img',$member['image']);
        $member->save();
        return redirect()->route('admin-team-member');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function show(TeamMember $teamMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamMember $teamMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamMember $teamMember, $id)
    {
        $validate = Validator::make($request->all(),
            [
                'name'=>'required|min:1',
                'position'=>'required|min:1',
                'description'=>'required|min:1'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $member = TeamMember::find($id);
        $member->name = $request->name;
        $member->position = $request->position;
        $member->description = $request->description;
        if($request->file('image') != null){
            $member->image =$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/img',$member['image']);
        }
        $member->save();
        return redirect()->route('admin-team-member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMember $teamMember, $id)
    {
        $member = TeamMember::find($id)->delete();
        return redirect()->route('admin-team-member');
    }
}
