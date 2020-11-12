@extends('layouts.admin')
@section('content')
<div class="container mmt">
   <!-- DATA TABLE -->
   <div class="card shadow mb-4 datatable-card">
      <div class="card-header py-3">
         <h3 class="mb-4 font-weight-bold ml-sm-1">Manage Sale </h3>
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
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
               <div class="row">
                  <div class="col-sm-12 col-md-6">
                     <div class="dataTables_length" id="dataTable_length">
                        <label>
                           Show 
                           <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                           </select>
                           entries
                        </label>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                     <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <table class="table table-bordered text-center dataTable no-footer" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                        <thead class="btn1">
                           <tr role="row">
                              <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 106.583px;" aria-sort="ascending" aria-label="Date: activate to sort column descending">Phone No</th>
                              <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 125.783px;" aria-label="Name: activate to sort column ascending">Name</th>
                              <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 175.683px;" aria-label="Phone No: activate to sort column ascending">Address</th>
                              <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 96.3833px;" aria-label="City: activate to sort column ascending">City</th>
                              <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 114.817px;" aria-label="State: activate to sort column ascending">Gst</th>
                              <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 91.25px;" aria-label="Edit: activate to sort column ascending">Aadhar</th>
                              <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 130.5px;" aria-label="Delete: activate to sort column ascending">Pan No</th>

                              {{-- <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 130.5px;" aria-label="Delete: activate to sort column ascending">Delete</th> --}}
                           </tr>
                        </thead>
                        <tbody>
                           <!-- SEARCH CUSTOMER TABLE-->
                           <!-- ALL CUSTOMERS TABLE-->
                           <tr class="odd">
                              <td colspan="7" class="dataTables_empty" valign="top">No data available in table</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 col-md-5">
                     <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                     <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                        <ul class="pagination">
                           <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                           <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END DATA TABLE -->
</div>
</div>
@endsection