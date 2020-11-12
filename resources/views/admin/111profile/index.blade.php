@extends('layouts.admin')
@section('content')

<div class="mmt ">
  <div class="container">
     <!-- DATA TABLE -->
     <div class="card shadow mb-4 datatable-card" id="card">
        <div class="card-header py-3">
            <h3 class="mb-4 font-weight-bold ml-sm-1" style="float: left;">User Profile</h3>
        <a class="btn btn1" style="float:right;" href="{{url('admin')}}">Back</a>
               
        </div>
        <div class="card-body" id="card-body">
                    <div class="container">
                       <div class="row">
                          <div class="col-lg-12 profile-forms">
                             <div class="activity-service">
                                <div class="service-content">
                                   <div class="profile-form">
                                      <div class="section-content">
                                         <form action="{{ route('user-profile-information.update',$user->id) }}" method="post">
                                           @csrf
                                           {{-- @method('PUT') --}}
                                            <div class="row">
                                               <div class="col-lg-3">
                                                  <p class="formheading">Product Image</p>
                                                  <div class="profile-upload">
                                                     <div class="card card-body view file-upload mt-0">
                                                        <img class="addimage" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                                                        <a href="#" id="imgUpd"class="image-action add-image"><input type="file" accept="image/*" name="image" class="uploadprofile"><i class="fas fa-pencil-alt"></i></a>
                                                     <a href="#" class="image-action remove-image"><i class="fas fa-times"></i></a>
                                                     </div>
                                                     
                                                  </div>
                                               </div>
                                               <div class="col-lg-9 mt-2">
                                                  <div class="row">
                                                     <div class="col-lg-12">
                                                         <label class="form-control-placeholder">Email</label>
                                                         <input type="text" class="form-control custom-input "value="{{ $user->email }}" disabled>
                                                     </div>
                                                     <div class="col-lg-12">
                                                         <label class="form-control-placeholder">Name</label>
                                                        <input type="text" id="usrName" class="form-control custom-input" value="{{ $user->name }}">
                                                     </div>
                                                     {{-- <div class="col-lg-12">
                                                         <label class="form-control-placeholder">Password</label>
                                                        <input type="number" name="password" class="form-control custom-input" value="{{ $user->password }}">
                                                     </div> --}}
                                                     {{-- <div class="col-lg-12">
                                                        <label for="designation">Product/Service description</label>
                                                        <div id="editor"></div>
                                                        {{ Auth::user()}} // FOR ALL DETAILS OF USER
                                                     </div> --}}
                                                  </div>
                                               </div>
                                        
                                               <div class="col-lg-12 mt-4">
                                                <div class=" txt-end">
                                                        <button class="btn btn1" type="submit" name="update">Save</button>
                                                      <a href="#" class="btn btn1" data-toggle="modal" data-target="#addnewproduct" title="change password">Change Password</a>
                                               </div>
                                            </div>
                                            </div>
                                            </form>
                                      </div>
                                   </div>
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
