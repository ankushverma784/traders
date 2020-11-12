@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
  <div class="card update-form">
    <div class="card-header">
      <h3 class="text-center title-2 font-weight-bold">Client Detail</h3>
      @if ($errors->any())

        <div class="alert alert-danger" style="margin:5px 30px 5px 30px;">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif
    </div>
  </div>
  <div class="card">
    <form action="{{ route('admin.agreement.store') }}" method="POST">
    @csrf
      <div class="forms bg-white p-4 my-3" >
        <div class="form-row mt-2">
          <div class="form-group col-md-6">
            <label for="inputName">Mobile Number</label>
            <input type="number" class="form-control"  placeholder="Enter Mobile" name="mobile" required="true">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAmount">Name</label>
            <input type="text" class="form-control"  placeholder="Enter GST No" name="name" required="true">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputAmount">City</label>
            <input type="text" class="form-control"  placeholder="Enter City" name="city" required="true">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPolicyNo">State</label>
            <input type="text" class="form-control"  placeholder="" value="Uttarakhand" name="state" required="true" disabled="">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputAmount">Address</label>
            <input type="text" class="form-control" placeholder="Enter Address" name="address" required="true">
          </div>
        </div>
      </div>
      <div class="forms p-3 mb-4">
        <div id="input_fields_wrap">
          <div class="row mb-1">
            <div class="col-md-11">
              <div class="row">
                <div class="col-lg-2">
                  <select class="custom-select custom-select-md" name="select_material[]" value=""  required="true">
                    <option selected="" disabled="">Select Material</option>
                    <option value="Aggregate">Aggregate</option>
                    <option value="Cement">Cement</option>
                    <option value="Brick">Brick</option>
                    <option value="Sand">Sand</option>
                  </select>
                </div>
                <div class="col-lg-2">
                  <select class="custom-select custom-select-md" name="material_type[]"  value="" required="true">
                    <option selected="" disabled="">Material Type</option>
                    <option value="Abc">Abc</option>
                    <option value="Xyz">Xyz</option>
                  </select>
                </div>
                <div class="col-lg-2">
                  <select class="custom-select custom-select-md" name="quantity_type[]" value={{}} required="" >
                    <option selected="" disabled="">Quantity Type</option>
                    <option value="Bag">Bag</option>
                    <option value="Pieces">Pieces</option>
                    <option value="Quantel">Quantel</option>
                  </select>
                </div>
                <div class="col-lg-3 rate-input">
                  <input id="tax0" class="form-control" type="number" placeholder="Min Rate" name="min_rate[]" required="">
                </div>
                <div class="col-lg-3 rate-input">
                  <input id="total-price0" class="form-control" type="number" placeholder="Max Rate" name="max_rate[]" required="">
                </div>
              </div>
            </div>
            <div class="col-md-1 rate-btn">
              <button type="button" class="btn btn1" id="add-new">+</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="form-group m-auto">
          <button type="submit" class="btn btn1 " name="submit">Add Agreement</button>
          <input type="reset" class="btn btn1 ml-2" value="Reset">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
