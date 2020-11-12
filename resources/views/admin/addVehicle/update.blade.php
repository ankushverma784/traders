@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
   <div class="row">
      <div class="col-lg-12">
         <div class="card update-form">
            <div class="card-header">
               <h3 class="text-center title-2"> Update Vehicle Data</h3>
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
            </div>
            <div class="card-body card-block">
               <form action="{{ route('admin.addVehicle.update',$addVehicle->id) }} " method="post" class="form-horizontal">
                  @csrf
                  @method('PUT') 
                  <div class="row form-group">
                     <div class="col col-md-4">
                        <label for="select" class=" form-control-label">Select Vehicle</label>
                     </div>
                     <div class="col-12 col-md-8">
                        <input type="text" class="form-control" required="true" name="vehicle_no" value="{{ $addVehicle->vehicle_no }}" disabled="">
                        <!-- <select name="vehicle_no" id="select" class="form-control" required="true">
                           <option id="submitvehicle" selected="true">Choose Vehicle</option>
                                                                    
                           </select> -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col col-md-4">
                        <label for="select" class=" form-control-label">Insurance</label>
                     </div>
                     <div class="col-12 col-md-4 date-padding">
                        <div class="form-group ">
                           <div class="input-group" data-date-format="dd-mm-yyyy">
                              <input class="form-control form-control-user date-form datepicker" autocomplete ="off" type="text" name="i" placeholder="Start Date" required="">
                              <span class="input-group-addon date-form-addon align-items-center d-flex text-center dpick "><i class="fa fa-calendar"></i></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 date-padding">
                        <div class="form-group">
                           <div class="input-group " data-date-format="dd-mm-yyyy">
                              <input class="form-control form-control-user date-form datepicker" autocomplete ="off" type="text" name="insuranceRem_days" placeholder="End Date" required="">
                              <span class="input-group-addon date-form-addon align-items-center d-flex text-center dpick  "><i class="fa fa-calendar"></i></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col col-md-4">
                        <label for="select" class=" form-control-label">Fittness</label>
                     </div>
                     <div class="col-12 col-md-4 date-padding">
                        <div class="form-group">
                           <div class="input-group " data-date-format="dd-mm-yyyy">
                              <input class="form-control form-control-user date-form datepicker" autocomplete ="off" type="text" name="f" placeholder="Start Date" required="">
                              <span class="input-group-addon date-form-addon align-items-center d-flex text-center dpick  "><i class="fa fa-calendar"></i></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 date-padding">
                        <div class="form-group">
                           <div class="input-group " data-date-format="dd-mm-yyyy">
                              <input class="form-control form-control-user date-form datepicker" autocomplete ="off" type="text" name="fitnessRem_days" placeholder="End Date" required="">
                              <span class="input-group-addon date-form-addon align-items-center d-flex text-center dpick  "><i class="fa fa-calendar"></i></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col col-md-4">
                        <label for="select" class=" form-control-label">Permit</label>
                     </div>
                     <div class="col-12 col-md-4 date-padding">
                        <div class="form-group">
                           <div class="input-group " data-date-format="dd-mm-yyyy">
                              <input class="form-control form-control-user date-form datepicker" autocomplete ="off" type="text" name="p" placeholder="Start Date" required="">
                              <span class="input-group-addon date-form-addonalign-items-center d-flex text-center dpick "><i class="fa fa-calendar"></i></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 date-padding">
                        <div class="form-group">
                           <div class="input-group " data-date-format="dd-mm-yyyy">
                              <input class="form-control form-control-user date-form datepicker" autocomplete ="off" type="text" name="permitRem_days" placeholder="End Date" required="">
                              <span class="input-group-addon date-form-addon align-items-center d-flex text-center dpick "><i class="fa fa-calendar"></i></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-4">
                        <label for="select" class=" form-control-label">Pollutioin</label>
                     </div>
                     <div class="col-12 col-md-4 date-padding">
                        <div class="form-group">
                           <div class="input-group " data-date-format="dd-mm-yyyy">
                              <input class="form-control form-control-user date-form datepicker" autocomplete ="off" type="text" name="p1" placeholder="Start Date" required="">
                              <span class="input-group-addon date-form-addon align-items-center d-flex text-center dpick "><i class="fa fa-calendar"></i></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-4 date-padding">
                        <div class="form-group">
                           <div class="input-group" >
                              <input class="form-control form-control-user date-form datepicker" autocomplete ="off" type="text" name="pollutionRem_days" placeholder="End Date" required="">
                              <span class="input-group-addon date-form-addon align-items-center d-flex text-center dpick "><i class="fa fa-calendar"></i></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn1">
                  SAVE
                  </button><br><br>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection