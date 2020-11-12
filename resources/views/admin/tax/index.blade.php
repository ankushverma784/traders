@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
  <div class="row mb-5">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center title-2 font-weight-bold"> Advance Tax</h3>
     
          @if ($message = Session::get('success'))
               <div class="alert alert-success">
                     <span>{{ $message }}</span>
               </div>
            @endif
        </div>
        <div class="card-body">
          <form action="{{ route('admin.tax.store') }}" method="post">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" required="true">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAmount">Amount</label>
                <input type="number" class="form-control" id="inputAmount" placeholder="Amount" name="amount" required="true">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputDate">Date</label>
                <div class="input-group date" data-provide="" style="padding:0px;" data-date-format="dd-mm-yyyy">
                  <input class="form-control form-control-user datepicker" autocomplete="off" type="text" placeholder="Date" name="date" >
                  <span class="input-group-addon align-items-center d-flex text-center dpick"><i class="fa fa-calendar"></i></span>
                </div>
              </div>

            </div>
            <div class="row form-group">
              <div class="col-lg-12 col-md-8">
                <label for="select" class=" form-control-label">Description</label>
                <textarea class="form-control" id="comment" name="description" rows="3" placeholder="Type Here...."></textarea>
              </div>
            </div>



            <button type="submit" class="btn btn1" name="submit">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<div class="row m-auto">
  <div class="col-lg-12 m-auto">
    <h2 class="title-1 m-b-25">All Taxes</h2>
    <div class="table-responsive table--no-card m-b-40">
      <table class="table table-bordered text-center userdatatables">
        <thead class="btn1">
          <tr>
            <th>Sl No</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($tax as $tst)
          <tr>
            <td>{{ $tst->id }}</td>
            <td>{{ $tst->name }}</td>
            <td>{{ $tst->amount }}</td>
            <td>{{ $tst->description }}</td>
            <td>{{ $tst->date }}</td>
            
            <td>
              <form action="{{ route('admin.tax.destroy',$tst->id) }}" method="POST"> 

                  <!-- <a class="btn btn-info" href="{{ route('admin.tax.show',$tst->id) }}">Show</a>
  
                  <a class="btn btn-primary open" href="{{ route('admin.tax.edit',$tst->id) }}">Edit</a> -->

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


@endsection