@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
  <div class="row">
        
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center title-2  font-weight-bold"> Add Challan</h3>
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
        <div class="card-body card-block">
          <form action="{{ route('admin.challan.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
          @csrf
            <div class="row form-group">
              <div class="col col-md-4">
                <label for="select" class=" form-control-label">Select Vehicle</label>
              </div>
              <div class="col-6 col-md-8">
                <select name="vehicle_no" class="form-control" required="true">
                <option value="option_select" disabled selected>Select Vehicle</option>
                @foreach ($addVehicle as $addy)
                  <!-- <option value="{{$addy->id}}">>{{$addy->id }}</option> -->
                  <option value="{{$addy->vehicle_no}}">{{$addy->vehicle_no }}</option>
                  @endforeach

                  <!-- <option value="2"> </option> -->
                </select>
              </div>
            </div>
            <div class="row form-group">  
              <div class="col col-md-4">
                <label for="select" class=" form-control-label">Date Of Challan</label>
              </div>
              <div class="col-6 col-md-8">
                <label for="selefluidepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                <div class="input-group ">
                  <input class="form-control form-control-user date-form datepicker" autocomplete="off" type="text" name="date" placeholder="Date">
                  <span class="input-group-addon align-items-center d-flex text-center dpick"><i class="fa fa-calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-4">
                  <label for="select" class=" form-control-label">Comment</label>
                </div>
                <div class="col-6 col-md-8">
                    <textarea class="form-control" name="comment" rows="3" required="true"></textarea>
                </div>
            </div>

     
            <div class="row form-group">
              <div class="col col-md-4">
                <label for="select" class=" form-control-label">Upload Document</label>
              </div>
              <div class="col-12 col-md-8">
                <input type="file" name="image" required="true"> 
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn1">
             SAVE
            </button>
          </form>
        
                  
        </div>
      </div>
    </div>
  </div>
</div>
@endsection