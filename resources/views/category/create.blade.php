@extends("admin.admin") 

<div class="app-main" id="main">
<div class="container-fluid">




<div class="row formavlidation-wrapper">
                            <div class="col-xl-6">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">category Form</h4>
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
                                     
<form  method="POST" action="{{ route('category.store') }}" class="form-horizontal"  enctype="multipart/form-data"> 
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>category Name:</strong>
                <input type="text" name="cname" id="cname" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>category image</strong>
                <input type="file" name="image" id="image" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description</strong>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
           
            <strong>Availability Status:</strong>
            <div class="form-group">
        <input type="radio" name="status" value="A" > Active
        <input type="radio" name="status"  value="N">Non-Active
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
