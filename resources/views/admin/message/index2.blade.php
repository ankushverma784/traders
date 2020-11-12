<div class="col-lg-12">
                               <div class="card update-form">
                                    <div class="card-header">
                                       <h3 class="text-center title-2">Send Message To Customer</h3>
                                                                           </div>
                                    <div class="card-body">
                                       <form action="" method="POST">
                                            <div class="form-row">
                                            <div class="form-group col-md-4">
                                              <label for="inputName">Material Type</label>
                                              <select class="custom-select custom-select-md" name="type" id="type" onchange="getRateAndUnit(this.value)">
                                              <option disabled="" selected="">Select Material Type</option>
                                              <option value="Boulder">Boulder</option>
                                              <option value="Mix Bajri">Mix Bajri</option>
                                              <option value="Grit 65mm">Grit 65mm</option>
                                              <option value="Grit 53mm">Grit 53mm</option>
                                              <option value="Grit 40mm">Grit 40mm</option>
                                              <option value="Grit 20mm">Grit 20mm</option>
                                              <option value="Grit 10mm">Grit 10mm</option>
                                              <option value="Grit 6mm">Grit 6mm</option>
                                              <option value="Shree Cement">Shree Cement</option>
                                              <option value="Banger Cement">Banger Cement</option>
                                              <option value="UltraTech Cement">UltraTech Cement</option>
                                              <option value="Ambuja Cement">Ambuja Cement</option>
                                              <option value="Ganga 1st(Aval)">Ganga 1st(Aval)</option>
                                              <option value="Ganga 2nd(Doyam)">Ganga 2nd(Doyam)</option>
                                              <option value="Ganga Chatka">Ganga Chatka</option>
                                              <option value="Dhula Reta(Haridwar)">Dhula Reta(Haridwar)</option>
                                              <option value="Dhula Reta(Jamuna)">Dhula Reta(Jamuna)</option>
                                              <option value="Fine Sand(Chinyalisaur)">Fine Sand(Chinyalisaur)</option>
                                              <option value="Dhula Reta(Jamuna)">Dhula Reta(Jamuna)</option>
                                              <option value="Fine Sand(Doiwala)">Fine Sand(Doiwala)</option>
                                              <option value="Stone Dust">Stone Dust</option>
                                              <option value="Dhula Reta(Doiwala)">Dhula Reta(Doiwala)</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label for="inputAmount">Enter Rate</label>
                                              <input type="text" class="form-control" placeholder="Enter Rate" name="rate" required="true" id="rate">
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label for="inputName">Quantity Type</label>
                                              <select class="custom-select custom-select-md" name="qty_unit" id="unit">
                                              <option disabled="" selected="">Select Quantity Type</option>
                                              <option value="Quantel">Quantel</option>
                                              <option value="Piece">Piece</option>
                                              <option value="Bag">Bag</option>
                                            </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary mx-auto" name="submit" onclick="sendMessage()">Send Message</button>
                                          </div>
                                    </form>
                                </div>
                            </div>
                    </div>