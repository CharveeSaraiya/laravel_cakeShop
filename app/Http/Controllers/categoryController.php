<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use DB;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::all();
        return view('category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('category.create');
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
            'cname' => 'required', 
            'image' => 'required'
            
            ]);

            if ($request->hasFile('image')) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
        //echo "filename". $request->file('image');
        $image = $request->file('image');
        $name =  $image->getClientOriginalName();//.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('CatImages');
        //echo $destinationPath;
        $image->move($destinationPath, $name);
        //echo "Original ".$name;
       //  echo $request->file->hashName();
                // Save the file locally in the storage/public/ folder under a new folder named /product
                print_r($request->file);
         //       $request->file->store('CatImages', 'public');
    
                // Store the record, using the new file hashname which will be it's new filename identity.
                $category = new category([
                    "cname" => $request->get('cname'),
                    "description" => $request->get('description'),
                    
                    "status" => $request->get('status'),
                    
                    "image" => $name//$request->file->hashName()
                ]);
                $category->save(); // Finally, save the record.
            }

     
   return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=  DB::table('category')->where('id', '=', $id)->first();
        //return redirect()->route('faq.index');
        print_r($category);
            //return redirect()->route('faq.index');
            return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cname' => 'required'
             
            ]);

            if ($request->hasFile('image')) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
        echo "filename". $request->file('image');
        $image = $request->file('image');
        $name =  $image->getClientOriginalName();//.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('CatImages');
        echo $destinationPath;
        $image->move($destinationPath, $name);
        //echo "Original ".$name;
       //  echo $request->file->hashName();
                // Save the file locally in the storage/public/ folder under a new folder named /product
                print_r($request->file);
         //       $request->file->store('CatImages', 'public');
    
                // Store the record, using the new file hashname which will be it's new filename identity.
              
                $cname = $request->get('cname');
                $description = $request->get('description');
                $status = $request->get('status');
                $image = $name;
             DB::table('category')->where('id', $id)
            ->update(['cname' => $cname,'description' => $description, 'status'=> $status ,'image'=>$image]);
            }
            else
            {
                
                    $cname = $request->get('cname');
                    $description = $request->get('description');
                    $status = $request->get('status');
                     
                 DB::table('category')->where('id', $id)
                ->update(['cname' => $cname,'description' => $description, 'status'=> $status]);
                     
            }
     
   return redirect()->route('category.index');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo $id;
    DB::table('category')->where('id', '=', $id)->delete();
    return redirect()->route('category.index');
    }
}
