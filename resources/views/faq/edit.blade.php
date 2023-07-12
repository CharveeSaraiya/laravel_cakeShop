@extends("admin.admin") 

<div class="app-main" id="main">
<div class="container-fluid">




<div class="row formavlidation-wrapper">
                            <div class="col-xl-6">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">FAQ Form</h4>
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
                                     
<form  method="POST"  action="{{ route('faq.update', $faq->id ) }} " class="form-horizontal">
    @csrf
@method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FAQ Question:</strong>
                <input type="text" name="Question" id="Question" class="form-control" placeholder="Enter Question here.." 
                value="{{$faq->Question}}"
               
                >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FAQ Answer:</strong>
                <input type="text" name="Answer" id="Answer" class="form-control" placeholder="Enter Answer here.." 
                value="{{$faq->Answer}}"
               
                >
            </div>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
           
            <strong>Availability Status:</strong>
            <div class="form-group">
        <input type="radio" name="status" value="A" {{($faq->status=="A")? "checked" : "" }}  >Active
        <input type="radio" name="status"  value="NA" {{($faq->status=="NA")? "checked" : "" }} >Non-Active
        </div>
        </div> 
        <input type="hidden" name="id" class="form-control"  value="{{$faq->id}}">
         

       
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
