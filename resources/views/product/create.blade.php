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
                                     
<form  method="POST" action="{{ route('product.store' ) }}" class="form-horizontal" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                <input type="text" name="pname" id="pname" class="form-control" placeholder="Enter name here..">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" id="price" class="form-control" placeholder="Enter price.">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Weight:</strong>
                <input type="text" name="weight" id="weight" class="form-control" placeholder="Enter weight..">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Unit:</strong>
                <select name=unit class="form-control" >
               <option value="gms">gms</option>
               <option value="kg">kg</option>
               </select>
             </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select name=catid class="form-control" >
               @foreach ($category as $cdata)
            <option value={{ $cdata->id }}>{{ $cdata->cname }}</option>
            @endforeach
               </select>  
            
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Occasion:</strong>
               
            
                <select name=oid class="form-control" >
               @foreach ($occasion as $odata)
            <option value={{ $odata->id }}>{{ $odata->Oname }}</option>
            @endforeach
               </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Calories:</strong>
                <input type="text" name="calories" id="calories" class="form-control" placeholder="Enter calories.">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea type="text" name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter decription here.."></textarea>
 
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mfgdate:</strong>
                <input type="date" name="mfgdate" id="mfgdate" class="form-control" placeholder="Enter mfgdate.">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Expdate:</strong>
                <input type="date" name="expdate" id="expdate" class="form-control" placeholder="Enter expdate..">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image1:</strong>
                <input type="file" name="image1" id="image1" class="form-control">
            </div>
        </div>
     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image2:</strong>
                <input type="file" name="image2" id="image2" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image3:</strong>
                <input type="file" name="image3" id="image3" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image4:</strong>
                <input type="file" name="image4" id="image4" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
           
            <strong>Availability Status:</strong>
            <div class="form-group">
        <input type="radio" name="status" value="A" > Active
        <input type="radio" name="status"  value="NA">Non-Active
        </div>
        </div>
       
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
