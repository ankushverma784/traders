@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="title-1 m-b-25 font-weight-bold mb-5">Manage Challan</h2>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                  <span>{{ $message }}</span>
            </div>
        @endif
      <div class="table-responsive table--no-card m-b-40">
        <table class="table table-bordered text-center userdatatables">
          <thead class="btn1 ">
            <tr>
              <th>Sl No</th>
              <th>Vehicle No</th>
              <th>Challan Comment</th>
              <th>Challan Image</th> 
              <th>Challan Date</th>
              <th>Action</th>
            </tr>
          </thead>
              @foreach ($challan as $item)             
                <tr>
                  <td>{{$item->id }}</td>   
                  <td>{{$item->vehicle_no }}</td>
                  <td>{{$item->comment }}</td>
                  <!-- <td>{{$item->image }}</td> -->
                  <!-- {{$image = $item->image}} -->
                  <td> <img src="{{ asset('/challan_imgs/' . $item->image) }}" /> </td>

                  <td>{{$item->date }}</td>
                  <td>
                    <form action="{{ route('admin.challan.destroy',$item->id) }}" method="POST"> 
                    <a class="btn  btn-outline-success" href="{{ route('admin.challan.show',$item->id) }}">Paid</a>
                     
                     <a class="btn btn-outline-warning" href="{{ route('admin.challan.edit',$item->id) }}">Unpaid</a>
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection