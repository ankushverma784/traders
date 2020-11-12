@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
<!-- DATA TABLE -->
<div class="card shadow mb-4 datatable-card">
  <div class="card-header py-3">
           <h3 class="mb-4 font-weight-bold ml-sm-1">Manage Suppliers</h3>
           @if ($message = Session::get('success'))
               <div class="alert alert-success">
                     <span>{{ $message }}</span>
               </div>
            @endif
        </div>
  <div class="card-body">
    <div class="table-responsive">
      <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
      
                
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-bordered dataTable no-footer userdatatables" >
              <thead class="btn1">
                <tr role="row">
                  <th>Sl No.</th>
                  <th>Mobile</th>
                  <th>Customer Name</th>
                  <th>City</th>
                  <th>Address</th>
                  <th width="150px">Action</th>
                </tr>
              </thead>
              <tbody id="table-body">
                             <!-- SEARCH CUSTOMER TABLE-->
                             <!-- ALL CUSTOMERS TABLE-->
                             @foreach ($suplier as $guest)
                             <tr>
                                <td>{{ $guest->id }}</td>
                                <td>{{ $guest->mobile }}</td>
                                <td>{{ $guest->name }}</td>
                                <td>{{ $guest->city }}</td>
                                <td>{{ $guest->address }}</td>
                             <td>
                                 <form action="{{ route('admin.suplier.destroy',$guest->id) }}" method="POST"> 
                    
                     
                                     <a class="btn btn-primary" href="{{ route('admin.suplier.edit',$guest->id) }}" >Edit</a>
                    
                                     @csrf
                                     @method('DELETE')
                       
                                     <button type="submit" class="btn btn-danger">Delete</button>
                                 </form>
                             </td>


                             @endforeach
                          </tbody>

              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END DATA TABLE -->
</div>

@endsection