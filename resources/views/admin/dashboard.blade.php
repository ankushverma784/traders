@extends('layouts.admin')
@section('content')

<section id="home-page" class="section-padding">
  <div class="container">
  <div class="row">
    <div class="col-lg-12 pb-4">
      <div class="section-heading mb-4">
        <h2>Dashboard <small>CONTROL PANEL</small></h2>
      </div>
      <div class="row">
        <div class="col-lg-5">
          <a href="moversresult.php">
            <div class="dashboard-details">
              <div class="dashboard-content">
                <div class="d-flex">
                  <div class="dashboard-img">
                    <img src="../assets/admin/images/delivery-truck.svg"/>   
                  </div>
                  <div class="dashboard-txt ml-3">
                    <h3 class="txtclr">Total Vehicle</h3>
                    <p>4</p>
                  </div>
                </div>
              </div>
          </a>
          <div class="bg-dashboard">
          <a href="moversresult.php">View All</a>
          </div>  
          </div>
        </div>
        <div class="col-lg-5">
          <a href="customersresult.php">
            <div class="dashboard-details">
              <div class="dashboard-content">
              <div class="d-flex">
                  <div class="dashboard-img">
                     <img src="../assets/admin/images/challan.svg"/>   
                  </div>
                  <div class="dashboard-txt ml-3">
                      <h3>Total challan</h3>
                      <p>10</p>
                  </div>
              </div> 
           </div>
          </a>
          <div class="bg-dashboard">
          <a href="customersresult.php">View All</a>
          </div>  
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 py-4">
      <div class="section-heading mb-4">
        <h2>Records <small>View All records</small></h2>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <a href="newenquiry.php">
            <div class="dashboard-details">
              <div class="dashboard-content">
                <div class="d-flex">
                  <div class="dashboard-img">
                    <img src="../assets/admin/images/s3.svg"/>   
                  </div>
                  <div class="dashboard-txt ml-3">
                    <h3 class="txtclr">Insurance</h3>
                    <p>20</p>
                  </div>
                </div>
              </div>
          </a>
          <div class="bg-dashboard">
          <a href="newenquiry.php">View All</a>
          </div>  
          </div>
        </div>
        <div class="col-lg-3">
          <a href="live-leads.php">
            <div class="dashboard-details">
              <div class="dashboard-content">
                <div class="d-flex">
                  <div class="dashboard-img">
                    <img src="../assets/admin/images/s2.svg"/>   
                  </div>
                  <div class="dashboard-txt ml-3">
                    <h3 class="txtclr">Permit</h3>
                    <p>20</p>
                  </div>
                </div>
              </div>
          </a>
          <div class="bg-dashboard">
          <a href="live-leads.php">View All</a>
          </div>  
          </div>
        </div>
        <div class="col-lg-3">
          <a href="expiredleads.php">
            <div class="dashboard-details">
              <div class="dashboard-content">
                <div class="d-flex">
                  <div class="dashboard-img">
                    <img src="../assets/admin/images/pollution.svg"/>   
                  </div>
                  <div class="dashboard-txt ml-3">
                    <h3 class="txtclr" >Pollution</h3>
                    <p>20</p>
                  </div>
                </div>
              </div>
          </a>
          <div class="bg-dashboard">
          <a href="expiredleads.php">View All</a>
          </div>  
          </div>
        </div>
        <div class="col-lg-3">
          <a href="rejectedleads.php">
            <div class="dashboard-details">
              <div class="dashboard-content">
                <div class="d-flex">
                  <div class="dashboard-img">
                    <img src="../assets/admin/images/approval-service.svg"/>   
                  </div>
                  <div class="dashboard-txt ml-3">
                    <h3 class="txtclr">Fitness</h3>
                    <p>4</p>
                  </div>
                </div>
              </div>
          </a>
          <div class="bg-dashboard">
          <a href="rejectedleads.php">View All</a>
          </div>  
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 py-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="dashboard-details">
            <div class="section-heading top">
              <h1 class="pddtop">Fitness</h1>
            </div>
            <div class=" container table-responsive table--no-card m-b-40" id="" style="font-size: 13px;">
              <table id="" class="table table-bordered dt-responsive nowrap userdatatables">
                <thead class="txtclr">
                  <tr>
                    <th>V.No.</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Remaining Days</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>1401</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>UK07CC2099</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>dsfsdf</td>
                    <td>19-10-2020</td>
                    <td>21-10-2020</td>
                    <td>9 Days</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="dashboard-details">
            <div class="section-heading top">
              <h1 class="pddtop" >Permit</h1>
            </div>
            <div class=" container table-responsive table--no-card m-b-40" id="" style="font-size: 13px;">
              <table id="" class="table table-bordered dt-responsive nowrap userdatatables">
                <thead class="txtclr" >
                  <tr>
                    <th>V.No.</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Remaining Days</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>1401</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>UK07CC2099</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>dsfsdf</td>
                    <td>19-10-2020</td>
                    <td>21-10-2020</td>
                    <td>9 Days</td>
                  </tr>
                </tbody>
              </table>
              {{-- <div class="row">
                <div class="col-sm-12 col-md-5">
                   <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                   <div class="dataTables_paginate paging_simple_numbers pgtbl"  id="dataTable_paginate">
                      <ul class="pagination">
                         <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                         <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                         <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                      </ul>
                   </div>
                </div>
             </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 py-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="dashboard-details">
            <div class="section-heading top">
              <h1 class="pddtop" >Insurance</h1>
            </div>
            <div class=" container table-responsive table--no-card m-b-40" id="" style="font-size: 13px;">
              <table id="" class="table table-bordered dt-responsive nowrap userdatatables">
                <thead class="txtclr">
                  <tr>
                    <th>V.No.</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Remaining Days</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>1401</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>UK07CC2099</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>dsfsdf</td>
                    <td>19-10-2020</td>
                    <td>21-10-2020</td>
                    <td>9 Days</td>
                  </tr>
                </tbody>
              </table>
              {{-- <div class="row">
                <div class="col-sm-12 col-md-5">
                   <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                   <div class="dataTables_paginate paging_simple_numbers pgtbl"  id="dataTable_paginate">
                      <ul class="pagination">
                         <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                         <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                         <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                      </ul>
                   </div>
                </div>
             </div> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="dashboard-details">
            <div class="section-heading top">
              <h1 class=" pddtop" >Pollution</h1>
            </div>
            <div class=" container table-responsive table--no-card m-b-40" id="" style="font-size: 13px;">
              <table id="" class="table table-bordered dt-responsive nowrap userdatatables">
                <thead class="txtclr">
                  <tr>
                    <th>V.No.</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Remaining Days</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>1401</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>UK07CC2099</td>
                    <td>00-00-0000</td>
                    <td>00-00-0000</td>
                    <td> Days</td>
                  </tr>
                  <tr>
                    <td>dsfsdf</td>
                    <td>19-10-2020</td>
                    <td>21-10-2020</td>
                    <td>9 Days</td>
                  </tr>
                </tbody>
              </table>
              {{-- <div class="row">
                <div class="col-sm-12 col-md-5">
                   <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                   <div class="dataTables_paginate paging_simple_numbers pgtbl"  id="dataTable_paginate">
                      <ul class="pagination">
                         <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                         <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                         <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                      </ul>
                   </div>
                </div>
             </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 py-4">
      <div class="dashboard-details">
        <div class="section-heading top">
          <h1 class="pddtop">Challan</h1>
        </div>
        <div class=" container table-responsive table--no-card m-b-40" id="" style="font-size: 13px;">
          <table id="" class="table table-bordered dt-responsive nowrap userdatatables">
            <thead class="txtclr">
              <tr>
                <th>V.NO</th>
                <th>Start Date</th>
                <th>Challan Date</th>
                <th>Challan Status</th>
                <th>Action</th>
                <th>Document</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Example</td>
                <td>Lorem ipsum</td>
                <td>Lorem ipsum ipsum</td>
                <td><span class="text-success">Paid</span></td>
                <td>Enabled</td>
              </tr>
              <tr>
                <td>06</td>
                <td>Example</td>
                <td>Lorem ipsum</td>
                <td>Lorem ipsum ipsum</td>
                <td><span class="color3">UnPaid</span></td>
                <td>Enabled</td>
              </tr>
              <tr>
                <td>07</td>
                <td>Example</td>
                <td>Lorem ipsum</td>
                <td>Lorem ipsum ipsum</td>
                <td><span class="text-success">Paid</span></td>
                <td>Enabled</td>
              </tr>
            </tbody>
          </table>
          {{-- <div class="row">
            <div class="col-sm-12 col-md-5">
               <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
               <div class="dataTables_paginate paging_simple_numbers pgtbl"  id="dataTable_paginate">
                  <ul class="pagination">
                     <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                     <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                     <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                  </ul>
               </div>
            </div>
         </div> --}}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection