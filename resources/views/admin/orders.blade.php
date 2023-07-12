@extends('admin.admin')
<div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
  
                        <div class="row">

                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>FAQ  Data </h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Tables
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Data Table</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <div class="datatable-wrapper table-responsive">
                                            <table id="datatable" class="display compact table table-striped table-bordered">
                                                <thead>



         <tr>
            <th>Order ID</th>
            <th>Order Date</th>
            <th>Delivery Date</th>
            <th>BillAmount</th>
            <td>Address</td>
            <td>Email</td>
            <td>Phone</td>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
@foreach ($orders as $odata)
        <tr>
            <td>{{ $odata->id }}</td>
            <td>{{ $odata->odate }}</td>
            <td>{{ $odata->ddate }}</td>
            <td>{{ $odata->billamt }}</td>
            <td>{{ $odata->dilveryaddress }}</td>
            <td>{{ $odata->email }}</td>
            <td>{{ $odata->phone }}</td>
            <td>
                <form action="{{ route('faq.destroy',$odata->id) }}" method="POST">
                    
                    <a class="btn btn-primary" href="{{ route('faq.edit',$odata->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
           
        </tr>
        @endforeach
        </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>ID</th>
            <th>Question</th>
            <th>Answer</th>
            
            <th width="280px">Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
   

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    