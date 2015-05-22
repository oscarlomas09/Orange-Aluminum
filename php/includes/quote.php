<div id="custom-quote" class="text-center">
    <h3>Don't See What You're Looking For?</h3>
    <a data-toggle="modal" data-target="#quote-modal"><button class="btn btn-press" style="width:100%;background-color:#30466f;border-color:#1c2f53">Get A Custom Quote</button></a>
</div>


<!-- Modal -->
<div class="modal fade" id="quote-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Get A Custom Quote</h4>
      </div>
      <div class="modal-body">
          <div class="container-fluid form-panel">
            <div class="row">
                <form id="contact-form">
                    <div class="col-xs-12 col-sm-6">
                        <div>
                            <label>First Name</label><br>
                            <input type="text" name="first_name"/>
                        </div>
                        <div>
                            <label>Last Name</label><br>
                            <input type="text" name="last_name"/>
                        </div>
                        <div>
                            <label>Business Name</label><br>
                            <input type="text" name="business_name"/>
                        </div>
                        <div>
                            <label>Email<span class="bad">*</span></label><br>
                            <input type="email" name="contact_email" required />
                        </div>
                        <div>
                            <label>Telephone</label><br>
                            <input type="tel" name="telephone"/>
                        </div>
                        <div>
                            <label>SKU</label><br>
                            <input type="text" name="sku"/>
                        </div>
                        <div>
                            <label>Finish</label><br>
                            <input type="text" name="finish"/>
                        </div>
                        <div>
                            <label>Fabrication</label><br>
                            <input type="text" name="fab"/>
                        </div>
                        <div>
                            <label>Cut Length</label><br>
                            <input type="text" name="cut"/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">  
                        <div>
                            <label>Order Quantity</label><br>
                            <input type="text" name="qty"/>
                        </div>   
                        <div>
                            <label>Timeframe</label><br>
                            <input type="text" name="timeframe"/>
                        </div>                                  
                        <div>
                            <label>Special Notes</label><br>
                            <textarea rows="5" name="notes" style="resize:vertical;width:100%;max-height:300px;"></textarea>
                        </div>
                        <div>
                            <label>Attachments</label><br>
                            <input type="file" name="attachments"/>
                        </div>   
                    </div>
                    <div class="col-xs-12"> 
                        <input type="submit" value="Submit" class="btn btn-warning" style="font-size:1.2em;float:right;"/>
                    </div>
                </form>
            </div>
        </div><br>
      </div>
    </div>
  </div>
</div>

