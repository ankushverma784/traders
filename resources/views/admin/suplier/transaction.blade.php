@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
   <!-- DATA TABLE -->
   <div class="card shadow mb-4 datatable-card">
      <div class="card-header py-3">
         <h3 class="mb-4 font-weight-bold  ml-sm-1">Supplier Transactions</h3>
         <form action="" method="POST">
            <div class="form-row align-items-center">
               <div class="col-md-3">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Enter Customer Mobile</label>
                  <input id="email" type="text" class="form-control" name="mobile" placeholder="Enter Mobile No">
               </div>
               <div class="col-md-3">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">From Date</label>
                  <div class="input-group " data-date-format="dd-mm-yyyy">
                     <input class="form-control form-control-user date-form datepicker" autocomplete="off" type="text" name="from" placeholder="Enter From Date" required="">
                     <span class="input-group-addon date-form-addon align-items-center d-flex pl-1"><i class="fa fa-calendar"></i></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">To Date</label>
                  <div class="input-group " data-date-format="dd-mm-yyyy">
                     <input class="form-control form-control-user date-form datepicker" autocomplete="off" type="text" name="to" placeholder="Enter To Date" required="">
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
                  <div class="col-sm-12">
                     <table class="table table-bordered text-center userdatatables">
                        <thead class="btn1">
                           <tr role="row " style="text-align: left;">
                              <th style="width:70px;">Date</th>
                              <th>Material</th>
                              <th>Material Type</th>
                              <th>Unit Type</th>
                              <th>Unit Price</th>
                              <th>Quantity</th>
                              <th>SGST</th>
                              <th>Tax Amount</th>
                              <th>Price</th>
                              <th>Paid</th>
                              <th>Balance</th>
                           </tr>
                        </thead>
                        <tbody>
                           <!-- SEARCH CUSTOMER TABLE-->
                           <!-- ALL CUSTOMERS TABLE-->
                           <tr role="row " style="text-align: left;">
                              <td>12 Oct 2020</td>
                              <td>CEMENT</td>
                              <td>Ambuja Cement</td>
                              <td>Bag</td>
                              <td>	Rs. 100</td>
                              <td>1</td>
                              <td>	30%</td>
                              <td>Rs. 30</td>
                              <td>Rs. 130</td>
                              <td></td>
                              <td></td>
                           </tr>
                           <tr role="row " style="text-align: left;" >
                              <td>12-Oct-2020</td>
                              <td colspan=7>Delivery Charges</td>
                              
                              <td>Rs. 0</td>
                              <td rowspan=4></td>
                              <td rowspan=4></td>
                             
                           </tr>
                           <tr role="row " style="text-align: left;" >
                              <td>12-Oct-2020</td>
                              <td colspan=7>Other Charges</td>
                              
                              <td>Rs. 0</td>
                             
                           </tr>
                           <tr role="row " style="text-align: left;" >
                              <td>12-Oct-2020</td>
                              <td colspan=7>Loading Charges</td>
                              
                              <td>Rs. 0</td>
                             
                           </tr>
                           <tr role="row " style="text-align: left;">
                              <td>12-Oct-2020</td>
                              <td colspan=7>Total Tax</td>
                              
                              <td>Rs. 0</td>
                             
                           </tr>
                           <tr role="row " style="text-align: left;" >
                              <td>12-Oct-2020</td>
                              <td colspan=7>Total Amount</td>
                              
                              <td>Rs. 0</td>
                              <td></td>
                              <td></td>

                             
                           </tr>
                           <tr role="row " style="text-align: left;" >
                              <td>12-Oct-2020</td>
                              <td colspan=7> 
                                       <div style="float: left;">
                                          <h5>Payment Type:</h5>Cash(Amount:1200) 
                                       </div> 
                                       <div style="float: right;">
                                          <h6> Purchase By:</h6> name
                                       </div>
                              </td>
                              
                              <td></td>
                              <td>1200</td>
                              <td>200</td>
                             
                           </tr>

                           		 			

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END DATA TABLE -->
</div>
@endsection