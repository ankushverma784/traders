@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
   <div class="card update-form">
      <div class="card-header">
         <h3 class="text-center title-2 font-weight-bold">Add Vehicle</h3>
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
            <span>{{ $message }}</span>
         </div>
         @endif
      </div>
   </div>
   <div class="card">
      <div class="card-body mb-5">
         <form action="{{ route('admin.addVehicle.store') }}" method="POST" >
            @csrf
            <div class="form-group">
               <label class="control-label mb-1">Vehicle Number</label>
               <input type="text" class="form-control" name="vehicle_no" placeholder="Enter Your Vehicle Number" required="true">
            </div>
            <input type="hidden" class="form-control"  name="insuranceRem_days" value ="" >
            <input type="hidden" class="form-control"  name="fitnessRem_days" value ="" >
            <input type="hidden" class="form-control"  name="permitRem_days" value ="" >
            <input type="hidden" class="form-control"  name="pollutionRem_days" value ="" >
            <button type="submit" name="submit" class="btn btn1">
            Add Vehicle
            </button>                                        
         </form>
      </div>
      <div class="card update-form">
         <div class="card-header">
            <h3 class="text-center title-2 font-weight-bold">Challan</h3>
         </div>
      </div>
      <br>
      <div class="col-lg-12">
         <div class="table-responsive table--no-card m-b-40">
            <table class="table table-bordered text-center userdatatables">
               <thead class="btn1" >
                  <tr>
                     <th>Sl No.</th>
                     <th  width ='130px'>Vehicle No.</th>
                     <th>Insurance Date</th>
                     <th>Fitness Date</th>
                     <th>Permitt Date</th>
                     <th>Pollution Date</th>
                     <th width ='155px'>Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($addVehicle as $addy)
                  <td>{{$addy->id }}</td>
                  <td>{{$addy->vehicle_no }}</td>
                  <!-- <td>{{$addy->insuranceRem_days }}</td> -->
                  @if ($addy->insuranceRem_days != null)
                  <td>{{$addy->insuranceRem_days }}</td>
                  @else
                  <td>N/A</td>
                  @endif
                  @if ($addy->fitnessRem_days != null)
                  <td>{{$addy->fitnessRem_days }}</td>
                  @else
                  <td>N/A</td>
                  @endif
                  @if ($addy->permitRem_days != null)
                  <td>{{$addy->permitRem_days }}</td>
                  @else
                  <td>N/A</td>
                  @endif
                  @if ($addy->pollutionRem_days != null)
                  <td>{{$addy->pollutionRem_days }}</td>
                  @else
                  <td>N/A</td>
                  @endif
                  <!-- <td>{{$addy->fitnessRem_days }}</td> -->
                  <!-- <td>{{$addy->permitRem_days }}</td>
                     <td>{{$addy->pollutionRem_days }}</td> -->
                  <td>
                     <form action="{{ route('admin.addVehicle.destroy',$addy->id) }}" method="POST"> 
                        <a class="btn btn-primary" href="{{ route('admin.addVehicle.edit',$addy->id) }}" >Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                     </form>
                  </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         <br><br>
      </div>
   </div>
</div>
@endsection