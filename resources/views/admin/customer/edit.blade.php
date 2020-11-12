@extends('layouts.admin')
@section('content')
<div class="container mmt ">
    <div class="col-lg-12">
        <div class="card update-form">
            <div class="card-header">
                <h3 class="text-center title-2 font-weight-bold "> Edit Customer</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body mb-3">
                <form action="{{ route('admin.customer.update',$customer->id) }}" method="POST">
                  @csrf
                  @method('PUT')                    
                    <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputName">Mobile Number</label> 
                    <input type="number" class="form-control" id="inputName" placeholder="Enter Mobile" name="mob_no" required="true" value="{{ $customer->mob_no }}">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputAmount">GST No</label>
                    <input type="text" class="form-control" id="inputAmount" placeholder="Enter GST No" name="gst_no" value="{{ $customer->gst_no }}">
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputName">Customer Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Full Name" name="customer_name" required="true" value="{{ $customer->customer_name }}">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPolicyName">Address</label>
                        <input type="text" class="form-control" id="inputPolicyName" placeholder="Enter Address" name="address" required="true" value="{{ $customer->address }}">
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputName">Aadhar No</label>
                        <input type="number" class="form-control" id="inputName" placeholder="Enter Aadhar No" name="aadhar_no" required="true" value="{{ $customer->aadhar_no }}">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputAmount">PAN No</label>
                        <input type="text" class="form-control" id="inputAmount" placeholder="Enter PAN No" name="pan_no" required="true" value="{{ $customer->pan_no }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputAmount">City</label>
                        <input type="text" class="form-control" id="inputAmount" placeholder="Enter City" name="city" required="true" value="{{ $customer->city }}">
                        </div>
                        <!-- <div class="form-group col-md-6">
                        <label for="inputPolicyNo">State</label>
                            <select class="custom-select custom-select-md" name="" >
                                <option value="0">Uttarakhand</option>
                                <option value="1">Other</option>
                            </select>
                        </div> -->
                    </div>
                    <button type="submit" class="btn btn1 mb-3" name="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


