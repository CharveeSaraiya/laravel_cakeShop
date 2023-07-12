<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\orders;

use Illuminate\Http\Request;
use DB;


class adminController extends Controller
{
    public function display()
    {
        return view('admin.admin');
    }
    public function create()
    {
        return view('admin.login');
    }
    public function newadmin()
    {
        return view('admin.signup');
    }

    
    public function show()
    {
        $orders=orders::all();
        return view('admin.orders',compact('orders'));
    }


    public function store(Request $request)
    {
     //echo "sfdsf";
        $email=$request->get("email");
        $pass=$request->get("pass");
      //    echo "$email $pass";
        $users = DB::table('users')
                 ->where('email', '=', $email)
                 ->where('password', '=',$pass)
                 ->limit(1)
                 ->get();
         print_r(sizeof($users));
         $user=compact('users');
      //    echo($user[0]['email']);
        // echo $user[0];
        
       // print_r($user[0]['id']);
         if (sizeof($users)>0)
         {
             $request->session()->put('email',$email);
            $request->session()->put('user',$users);
            // return redirectto view('admin.adminheader');
           return redirect('/adminIndex');
          // return redirect()->action('/adminIndex');
         }
         else{
             echo "Sorry";
             $msg="<h1><b>Sorry</b></h1>";
             return view('admin.login',compact('msg'));
         }
      
    }

    public function submit(Request $request)
    {
       // <form action="{{ url('/') }}" method="submit" >
       echo "sfdsf";
       $request->validate([
        'name' => 'required', 'email' => 'required', 'password' => 'required'
        ]);
        $User = new User([
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "password" => $request->get('password'),
        ]);
        $User->save(); // Finally, save the record.
       return redirect('/adminIndex');

     //  return view('admin.signup',compact('msg'));
    }
}
