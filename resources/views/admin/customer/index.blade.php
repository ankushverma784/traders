@extends('layouts.admin')
@section('content')

<div class="mmt ">
  <div class="container-fluid">
     <!-- DATA TABLE -->
     <div class="card shadow mb-4 datatable-card" id="card">
        <div class="card-header py-3">
           <h3 class="mb-4 font-weight-bold ml-sm-1">Manage Customers</h3>
           @if ($message = Session::get('success'))
               <div class="alert alert-success">
                     <span>{{ $message }}</span>
               </div>
            @endif
        </div>
        <div class="card-body" id="card-body">
           <div class="table-responsive">
              <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        
                 <div class="row">
                    <div class="col-md-12" >
                       <table class="table table-bordered text-center userdatatables">
                          <thead class="btn1">
                             <tr style="width: 70px;">
                                <th style="width: 70px;">Sl No.</th>
                                <th style="width: 70px;">Phone No</th>
                                <th style="width: 130px;">Customer Name</th>
                                <th style="width: 70px;">City</th>
                                <th style="width: 70px;">Gst</th>
                                <th style="width: 70px;">Address</th>
                                <th style="width: 70px;">Aadhar</th>
                                <th style="width: 70px;">Pan No</th>
                                <th width="200px">Action</th>
                             </tr>
                          </thead>
                          <tbody id="table-body">
                             <!-- SEARCH CUSTOMER TABLE-->
                             <!-- ALL CUSTOMERS TABLE-->
                             @foreach ($customer as $guest)
                             <tr>
                                <td>{{ $guest->id }}</td>
                                <td>{{ $guest->mob_no }}</td>
                                <td>{{ $guest->customer_name }}</td>
                                <td>{{ $guest->city }}</td>
                                <td>{{ $guest->gst_no }}</td>
                                <td>{{ $guest->address }}</td>
                                <td>{{ $guest->aadhar_no }}</td>
                                <td>{{ $guest->pan_no }}</td>
                                <td>
                                 <form action="{{ route('admin.customer.destroy',$guest->id) }}" method="POST"> 
                    
                                     <a class="btn btn-info" href="{{ route('admin.customer.show',$guest->id) }}">Show</a>
                     
                                     <a class="btn btn-primary open" href="{{ route('admin.customer.edit',$guest->id) }}">Edit</a>
                    
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
                 </div>
          
              </div>
           </div>
        </div>
     </div>
     <!-- END DATA TABLE -->
  </div>
</div>
@endsection
