<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Models\Occasion;
use Illuminate\Http\Request;
use DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $product=Product::all();
$product=Product::with(array('Category','Occasion'))->get();
//        print_r($product); 
return view('product.index',compact('product'));
   


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=category::all();
        $occasion=Occasion::all();
         return view('product.create',compact('category','occasion'));
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
            'pname' => 'required', 'description' => 'required', 'image1' => 'required'

            ]);
            if ($request->hasFile('image1')) {

                $request->validate([
                    'image1' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
            }
          if ($request->hasFile('image2')) {

                    $request->validate([
                        'image2' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                    ]);
          }
            if ($request->hasFile('image3')) {

                        $request->validate([
                            'image3' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                        ]);
                    }
            if ($request->hasFile('image4')) {

                            $request->validate([
                                'image4' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                            ]);
                        }
        $image1 = $request->file('image1');
        $name1 =  $image1->getClientOriginalName();    
        $image2= $request->file('image2');
        $name2 =  $image2->getClientOriginalName();      
        $image3 = $request->file('image3');
        $name3 =  $image3->getClientOriginalName();       
        $image4= $request->file('image4');
        $name4 =  $image4->getClientOriginalName();
     //.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('ProductImages');
        //echo $destinationPath;
        $image1->move($destinationPath, $name1);
        $image2->move($destinationPath, $name2);
        $image3->move($destinationPath, $name3);
        $image4->move($destinationPath, $name4);
               // print_r($request->file);
        
                $product = new product([
                    "pname" => $request->get('pname'),
                    "price" => $request->get('price'),
                    "weight" => $request->get('weight'),
                    "unit" => $request->get('unit'),
                    "oid" => $request->get('oid'),
                    "catid" => $request->get('catid'),
                    
                    "calories" => $request->get('calories'),
                    
                    "description" => $request->get('description'),
                    "mfgdate" => $request->get('mfgdate'),
                    "expdate" => $request->get('expdate'),
                    "status" => $request->get('status'),
                    "image1" => $name1,//$request->file->hashName()
                    "image2" => $name2,//$request->file->hashName()
                    "image3" => $name3,//$request->file->hashName()
                    "image4" => $name4//$request->file->hashName()

                ]);
                $product->save(); // Finally, save the record.
               return redirect()->route('product.index');
  
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show (product $product)
    // {
    //    // return view('product.show',compact('product'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
//        $product=product::all();
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
     {
        $request->validate([
            'pname' => 'required'
             
            ]);
            $destinationPath = public_path('ProductImages');
            echo $destinationPath;
            
                if ($request->hasFile('image1')) 
                {

                    $request->validate([
                        'image1' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                    ]);
                    echo "filename". $request->file('image1');
                    $image1 = $request->file('image1');
                    $name1 =  $image1->getClientOriginalName();
                    $image1->move($destinationPath, $name1);
            
                }
                else
                {
                    $name1 = $request->get('fimage1');
                    
                }        
                if ($request->hasFile('image2')) {

                    $request->validate([
                        'image2' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                    ]);
                    echo "filename". $request->file('image2');
                    $image2 = $request->file('image2');
                    $name2 =  $image2->getClientOriginalName();
                    $image2->move($destinationPath, $name2);
            
                }
                else
                {
                    $name2 = $request->get('fimage2');
                    
                }
            if ($request->hasFile('image3')) {

                        $request->validate([
                            'image3' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                        ]);
        echo "filename". $request->file('image3');
        $image3 = $request->file('image3');
        $name3 =  $image3->getClientOriginalName();
        $image3->move($destinationPath, $name3);
        
                    }
                    else
                    {
                        $name3 = $request->get('fimage3');
                        
                    }
            if ($request->hasFile('image4')) {

                            $request->validate([
                                'image4' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                            ]);
 
                            echo "filename". $request->file('image4');
                            $image4 = $request->file('image4');
                            $name4 =  $image4->getClientOriginalName();
                            $image4->move($destinationPath, $name4);
                     
                        }
                        else
                        {
                            $name4 = $request->get('fimage4');
                            
                        }
        
                //print_r($request->file);
              
                    $pname = $request->get('pname');
                    $price = $request->get('price');
                    $weight = $request->get('weight');
                    $unit = $request->get('unit');
                    $oid = $request->get('oid');
                    $catid = $request->get('catid');
                    
                    $calories = $request->get('calories');
                    
                    $description = $request->get('description');
                    $mfgdate = $request->get('mfgdate');
                    $expdate = $request->get('expdate');
                    $status = $request->get('status');
                     $image1 = $name1;//$request->file->hashName()
                     $image2 = $name2;//$request->file->hashName()
                     $image3 = $name3;//$request->file->hashName()
                     $image4 = $name4;//$request->file->hashName()

            
              
               
             DB::table('product')->where('id', $id)
            ->update(['pname' => $pname,
            'price' => $price,
            'weight' => $weight,
            'unit' => $unit,
            'calories' => $calories,
            'description' => $description, 
            'mfgdate' => $mfgdate,
            'expdate' => $expdate,
            'status'=> $status ,
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
            'image4'=>$image4
        ]);
     
                    
          
   return redirect()->route('product.index');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        print_r($product);
        $product->delete();
        return redirect()->route('product.index')
        ->with('success','product updated successfully');
    }
}
