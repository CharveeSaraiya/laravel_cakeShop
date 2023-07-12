@extends("admin.admin") 

<div class="app-main" id="main">
<div class="container-fluid">




<div class="row formavlidation-wrapper">
                            <div class="col-xl-6">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Category Form</h4>
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
                                     
<form  method="POST"  action="{{ route('category.update', $category->id ) }} " enctype="multipart/form-data"  class="form-horizontal">
    @csrf
@method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category Name:</strong>
                <input type="text" name="cname" id="cname" class="form-control" placeholder="Name" 
                value="{{$category->cname}}"
               
                >
            </div>
            <div class="form-group">
                <strong>Description</strong>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                {{$category->description}}
                </textarea>
               
               
                >
            </div>
            <div class="form-group">
                <strong>Image</strong>
                <input type="file" name="image" id="image" class="form-control">
               <img src="{{asset('CatImages/'.$category->image) }}" height=50 width=50  class="img-circle"  />
       
            </div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
           
            <strong>Availability Status:</strong>
            <div class="form-group">
        <input type="radio" name="status" value="A" {{($category->status=="A")? "checked" : "" }}  >Active
        <input type="radio" name="status"  value="N" {{($category->status=="N")? "checked" : "" }} >Non-Active
        </div>
        </div> 
        <input type="hidden" name="id" class="form-control"  value="{{$category->id}}">
         

       
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
