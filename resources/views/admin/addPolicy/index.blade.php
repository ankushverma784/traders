@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
  <div class="row mb-5">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center title-2 font-weight-bold"> Add Policy</h3>
          @if ($message = Session::get('success'))
               <div class="alert alert-success">
                     <span>{{ $message }}</span>
               </div>
            @endif
        </div>
        <div class="card-body">
          <form action="{{ route('admin.addPolicy.store') }}" method="post">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control"  placeholder="Name" name="name" required="true">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAmount">Amount</label>
                <input type="number" class="form-control"  placeholder="Amount" name="amount" required="true">
              </div>
            </div>
            <div class="form-row">
              
              <div class="form-group col-md-6">
                <label for="inputPolicyNo">Policy Number</label>
                <input type="text" class="form-control"  placeholder="Policy Number" name="policy_no" required="true">
              </div>
              <div class="form-group col-md-6">
                <label for="inputDate">Due Date</label>
                <div class="input-group" >
                  <input class="form-control form-control-user datepicker" autocomplete="off" type="text" name="date" placeholder="Date" >
                  <span class="input-group-addon date-form-addon align-items-center d-flex text-center dpick "><i class="fa fa-calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPolicyName">Policy Name</label>
              <input type="text" class="form-control" placeholder="Eg. Premium Policy" name="ploicy_name" required="true">
            </div>
            <button type="submit" class="btn btn1" name="submit">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row m-auto">
    <div class="col-lg-12 m-auto">
      <h2 class="title-1 m-b-25 font-weight-bold">All Policies</h2>
      <div class="table-responsive table--no-card m-b-40">
        <table class="table table-bordered text-center userdatatables">
          <thead class="btn1">
            <tr>
              <th>Sl No.</th>
              <th>Name</th>
              <th>Amount</th>
              <th>Due Date</th>
              <th>Policy No</th>
              <th>Policy Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($policy as $poly)
            <tr>
              <td>{{$poly->id }}</td>
              <td>{{$poly->name }}</td>
              <td>{{$poly->amount }}</td>
              <td>{{$poly->date }}</td>
              <td>{{$poly->policy_no }}</td>
              <td>{{$poly->ploicy_name }}</td>
              
              <td>
                <form action="{{ route('admin.addPolicy.destroy',$poly->id) }}" method="POST"> 
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <br><br>
      </div>
    </div>
  </div>
</div>
</div>
@endsection