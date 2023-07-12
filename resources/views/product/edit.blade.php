@extends("admin.admin") 

<div class="app-main" id="main">
<div class="container-fluid">




<div class="row formavlidation-wrapper">
                            <div class="col-xl-6">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Product Form</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                     
<form  method="POST"  action="{{ route('product.update', $product->id ) }} " enctype="multipart/form-data"  class="form-horizontal">
    @csrf
@method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                <input type="text" name="pname" id="pname" class="form-control" placeholder="Name" 
                value="{{$product->pname}}"
               
                >
            </div>

            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" id="price" class="form-control" placeholder="price" 
                value="{{$product->price}}"
               
                >
            </div>

            <div class="form-group">
                <strong>Weight:</strong>
                <input type="text" name="weight" id="weight" class="form-control" placeholder="weight" 
                value="{{$product->weight}}"
               
                >
            </div>

            <div class="form-group">
                <strong>Unit:</strong>
                <input type="text" name="unit" id="unit" class="form-control" placeholder="unit" 
                value="{{$product->unit}}">
            </div>

            
            <div class="form-group">
                <strong>Calories:</strong>
                <input type="text" name="calories" id="calories" class="form-control" placeholder="calories" 
                value="{{$product->calories}}"
               
                >
            </div>
            <div class="form-group">
                <strong>Description</strong>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                {{$product->description}}
                </textarea>
                >
            </div>

            <div class="form-group">
                <strong>Mfgdate:</strong>
                <input type="date" name="mfgdate" id="mfgdate" class="form-control" placeholder="mfgdate" 
                value="{{$product->mfgdate}}"
               
                >
            </div>

            <div class="form-group">
                <strong>Expdate:</strong>
                <input type="date" name="expdate" id="expdate" class="form-control" placeholder="expdate" 
                value="{{$product->expdate}}"
               
                >
            </div>
            <div class="form-group">
                <strong>Image1</strong>
                <input type="file" name="image1" id="image1" class="form-control">
                <input type="hidden" name="fimage1" id="fimage1" value="{{$product->image1}}">
               
                <img src="{{asset('ProductImages/'.$product->image1) }}" height=50 width=50  class="img-circle"  />
       
            </div>

            <div class="form-group">
                <strong>Image2</strong>
                <input type="file" name="image2" id="image2" class="form-control">
                <input type="hidden" name="fimage2" id="fimage2" value="{{$product->image2}}">
               
                <img src="{{asset('ProductImages/'.$product->image2) }}" height=50 width=50  class="img-circle"  />
       
            </div>

            <div class="form-group">
                <strong>Image3</strong>
                <input type="file" name="image3" id="image3" class="form-control">
               <img src="{{asset('ProductImages/'.$product->image3) }}" height=50 width=50  class="img-circle"  />
               <input type="hidden" name="fimage3" id="fimage3" value="{{$product->image3}}">
            
            </div>

            <div class="form-group">
                <strong>Image4</strong>
                <input type="file" name="image4" id="image4" class="form-control">
               <img src="{{asset('ProductImages/'.$product->image4) }}" height=50 width=50  class="img-circle"  />
               <input type="hidden" name="fimage4" id="fimage4" value="{{$product->image1}}">
            
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
           
            <strong>Availability Status:</strong>
            <div class="form-group">
        <input type="radio" name="status" value="A" {{($product->status=="A")? "checked" : "" }}  >Active
        <input type="radio" name="status"  value="N" {{($product->status=="N")? "checked" : "" }} >Non-Active
        </div>
        </div> 
        <input type="hidden" name="id" class="form-control"  value="{{$product->id}}">
         

       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
