@extends('layouts.admin')
@section('content')
<div class="container mmt mb-5">
   <div class="card update-form">
      <div class="card-header">
         <h3 class="text-center title-2 font-weight-bold">Edit Purchanse Material Detail</h3>
      </div>
   </div>
   <div class="card">
      <form action="{{ route('admin.purchase.update',$purchase->id) }}" method="POST">
      @csrf
      @method('PUT')  
         <div class="forms bg-white p-4 my-3">
            <div class="form-row mt-2">
               <div class="form-group col-md-6">
                  <label for="inputName"> Enter Register Mobile Number</label>
                  <input type="number" class="form-control"placeholder="Enter Mobile" name="mobile" required="true" value="{{ $purchase->mobile }}">
               </div>
               <div class="form-group col-md-6">
                  <label for="inputName">Enter Invoice No</label>
                  <input class="form-control" type="text" placeholder="Enter Bill No" name="bill_no" required="" value="{{ $purchase->bill_no }}">
               </div>
            </div>
         </div>
         <div class="forms mb-5 p-2">
            <div class="card-header mb-2">
               <h3 class="text-center title-2 font-weight-bold">Material Detail</h3>
            </div>
            <div id="input_fields_wrap" class="mb-2">
            @for ($i = 0; $i < $count; $i++)
               <div class="row pt-4 mb-1" id="material_row">
                  <div class="col-md-11">
                     <div class="row">
                        <div class="col-lg-2">
                           <select class="custom-select custom-select-md" name="material_name[]" value="{{ $material[$i] }}" >
                              <option selected="" disabled="">{{ $material[$i] }}</option>
                              <option value="Aggregate">Aggregate</option>
                              <option value="Cement">Cement</option>
                              <option value="Brick">Brick</option>
                              <option value="Sand">Sand</option>
                           </select>
                        </div>
                        <div class="col-lg-2">
                           <select class="custom-select custom-select-md" name="material_type[]" placeholder="Material Type" value="{{ $material_type[$i] }}">
                              <option selected="" disabled="">{{ $material_type[$i] }}</option>
                              <option value="Abc">Abc</option>
                              <option value="Xyz">Xyz</option>
                           </select>
                        </div>
                        <div class="col-lg-2">
                           <select class="custom-select custom-select-md" name="material_quantity_type[]" value="{{ $material_quantity_type[$i] }}">
                              <option selected="" disabled="">{{ $material_quantity_type[$i] }}</option>
                              <option value="Bag">Bag</option>
                              <option value="Pieces">Pieces</option>
                              <option value="Quantel">Quantel</option>
                           </select>
                        </div>
                        <div class="col-lg-1 rate-input">
                           <input class="form-control" type="number" placeholder="Qty" name="quantity[]" required=""  value="{{ $quantity[$i] }}">
                        </div>
                        <div class="col-lg-1 rate-input">
                           <input class="form-control" type="number" placeholder="Price" name="material_price[]" required="" value="{{ $material_price[$i] }}">
                        </div>
                        <div class="col-lg-1 rate-input">
                           <input class="form-control" type="number" placeholder="0%" name="material_gst[]" required="" value="{{ $material_gst[$i] }}">
                        </div>
                        <div class="col-lg-1 rate-input">
                           <input class="form-control" type="number" placeholder="Tax" name="material_tax[]" required="" value="{{ $material_tax[$i] }}" >
                        </div>
                        <div class="col-lg-2 rate-input">
                           <input class="form-control" type="number" placeholder="Total Price" name="total_price[]" required="" value="{{ $total_price[$i] }}" > 
                        </div>
                     </div>
                  </div>
                  <div class="col-md-1 rate-btn">
                     <button type="button" class="btn btn1" id="add_field">+</button>
                  </div>
               </div>
            @endfor
            </div>
            <hr>
            <div class="form-group mt-4">
               <div class="row">
                  <div class="col-sm-3">
                     <label>Delivery Charges :</label>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="isdeliveryCharge" value="yes" checked="">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="isdeliveryCharge" value="no" >
                        <label class="form-check-label" for="inlineRadio2">No</label>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <input id="deliveryCharge" class="form-control" type="number" placeholder="0" name="deliveryCharge" required=""  value="{{ $purchase->deliveryCharge }}" >
                  </div>
                  <label class="col-sm-2 text-md-right my-auto my-md-1">Other Charges</label>
                  <div class="col-sm-1 p-0">
                     <input id="otherCharge" class="form-control" type="number" placeholder="0" name="otherCharge" required=""  value="{{ $purchase->otherCharge }}" >
                  </div>
                  <label class="col-sm-2 text-md-right my-auto my-md-1">Loading Charges</label>
                  <div class="col-sm-2">
                     <input id="loadingCharge" class="form-control" type="number" placeholder="0" name="loadingCharge" required=""  value="{{ $purchase->loadingCharge }}" >
                  </div>
               </div>
            </div>
            <hr class="my-3">
            <table class="table table-responsive-md table-bordered mb-5">
               <thead>
                  <tr class="btn1 text-white text-center">
                     <th>Total Price</th>
                     <th>Tax</th>
                     <th>Delivery Charges</th>
                     <th>Other Charges</th>
                     <th>Loading Charges</th>
                     <th>Grand Total</th>
                  </tr>
               </thead>
               <tbody class="text-center" id="sale-prices">
                  <tr>
                     <td><input class="form-control" type="number" placeholder="Rs.0" name="finalprice" readonly></td>
                     <td><input class="form-control" type="number" placeholder="Rs.0" name="finaltax" readonly></td>
                     <td><input class="form-control" type="number" placeholder="Rs.0" name="finaldcharge" readonly></td>
                     <td><input class="form-control" type="number" placeholder="Rs.0" name="finalocharge"  readonly></td>
                     <td><input class="form-control" type="number" placeholder="Rs.0" name="finallcharge"  readonly></td>
                     <td><input class="form-control" type="number" placeholder="Rs.0" name="grandtotal" readonly></td>
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
                  <input id="email" type="text" class="form-control" name="payment_amount" placeholder="Enter Amount">
               </div>
               <div class="col-md-6">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Cheque No</label>
                  <input id="email" type="text" class="form-control" name="payment_cheque" placeholder="Enter Cheque No">
               </div>
            </div>
         </div>
         <div class="row mb-5">
            <div class="form-group m-auto">
               <button type="submit" class="btn btn1" name="submit">Submit</button>
               <button class="btn btn1 text-white ml-2" type="reset">Reset</button>
            </div>
         </div>
      </form>
   </div>
</div>
@endsection