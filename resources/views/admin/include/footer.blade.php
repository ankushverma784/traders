 <footer class="clearfix">
    <div class="pull-center">
        <span class="footer-link">Managed by <a href="https://www.proponenttechnologies.com/" target="_blank" rel="noopener">Proponent Technologies</a></span>
    </div>
 </footer>

 <div class="modal fade" id="viewquickquotes" aria-modal="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content popupform">
        <div class="modal-header">
          <h5 class="modal-title">View Enquiry Form</h5>
          <a class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </a>
        </div>
        <div class="modal-body">
          <div class="contact-form">
         <form action="" method="post">
            <div class="row">
               <div class="col-lg-6">
                  <input type="text" name="uname" class="form-control custom-input" required>
                  <label for="uname" class="form-control-placeholder ">Name</label>
               </div>

               <div class="col-lg-6">
                  <input type="number" name="contact" class="form-control custom-input" required>
                  <label for="contact" class="form-control-placeholder">Mobile Number</label>
               </div>


               <div class="col-lg-6">
                  <input type="number" name="user-email" class="form-control custom-input" required>
                  <label for="user-email" class="form-control-placeholder">Email</label>
               </div>

               <div class="col-lg-6">
                  <input type="date" name="dateof-move" class="form-control custom-input" required>
                  <label for="dateof-move" class="form-control-placeholder">Date Of Move</label>
               </div>

               <div class="col-lg-6">
                  <select class="form-control custom-input" name="preferred_time" required>
                     <option value="" selected=""></option>
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
                  <label for="preferred-time" class="form-control-placeholder">Preferred Time</label>
               </div>

               <div class="col-lg-6">
                  <select class="form-control custom-input" name="type-move" required>
                     <option value="" selected=""></option>
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
                  <label for="type-move" class="form-control-placeholder">Type of move</label>
               </div>

               <div class="col-lg-6">
                  <input type="text" name="pickup-suburb" class="form-control custom-input" required>
                  <label for="pickup-suburb" class="form-control-placeholder">Pickup Suburb</label>
               </div>

               <div class="col-lg-6">
                  <select class="form-control custom-input" name="select-floo" required>
                     <option value="" selected=""></option>
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
                  <label for="select-floor" class="form-control-placeholder">Select Floor</label>
               </div>

               <div class="col-lg-6">
                  <input type="text" name="drop-off-time" class="form-control custom-input" required>
                  <label for="drop-off-time" class="form-control-placeholder">Drop Off Time</label>
               </div>

               <div class="col-lg-6">
                  <select class="form-control custom-input" name="select-floo" required>
                     <option value="" selected=""></option>
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
                  <label for="drop-off-time" class="form-control-placeholder">Select Floor</label>
               </div>

               <div class="col-lg-6">
                <input type="date" name="date-of-expire" class="form-control custom-input" required>
                <label for="date-of-expire" class="form-control-placeholder">Date of Expire</label>
             </div>

             <div class="col-lg-6">
                <input type="date" name="date-of-lead" class="form-control custom-input" required>
                <label for="date-of-lead" class="form-control-placeholder">Date of Lead</label>
             </div>
                                       

               <div class="col-lg-12">
                  <textarea name="additonal-details" class="form-control custom-input" required rows="2"></textarea>
                  <label for="additonal-details" class="form-control-placeholder">Message</label>
               </div>

               <div class="col-lg-12">
                  <div class="modalsubmitbn txt-end">
                     <button class="formsubmitbtn1" type="button" value="submit">Close</button>
                     <button class="formsubmitbtn2" type="button" value="submit">Save</button>
                  </div>
               </div>
            </div>
         </form>
       </div>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="addnewproduct" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content popupform">
               <div class="modal-header">
                  <h5 class="modal-title">Change Password</h5>
                  <a class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </a>
               </div>
               <div class="modal-body">
                  <form action="{{ route('user-password.update') }} " method="post">
                     @csrf
                     @method('PUT')
                    <div class="row">
                       <div class="col-lg-3"></div>
                       <div class="col-lg-6">
                          <div class="row">
                             <div class="col-lg-12">
                                <label class="form-control-placeholder ">Old Password</label>
                                <input type="text" name="old" class="form-control custom-input " required="">
                             </div>
                             <div class="col-lg-12 ">
                                <label class="form-control-placeholder">New Password</label>
                                <input type="text" name="" class="form-control custom-input" required="">
                             </div>
                             <div class="col-lg-12">
                                <label for="ex-pair" class="form-control-placeholder">Confirm Passsword</label>
                                <input type="text" name="" class="form-control custom-input" required="">
                             </div>
                             
                          </div>
                       </div>
                       <div class="col-lg-3"></div>
                     </div>
                          <div class="col-lg-12 mt-4">
                             <div class=" txt-end">
                                <button class="btn btn1" type="submit" value="submit">Save</button>
                                <button class="btn btn1" type="button" value="submit">Close</button>
                             </div>
                          </div>
                  </form>
               </div>
            </div>
         </div>
      </div>



<div class="modal fade" id="viewuserdetails" aria-modal="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content popupform">
        <div class="modal-header">
          <h5 class="modal-title">View Enquiry Form</h5>
          <a class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </a>
        </div>
        <div class="modal-body p-4 mt-2">
          <div class="contact-form">
         <form action="" method="post">
          <div class="row">
             <div class="col-lg-6">
                <input type="text" name="fname" class="form-control custom-input" required>
                <label for="fname" class="form-control-placeholder ">First Name</label>
             </div>

             <div class="col-lg-6">
                <input type="text" name="lname" class="form-control custom-input" required>
                <label for="lname" class="form-control-placeholder ">Last Name</label>
             </div>

             <div class="col-lg-6">
                <input type="number" name="user-email" class="form-control custom-input" required>
                <label for="user-email" class="form-control-placeholder">Email</label>
             </div>

             <div class="col-lg-6">
                <input type="number" name="contact" class="form-control custom-input" required>
                <label for="contact" class="form-control-placeholder">Mobile Number</label>
             </div>

             <div class="col-lg-12">
                <input type="text" name="user-address" class="form-control custom-input" required>
                <label for="user-address" class="form-control-placeholder">Address</label>
             </div>

             <div class="col-lg-12">
                <textarea name="additonal-details" class="form-control custom-input" required rows="2"></textarea>
                <label for="additonal-details" class="form-control-placeholder">Designation</label>
             </div>

             <div class="col-lg-12">
              <div class="modalsubmitbn txt-end">
                <button class="formsubmitbtn1" type="button" value="submit">Close</button>
                <button class="formsubmitbtn2" type="button" value="submit">Save</button>
              </div>
             </div>
          </div>
       </form>
       </div>
        </div>
      </div>
    </div>
</div>

  <!-- Button trigger modal -->


<!-- Modal -->
<!-- <div class="modal fade editModalBtn" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <h3 class="mb-4 font-weight-bold ml-sm-1">Edit Suppliers</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
                  @csrf
                  @method('PUT')  
                  
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputName">Mobile Number</label>
                  <input type="mobile" class="form-control"  placeholder="Enter Mobile" name="mobile" required="true"  value="" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAmount">Name</label>
                  <input type="text" class="form-control"  placeholder="Enter Full Name" name="name" required="true" value="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputName">City</label>
                  <input type="text" class="form-control"  placeholder="Enter City" name="city" required="true" value="">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPolicyNo">State</label>
                  <input type="text" class="form-control"  placeholder="" value="Uttarakhand" name="state" required="true" disabled="" >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputPolicyNo">Address</label>
                  <input type="text" class="form-control"  placeholder="Enter Address" name="address" required="true" value="">
                </div>
              </div>
              <button type="submit" class="btn btn1" name="submit">Save</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn1" name="submit">Save changes</button>
      </div>
    </div>
  </div>
</div> -->



