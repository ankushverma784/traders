@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
   <div class="card update-form">
      <div class="card-header">
         <h3 class="text-center title-2 font-weight-bold">Client Detail</h3>
      </div>
   </div>
   <div class="card">
      <form action="" method="POST">
         <div class="forms bg-white p-4 my-3" id="cust-form">
            <div class="form-row mt-2">
               <div class="form-group col-md-6">
                  <label for="inputName" id="EnterMobNO">Mobile Number</label>
                  <input type="number" class="form-control" id="mobNo" placeholder="Enter Mobile" name="mobile" required="true" onchange="Customer(this.value)">
               </div>
                  <div class="form-group col-md-6">
                  <label for="inputAmount">GST No</label>
                  <input type="text" class="form-control" id="gstNo" placeholder="Enter GST No" name="gst" required="true">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputName">Customer Name</label>
                  <input type="text" class="form-control" id="cusName" placeholder="Full Name" name="name" required="true">
               </div>
               <div class="form-group col-md-6">
                  <label for="inputPolicyName">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required="true">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputName">Aadhar No</label>
                  <input type="number" class="form-control" id="aadhar" placeholder="Enter Aadhar No" name="aadhar" required="true">
               </div>
               <div class="form-group col-md-6">
                  <label for="inputAmount">PAN No</label>
                  <input type="text" class="form-control" id="panNo" placeholder="Enter PAN No" name="pan" required="true">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputAmount">City</label>
                  <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required="true">
               </div>
               <div class="form-group col-md-6">
                  <label for="inputPolicyNo">State</label>
                  <input type="text" class="form-control" id="inputPolicyNo" placeholder="" value="Uttarakhand" name="state" required="true" disabled="">
               </div>
            </div>
         </div>
         <div class="card-header">
            <h3 class="text-center title-2 font-weight-bold">Vehicle Detail</h3>
         </div>
         <div class="forms bg-white p-4 my-3 mb-5">
            <div class="form-row pt-3 ">
               <label class="col-md-1 text-md-right my-auto">Vehicle No</label>
               <div class="col-md-4">
                  <div class="input-group input-icon rinputAmountight align-items-center d-flex text-center" >
                     <span class="input-group-addon pr-1">
                     <i class="fa fa-truck"></i>
                     </span>
                     <input id="text" class="form-control" type="text" placeholder="Enter Vehicle No" name="vehicle_no" required="">
                  </div>
               </div>
               <label class="col-md-3 text-md-right my-auto">Driver Name</label>
               <div class="col-md-4">
                  <div class="input-group input-icon right align-items-center d-flex text-center">
                     <span class="input-group-addon pr-1">
                     <i class="fa fa-user"></i>
                     </span>
                     <input id="text" class="form-control" type="text" placeholder="Enter Driver Name" name="driver_name" required="">
                  </div>
               </div>
            </div>
         </div>
         <div class="card-header mb-2">
            <h3 class="text-center title-2 font-weight-bold">Material Detail</h3>
         </div>
         <div class="forms mb-5 p-2">
            <div id="input_fields_wrap">
               <div class="row pt-5 pb-5"  id="material-row">
                  <div class="col-md-11">
                     <div class="row " >
                        <div class="col-lg-2">
                           <select class="custom-select custom-select-md" name="material-name[]" onchange="get(this.value,this.id)" id="0">
                              <option selected="" disabled="">Select Material</option>
                              <option value="AGGREGATE">Aggregate</option>
                              <option value="CEMENT">Cement</option>
                              <option value="BRICK">Brick</option>
                              <option value="SAND">Sand</option>
                           </select>
                        </div>
                        <div class="col-lg-2">
                           <select class="custom-select custom-select-md" name="material-type[]" placeholder="Material Type" id="mt0">
                              <option selected="" disabled="">Material Type</option>
                           </select>
                        </div>
                        <div class="col-lg-2">
                           <select class="custom-select custom-select-md" name="material-quantity-type[]">
                              <option selected="" disabled="">Quantity Type</option>
                              <option value="Bag">Bag</option>
                              <option value="Pieces">Pieces</option>
                              <option value="Quantel">Quantel</option>
                           </select>
                        </div>
                        <div class="col-lg-1 rate-input">
                           <input id="quantity0" class="form-control" type="number" placeholder="Qty" name="material-quantity[]" required="" onkeyup="checkStock(document.getElementById(&quot;mt0&quot;).options[document.getElementById(&quot;mt0&quot;).selectedIndex].value,this.value,this.id);" onchange="getTotalPrice(0);calculateTotal();" autocomplete="off">
                           <div id="qty0" class="qtyvalue"></div>
                        </div>
                        <div class="col-lg-1 rate-input">
                           <input id="price0" class="form-control" type="number" placeholder="Price" name="material-price[]" required="" onkeyup="getTotalPrice(0);calculateTotal();" autocomplete="off">
                        </div>
                        <div class="col-lg-1 rate-input">
                           <input class="form-control" type="text" placeholder="0%" name="material-gst[]" required="" id="gst0">
                        </div>
                        <div class="col-lg-1 rate-input">
                           <input id="tax0" class="form-control" type="number" placeholder="Tax" name="material-tax[]" required="" readonly="">
                        </div>
                        <div class="col-lg-2 rate-input">
                           <input id="total-price0" class="form-control" type="number" placeholder="Total Price" name="material-total-price[]" required="" readonly="">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-1 rate-btn">
                     <button type="button" class="btn btn1" id="add_field_button">+</button>
                  </div>
               </div>
            </div>
            <hr>
            <div class="form-group mt-4">
               <div class="row">
                  <div class="col-sm-3">
                     <label>Delivery Charges :</label>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="isdeliveryCharge" id="yes" value="yes" checked="" onclick="document.getElementById(&quot;deliveryCharge&quot;).readOnly=false;">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="isdeliveryCharge" id="no" value="no" onclick="document.getElementById(&quot;deliveryCharge&quot;).readOnly=true;document.getElementById(&quot;deliveryCharge&quot;).value=0;">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <input id="deliveryCharge" class="form-control" type="number" placeholder="0" name="deliveryCharge" required="" oninput="finalPrice()" autocomplete="off">
                  </div>
                  <label class="col-sm-2 text-md-right my-auto my-md-1">Other Charges</label>
                  <div class="col-sm-1 p-0">
                     <input id="otherCharge" class="form-control" type="number" placeholder="0" name="otherCharge" required="" oninput="finalPrice()" autocomplete="off">
                  </div>
                  <label class="col-sm-2 text-md-right my-auto my-md-1">Loading Charges</label>
                  <div class="col-sm-2">
                     <input id="loadingCharge" class="form-control" type="number" placeholder="0" name="loadingCharge" required="" oninput="finalPrice()" autocomplete="off">
                  </div>
               </div>
            </div>
            <hr class="my-3">
            <table class="table table-responsive-md table-bordered mb-5">
               <thead>
                  <tr class="btn1 text-center">
                     <th scope="col">Total Price</th>
                     <th scope="col">Tax</th>
                     <th scope="col">Delivery Charges</th>
                     <th scope="col">Other Charges</th>
                     <th scope="col">Loading Charges</th>
                     <th scope="col">Grand Total</th>
                  </tr>
               </thead>
               <tbody class="text-center" id="sale-prices">
                  <tr>
                     <td><input id="finalprice" class="form-control" type="number" placeholder="Rs.0" name="finalprice" readonly=""></td>
                     <td><input id="finaltax" class="form-control" type="number" placeholder="Rs.0" name="finaltax" readonly=""></td>
                     <td><input id="finaldcharge" class="form-control" type="number" placeholder="Rs.0" name="finaldcharge" readonly=""></td>
                     <td><input id="finalocharge" class="form-control" type="number" placeholder="Rs.0" name="finalocharge" readonly=""></td>
                     <td><input id="finallcharge" class="form-control" type="number" placeholder="Rs.0" name="finallcharge" readonly=""></td>
                     <td><input id="grandtotal" class="form-control" type="number" placeholder="Rs.0" name="grandtotal" readonly=""></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="forms mb-4">
            <div class="card-header mb-2">
               <h3 class="text-center title-2 font-weight-bold">Payment Detail</h3>
            </div>
            <div class="row p-2">
               <div class="col-sm-12">
                  <label>Payment Status : </label>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="payment-status" id="inlineRadio1" value="Paid">
                     <label class="form-check-label" for="inlineRadio1">Paid</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="payment-status" id="inlineRadio2" value="UnPaid">
                     <label class="form-check-label" for="inlineRadio2">UnPaid</label>
                  </div>
               </div>
            </div>
            <div class="row p-2">
               <div class="col-sm-12">
                  <label>Payment Type : </label>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="payment-type" id="inlineRadio1" value="Cash">
                     <label class="form-check-label" for="inlineRadio1">Cash</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="payment-type" id="inlineRadio2" value="Cheque">
                     <label class="form-check-label" for="inlineRadio2">Cheque</label>
                  </div>
               </div>
            </div>
            <div class="form-row align-items-center p-2 pb-5">
               <div class="col-md-6">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Paid Amount</label>
                  <input id="email" type="text" class="form-control" name="payment-amount" placeholder="Enter Amount">
               </div>
               <div class="col-md-6">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Cheque No</label>
                  <input id="email" type="text" class="form-control" name="payment-cheque" placeholder="Enter Cheque No">
               </div>
            </div>
         </div>
         <div class="row mb-5">
            <div class="form-group m-auto">
               <button type="submit" class=" btn btn1" name="submit">Submit</button>
               <button class="btn btn1" type="reset">Reset</button>
            </div>
         </div>
      </form>
   </div>
</div>
<script>
   $("#EnterMobNO").change(function(Customer){
  var mob_No = $("mobNo").text();
  $("#mobNo").val($mob_no);
  var gstNo = $("gstNo").text();
  $("#gstNo").val($gst_no);

                             




});
</script>
@endsection