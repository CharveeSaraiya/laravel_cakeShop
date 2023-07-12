<?php

namespace App\Http\Controllers;

use App\Models\Occasion;
use Illuminate\Http\Request;
use DB;

class OccasionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occasion=Occasion::all();
        return view('occasion.index',compact('occasion'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('occasion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function submit(Request $request)
     {

     }
    public function store(Request $request)
    {
        $request->validate([
                'Oname' => 'required',
                ]);
        occasion::create($request->all());
       return redirect()->route('occasion.index');

                 
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Occasion  $occasion
     * @return \Illuminate\Http\Response
     */
    public function show(Occasion $occasion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Occasion  $occasion
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        
     $occasion=  DB::table('occasion')->where('id', '=', $id)->first();
    //return redirect()->route('occasion.index');
    print_r($occasion);
        //return redirect()->route('occasion.index');
        return view('occasion.edit',compact('occasion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Occasion  $occasion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //print_r($occasion);
    echo $id;

    $oname=$request->get('Oname');
    $status=$request->get('status');
    echo "$oname $status";
    DB::table('occasion')->where('id', $id)
    ->update(['Oname' => $oname, 'status'=> $status]);
   
    return redirect()->route('occasion.index');

}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occasion  $occasion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // print_r($occasion);
    echo $id;
    DB::table('occasion')->where('id', '=', $id)->delete();
    return redirect()->route('occasion.index');
    
   }
}
