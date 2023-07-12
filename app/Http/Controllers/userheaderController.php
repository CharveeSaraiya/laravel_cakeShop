<?php

namespace App\Http\Controllers;

use App\Models\userheader;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\contactus;

class userheaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$userheader=userheader::all();
        return view('user.userheader');
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
     $fname=$request->get('fname');
     echo "$fname";
     $lastname=$request->get('lname');
        echo "$lastname";
    $message=$request->get('message');
        echo "$message";
     $email=$request->get('email');
        echo "$email";
     $phone=$request->get('phone');
        echo "$phone";




         $contactus=new contactus([
            "firstname"=> $fname,
            "lastname" => $lastname,
            "message" => $message,
            "email" => $email,
            "phone" => $phone,
         ]);
         $contactus->save();
       //  $cart=cart::all();
       //  return  redirect(' 
       return redirect()->route('userhome.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userheader  $userheader
     * @return \Illuminate\Http\Response
     */
    public function show(userheader $userheader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userheader  $userheader
     * @return \Illuminate\Http\Response
     */
    public function edit(userheader $userheader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userheader  $userheader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userheader $userheader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userheader  $userheader
     * @return \Illuminate\Http\Response
     */
    public function destroy(userheader $userheader)
    {
        //
    }


    public function aboutus()
    {
        $cart=cart::all();
        return view('user.aboutus',compact('cart'));
    }
    public function contactus()
    {
        $cart=cart::all();
        return view('user.contactus',compact('cart'));
    
    }
    
}
