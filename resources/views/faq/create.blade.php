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
                                     
<form  method="POST" action="{{ route('faq.store') }}" class="form-horizontal">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FAQ Question:</strong>
                <input type="text" name="Question" id="Question" class="form-control" placeholder="Enter question here..">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FAQ Answer:</strong>
                <textarea type="text" name="Answer" id="Answer" cols="30" rows="10" class="form-control" placeholder="Enter Answer here.."></textarea>
 
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
