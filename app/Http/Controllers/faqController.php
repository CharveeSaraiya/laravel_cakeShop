<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;
use DB;
class faqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq=faq::all();
        return view('faq.index',compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Question' => 'required', 'Answer' => 'required',

            ]);
    faq::create($request->all());
   return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq=  DB::table('faq')->where('id', '=', $id)->first();
        //return redirect()->route('faq.index');
        print_r($faq);
            //return redirect()->route('faq.index');
            return view('faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo $id;

    $Question=$request->get('Question');
    $Answer=$request->get('Answer');
    $status=$request->get('status');
    echo "$Question $Answer $status";
    DB::table('faq')->where('id', $id)
    ->update(['Question' => $Question,'Answer' => $Answer, 'status'=> $status]);
   
    return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo $id;
    DB::table('faq')->where('id', '=', $id)->delete();
    return redirect()->route('faq.index');
    }
}
