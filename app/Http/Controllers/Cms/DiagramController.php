<?php

namespace App\Http\Controllers\Cms;

use App\Diagram;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Diagram  $diagram
     * @return \Illuminate\Http\Response
     */
    public function show(Diagram $diagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diagram  $diagram
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagram $diagram,$id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diagram  $diagram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagram $diagram,$id)
    {
        $validate = Validator::make($request->all(),
            [
                'title'=>'required|min:1',
                'description'=>'required|min:1'
            ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }
        $diagram = Diagram::where('text_image',$request->text_image)->first();
        if($diagram==null){

            $diagram = new Diagram;
            $diagram->text_image = $request->text_image;
        }

        $diagram->title=$request->title;
        $diagram->description=$request->description;
        $diagram->save();

        return redirect()->route('admin-manage-home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diagram  $diagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagram $diagram)
    {
        //
    }
}
