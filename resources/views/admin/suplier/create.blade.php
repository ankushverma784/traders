@extends('layouts.admin')
@section('content')
<div class="section__content section__content--p30 mb-5">
  <div id="h">
  </div>
  <div class="container mmt mb-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="card update-form">
          <div class="card-header">
            <h3 class="text-center title-2 font-weight-bold">Add Supplier</h3>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.suplier.store') }}" method="POST">
                  @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputName">Mobile Number</label>
                  <input type="number" class="form-control" id="inputName" placeholder="Enter Mobile" name="mobile" required="true">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAmount">Name</label>
                  <input type="text" class="form-control" id="inputAmount" placeholder="Enter Full Name" name="name" required="true">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputName">City</label>
                  <input type="text" class="form-control" id="inputName" placeholder="Enter City" name="city" required="true">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPolicyNo">State</label>
                  <input type="text" class="form-control" id="inputPolicyNo" placeholder="" value="Uttarakhand" name="state" required="true" disabled="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputPolicyNo">Address</label>
                  <input type="text" class="form-control" id="inputPolicyNo" placeholder="Enter Address" name="address" required="true">
                </div>
              </div>
              <button type="submit" class="btn btn1" name="submit">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection