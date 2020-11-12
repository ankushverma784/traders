@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
  
  <!-- DATA TABLE -->
  <div class="card shadow mb-4 datatable-card" id="card">
    <div class="card-header py-3">
      <h3 class="mb-4 font-weight-bold ml-sm-1">List Of Customer</h3>
      @if ($message = Session::get('success'))
               <div class="alert alert-success">
                     <span>{{ $message }}</span>
               </div>
            @endif
      <h4 class="badge-danger text-center" id="delete_msg"></h4>
  
    </div>
    <div class="card-body" id="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="dataTable_length">
              
              </div>
            </div>
           
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-bordered text-center dataTable no-footer userdatatables" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                <thead class="btn1"> 
                  <tr role="row">
                    <th >Sl No</th>
                    <th>Phone No</th>
                    <th>Customer Name</th>
                    <th>City</th>
                    <th>Address</th>
                    <th style="width: 120px;">Material</th>
                    <!-- <th>Material Type</th>
                    <th>quantity Type</th> -->
                    <!-- <th>Min Price</th>
                    <th>Max Price</th> -->
                    <th width="200px">Action</th>
                  </tr>
                </thead>
                <tbody id="table-body">
                  <!-- SEARCH CUSTOMER TABLE-->
                  <!-- ALL CUSTOMERS TABLE-->
                  <tr role="row" class="odd">
                  @foreach ($agreement as $agree)
                  <td>{{ $agree->id }}</td>
                  <td>{{ $agree->mobile }}</td>
                  <td>{{ $agree->name }}</td>
                  <td>{{ $agree->city }}</td>
                  <td>{{ $agree->address }}</td>
                  <td><div style="width:300px;">{{ $agree->select_material }}</div></td>
                  <!-- <td>{{ $agree->material_type }}</td>
                  <td>{{ $agree->quantity_type }}</td> -->
                  <!-- <td>{{ $agree->min_rate }}</td>
                  <td>{{ $agree->max_rate }}</td> -->

                  <td>
                      <form action="{{ route('admin.agreement.destroy',$agree->id) }}" method="POST">
        
                          <!-- <a class="btn btn-info" href="{{ route('admin.agreement.show',$agree->id) }}">Show</a> -->
          
                          <a class="btn btn-primary" href="{{ route('admin.agreement.edit',$agree->id) }}">Edit</a>
        
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