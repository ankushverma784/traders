@extends('layouts.admin')
@section('content')

<div class="mmt ">
  <div class="container">
     <!-- DATA TABLE -->
     <div class="card shadow mb-4 datatable-card" id="card">
        <div class="card-header py-3">
            <h3 class="mb-4 font-weight-bold ml-sm-1" style="float: left;">Show Customers</h3>
        <a class="btn btn1" style="float:right;" href="{{url('admin/customer')}}">Back</a>
               
        </div>
        <div class="card-body" id="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name :</strong>
                        <span style="color: black">{{ $customer->id }}</span>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Details :</strong>
                        
                        <span style="color: black">{{ $customer->mob_no }}</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gst No : </strong>
                        
                        <span style="color: black">{{ $customer->gst_no }}</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Customer Name :</strong>
                        
                        <span style="color: black">{{ $customer->customer_name }}</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address :</strong>
                        
                        <span style="color: black">{{ $customer->address }}</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Aadhar No :</strong>
                     
                        <span style="color: black">{{ $customer->aadhar_no }}</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pan No :</strong>
                        <span style="color: black">{{ $customer->pan_no}}</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>City :</strong>
                        
                        <span style="color: black">{{ $customer->city }}</span>
                    </div>
                </div>
            </div>
                 
           
        </div>
     </div>
     <!-- END DATA TABLE -->
    
  </div>
</div>
@endsection
