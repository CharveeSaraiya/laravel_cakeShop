<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use Illuminate\Http\Request;

class aboutusController extends Controller
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
    public function aboutus()
    {
        return view('user.aboutus');
    }
    public function show($id)
    {
        echo $id;
        // $product=  DB::table('product')->where('id', '=', $id)->first();
        // print_r($product);
        return view('user.aboutus',compact('aboutus'));
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
     * @param  \App\Models\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit(aboutus $aboutus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aboutus $aboutus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy(aboutus $aboutus)
    {
        //
    }
}
