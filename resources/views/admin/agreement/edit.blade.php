@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
  <div class="card update-form">
    <div class="card-header">
      <h3 class="text-center title-2 font-weight-bold">Edit Agreement</h3>
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
    <form action="{{ route('admin.agreement.update',$agreement->id) }}" method="POST">
    @csrf
    @method('PUT')   
      <div class="forms bg-white p-4 my-3" >
        <div class="form-row mt-2">
          <div class="form-group col-md-6">
            <label for="inputName">Mobile Number</label>
            <input type="number" class="form-control"  name="mobile" required="true" value="{{ $agreement->mobile }}">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAmount">Name</label>
            <input type="text" class="form-control"  name="name" required="true"  value="{{ $agreement->name }}">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputAmount">City</label>
            <input type="text" class="form-control"   name="city" required="true"  value="{{ $agreement->city }}">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPolicyNo">State</label>
            <input type="text" class="form-control"  value="Uttarakhand" name="state" required="true" disabled="" >
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputAmount">Address</label>
            <input type="text" class="form-control"  name="address" required="true"  value="{{ $agreement->address }}">
          </div>
        </div>
      </div>
      <div class="forms p-3 mb-4">
        <div id="input_fields_wrap">
          @for ($i = 0; $i < $count; $i++)
         

          <div class="row mb-1" >
            <div class="col-md-11">
              <div class="row">
                <div class="col-lg-2">
                  <select class="custom-select custom-select-md" name="select_material[]"  required="true" value="{{ $material[$i] }}" >
                    
                    <!-- @foreach($material_list as $material_list_id => $material_list_value)
                    <option @if($material[$i] ==  $material_list_id) selected @endif>{{ $material_list_value }}</option>
                    @endforeach -->
                    <option selected="" disabled="">{{ $material[$i] }}</option>
                    <option value="Aggregate">Aggregate</option>
                    <option value="Cement">Cement</option>
                    <option value="Brick">Brick</option>
                    <option value="Sand">Sand</option>

                  </select>
                </div>
                <div class="col-lg-2">
                  <select class="custom-select custom-select-md" name="material_type[]"  required="true" value="{{ $type[$i] }}" >
                    <!-- @foreach($type_list as $type_list_id => $type_list_value)
                    <option @if($type[$i] ==  $type_list_id) selected @endif>{{ $type_list_value }}</option>
                    @endforeach -->
                    <option selected="" disabled="">{{ $type[$i] }}</option>
                    <option value="Abc">Abc</option>
                    <option value="Xyz">Xyz</option>
                    

                  </select>
                </div>
                <div class="col-lg-2">
                  <select class="custom-select custom-select-md" name="quantity_type[]"  required="" value="{{ $quantity[$i] }}" >
                    <!-- @foreach($quantity_list as $quantity_list_id => $quantity_list_value)
                    <option @if($quantity[$i] ==  $quantity_list_id) selected @endif>{{ $quantity_list_value }}</option>
                    @endforeach
                    <option selected="" >{{ $quantity[$i] }}</option> -->
                    <option selected="" disabled="" >{{ $quantity[$i] }}</option> 
                    <option value="Bag">Bag</option>
                    <option value="Pieces">Pieces</option>
                    <option value="Quantel">Quantel</option>
                  </select>
                </div>
              
                <div class="col-lg-3 rate-input">
                <input class="form-control" type="text"  name="min_rate[]" required=""  value="{{($min_rate[$i] )}}" >
                </div>
                <div class="col-lg-3 rate-input">
                  <input id="total-price0" class="form-control"  name="max_rate[]" required="" value="{{($max_rate[$i] )}}"  >
                </div>
             
              </div>
            </div>

            <div class="col-md-1 rate-btn">
              <button type="button" class="btn btn1" id="add-new">+</button>
            </div>
          </div>

         

      @endfor
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
