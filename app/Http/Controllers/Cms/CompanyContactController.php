<?php

namespace App\Http\Controllers\Cms;

use App\CompanyContact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = CompanyContact::all()->first();
        if($contact==null){
            $contact = new CompanyContact;
        }
        return view('admin.page.app.companyContact',compact('contact'));
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
                'address'=>'required|min:1',
                'email'=>'required|min:1',
                'website'=>'required|min:1'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $contact = CompanyContact::all()->first();
        if($contact == null){
            $contact=new CompanyContact;
        }
        $contact->name = $request->name;
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->website = $request->website;
        $contact->save();
        return redirect()->route('admin-company-contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompanyContact  $companyContact
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyContact $companyContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyContact  $companyContact
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyContact $companyContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyContact  $companyContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyContact $companyContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyContact  $companyContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyContact $companyContact)
    {
        //
    }
}
