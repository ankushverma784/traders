@extends('layouts.admin')
@section('content')
<div class="container mmt">
   <div class="card shadow mb-4 datatable-card mmt">
      <div class="card-header py-3">
         <h3 class="mb-4 font-weight-bold ml-sm-1">Customer Transaction History</h3>
         <form action="" method="POST">
            <div class="form-row align-items-center">
               <div class="col-md-3">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Enter Customer Mobile</label>
                  <input id="email" type="text" class="form-control" name="mobile" placeholder="Enter Mobile No">
               </div>
               <div class="col-md-3">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">From Date</label>
                  <div class="input-group date datepicker" data-date-format="dd-mm-yyyy">
                     <input class="form-control form-control-user date-form" type="text" name="from" placeholder="Enter From Date" required="">
                     <span class="input-group-addon date-form-addon align-items-center d-flex pl-1"><i class="fa fa-calendar"></i></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">To Date</label>
                  <div class="input-group date datepicker" data-date-format="dd-mm-yyyy">
                     <input class="form-control form-control-user date-form" type="text" name="to" placeholder="Enter To Date" required="">
                     <span class="input-group-addon date-form-addon align-items-center d-flex pl-1"><i class="fa fa-calendar"></i></span>
                  </div>
               </div>
               <div class="col-md-3 mt-lg-auto mb-lg-1 mt-md-auto mb-md-1 mt-sm-4">
                  <button type="submit" class="btn btn1" name="submit">Search</button>
               </div>
            </div>
         </form>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table id="example_trans" class="table table-striped table-bordered" width="100%" cellspacing="0">
               <thead>
               </thead>
               <tbody>
                  <!-- END DATA TABLE -->
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
