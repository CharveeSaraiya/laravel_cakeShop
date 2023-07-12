<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Models\Occasion;
use App\Models\cart;
use App\Models\customer;
use App\Models\orders;
use App\Models\order_detail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use DB;

//use App\Http\Controllers\Session; 

class userhomeController extends Controller
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
$cart=cart::all();
$category=category::all();
 //print_r($category);
return view('user.userhome',compact('product','cart','category'));
    }

    public function search(Request $request)
    {
        //        $product=Product::all();
       $price1=$request->get('value1');
       $price2=$request->get('value2');
       $catlist=$request->get('catlist');
       

$product=Product::with(array('Category','Occasion'))
->where('price', '>=', $price1)
->where('price', '<=',$price2)
->whereIn('catid', array($catlist))
->get();
   // print_r($product); 
$cart=cart::all();
$category=category::all();
 //print_r($category);
 $data="";
 foreach ($product as $pdata)
 {
$data.="
<article class=\"product wow fadeInRight\">
<div class=\"product-body\">
  <div class=\"product-figure\"><img src=\"ProductImages/$pdata->image1 \"  width=\"148\" height=\"128\"/> </div>
  <h5 class=\"product-title\"><a href=\"{{ route(\'userhome.show\',$pdata->id) }}\">$pdata->pname</a></h5>
  <div class=\"product-price-wrap\">
    <div class=\"product-price product-price-old\">₹ $pdata->price</div>
    <div class=\"product-price\">₹$pdata->price</div>
  </div>
</div>
<span class=\"product-badge product-badge-sale\">Sale</span>
<div class=\"product-button-wrap\">
  <div class=\"product-button\"><a class=\"button button-gray-14 button-zakaria fl-bigmug-line-search74\" href=\"{{ route(\'userhome.show\',$pdata->id) }}\"></a></div>
  <div class=\"product-button\"><a class=\"button button-primary-2 button-zakaria fl-bigmug-line-shopping202\" href=\"/cartś\"></a></div>
</div>
</article>
";

 }
 Log::info($data);
return Response($data);

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
        $firstname=$request->get('fname');
        echo "$firstname";

        $lastname=$request->get('lname');
        echo "$lastname";

        $address=$request->get('address');
        echo "$address";

        $city=$request->get('city');
        echo "$city";

        $email=$request->get('email');
        echo "$email";

        $phone=$request->get('phone');
        echo "$phone";


        $dfirstname=$request->get('ffname');
        echo "$dfirstname";

        $dlastname=$request->get('llname');
        echo "$dlastname";

        $daddress=$request->get('add');
        echo "$daddress";

        $dcity=$request->get('cittyy');
        echo "$dcity";

        $demail=$request->get('emailll');
        echo "$demail";

        $dphone=$request->get('phoneee');
        echo "$dphone";
      
        $pmode=$request->get('pay');
        $billamt=$request->get('billamt');
      echo $pmode;
        if ($pmode=="cod")
        {
           
         
            $customer=new customer([
                "firstname"=> $firstname,
                "lastname" => $lastname,
                "address" => $address,
                "city" => $city,
                "email" => $email,
                "phone" => $phone,
               ]);
               $customer->save();
               $date=date('Y-m-d');
               $ddate=date('Y-m-d');
            $cid=$customer->id;
               $dcharges=50;
               $netamt=$billamt+$dcharges;

            $orders=new orders([
                   "odate"=>$date,
                   "cid"=>$cid,
                   "ddate"=>$ddate,
                   "billamt"=>$billamt,
                   "deliverycharges"=>$dcharges,
                   "netamt"=>$netamt,
                   "deliveryaddress" =>$daddress,
                   "firstname" =>$dfirstname,
                   "lastname" =>$dlastname,
                   "email" =>$demail,
                   "city"=>$dcity,
                   "phone" =>$dphone,
                   "status" =>"O",
                   "mode" =>"COD",
                ]);
                $orders->save();

                $cart=cart::all();
            //    print_r($cart);
                foreach ($cart as $rc)
                {
              //      print_r($rc);
                    $order_detail=new order_detail([
                        "oid"=>$orders->id,
                        "pid"=> $rc->pid,
                        "qty"=>$rc->qty,
                        "price"=>$rc->price,
                    ]);
                    $order_detail->save(); 
                }

             // $paypal=$request->get('pay');
            //echo "$paypal";
            $oid=$orders->id;
           return view('user.thankyou',compact('oid'));
        }
        else
        {
            $cod=$request->get('pay');
            echo "$cod";
            
        } 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo $id;
        $product=  DB::table('product')->where('id', '=', $id)->first();
        $cart=cart::all();
      //print_r($product);
     // echo $product->pname;
     // echo "found";
        return view('user.SingleProduct',compact('product','cart'));
    }

   



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        echo $id;
      $qty=  $request->get("qty");
      $price=  $request->get("price");
      $pname=  $request->get("pname");
      $photo=  $request->get("photo");
      
      $uid=$request->session()->getId();
      $cdate=  date('Y-m-d'); 
   
      echo " $id $qty $uid $cdate $price $pname $photo";

   $cart = new cart([
    "pid" =>$id,  
    "pname" => $pname,
    "price" => $price,
    "photo" => $photo,
    "qty" =>$qty,
    "userid" => $uid,
    "cdate" => $cdate
     ]);
    $cart->save(); // Finally, save the record.
   // return redirect()->action('userhomeController@viewcart'); 
  // return redirect()->route('viewcart');
  $cart=cart::all();
  return view('user.viewcart',compact('cart'));  
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function viewcart( )
    {
                //        $product=Product::all();
$cart=cart::all();
     // print_r($cart); 
return view('user.viewcart',compact('cart'));

    }

    public function checkout( )
    {
                //        $product=Product::all();
$cart=cart::all();
    
return view('user.checkout',compact('cart'));

    }
}
