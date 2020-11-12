@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
   <!-- DATA TABLE -->
   <div class="card shadow mb-4 datatable-card">
      <div class="card-header py-3">
         <h3 class="mb-4 font-weight-bold ml-sm-1">Manage Purchase</h3>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
             
               <div class="row">
                  <div class="col-sm-12">
                     <table class="table table-bordered text-center userdatatables">
                        <thead class="btn1">
                           <tr role="row">
                              <th>Date</th>
                              <th>Bill No</th>
                              <th>Phone No</th>
                              <th>Name</th>
                              <th>City</th>
                              <!-- <th>State</th>
                              <th>Address</th>
                              <th>Edit</th>
                              <th>Delete</th> -->
                           </tr>
                        </thead>
                        <tbody>
                           <!-- SEARCH CUSTOMER TABLE-->
                           <!-- ALL CUSTOMERS TABLE-->
                              @foreach ($purchase as $guest)
                           <tr >
                              
                                 <td>{{ $guest->id }}</td>
                                 <td>{{ $guest->mobile }}</td>
                                 <td>{{ $guest->bill_no }}</td>
                                 <td>{{ $guest->material_name }}</td>
                                 <td>{{ $guest->payment_amount }}</td>
                                 <td>
                                    <form action="{{ route('admin.purchase.destroy',$guest->id) }}" method="POST">
                     
                        
                                       <a class="btn btn-primary" href="{{ route('admin.purchase.edit',$guest->id) }}">Edit</a>
                     
                                       @csrf
                                       @method('DELETE')
                           
                                       <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                              </tr>
                              @endforeach

                           <!-- <tr role="row" class="odd">
                              <td class="sorting_1">2020-10-09</td>
                              <td>7055572245</td>
                              <td>9536087919</td>
                              <td>test</td>
                              <td>dehradun 1</td>
                              <td>Uttarakhand</td>
                              <td>Dehradun</td>
                              <td><a href="edit-supplier-purchase.php?purchase_id=3"><i class="fa fa-edit font-aw"></i></a></td>
                              <td><a href="delete.php?agree_id=3"><i class="fas fa-trash-alt"></i></a></td>
                           </tr> -->
                        
                       
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