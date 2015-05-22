<?php include("../php/helper.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Secure Checkout</title>
        <meta name="description" content="">
        <?php include("../php/includes/header-files.php"); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("../php/includes/header.php"); ?>
        <div id="checkout-modal">
          <div class="screen close-checkout"></div>
          <div id="modal-content">
            <div id="close-checkout">
              <span class="glyphicon glyphicon-remove-circle close-checkout"></span>
            </div>
            <div class="icon"><span class="glyphicon glyphicon-record"></span></div>
            <div id="checkout-msg">
              <h3>Processing...</h3>
              <p>Processing your order...</p>
              <div class="close-checkout"><span class="glyphicon glyphicon-remove-circle"></span> Close</div>
            </div>
          </div>
        </div>
        <div class="common-container container-fluid">
            <h2 id="feedback_txt">PLACE ORDER NOW</h2>            
            <p>Please fill in the fields below and click Place Order to complete your purchase!</p>
            <a class="login">Already have an account? Click here to login</a><hr>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 checkout-col">
                    <h3>Billing Address</h3>
                    <form id="billingAddress">                        
                      <div class="form-group form-fluid">
                        <label for="firstName">First Name:<span class="bad">*</span></label>
                        <input type="text" class="form-control" id="firstName" name="billing_firstName" placeholder="First Name" required>
                      </div>                  
                      <div class="form-group form-fluid">
                        <label for="lastName">Last Name:<span class="bad">*</span></label>
                        <input type="text" class="form-control" id="lastName" name="billing_lastName" placeholder="Last Name" required>
                      </div>              
                      <div class="form-group form-fluid">
                        <label for="email">Email:<span class="bad">*</span></label>
                        <input type="email" class="form-control" id="email" name="billing_email" placeholder="Email" required>
                      </div>            
                      <div class="form-group form-fluid">
                        <label for="telephone">Telephone:<span class="bad">*</span></label>
                        <input type="tel" class="form-control" id="telephone" name="billing_telephone" placeholder="(XXX) XXX-XXXX" required>
                      </div>      
                      <div class="form-group">
                        <label for="address_1">Address:<span class="bad">*</span></label>
                        <input type="text" class="form-control" id="address_1" name="billing_address_one" placeholder="" required><br>
                        <input type="text" class="form-control" id="address_2" name="billing_address_two" placeholder="">
                      </div>          
                      <div class="form-group form-fluid">
                        <label for="zip">ZIP/Postal Code:<span class="bad">*</span></label>
                        <input type="text" class="form-control" id="zip" name="billing_zip" placeholder="Code" required>
                      </div>       
                      <div class="form-group form-fluid">
                        <label for="state">State/Province:<span class="bad">*</span></label>
                        <select title="State/Province" id="state" name="billing_state" required>
                               <option value="">Please select region, state or province</option>
                               <option value="1" title="Alabama">Alabama</option>
                               <option value="2" title="Alaska">Alaska</option>
                               <option value="3" title="American Samoa">American Samoa</option>
                               <option value="4" title="Arizona">Arizona</option>
                               <option value="5" title="Arkansas">Arkansas</option>
                               <option value="6" title="Armed Forces Africa">Armed Forces Africa</option>
                               <option value="7" title="Armed Forces Americas">Armed Forces Americas</option>
                               <option value="8" title="Armed Forces Canada">Armed Forces Canada</option>
                               <option value="9" title="Armed Forces Europe">Armed Forces Europe</option>
                               <option value="10" title="Armed Forces Middle East">Armed Forces Middle East</option>
                               <option value="11" title="Armed Forces Pacific">Armed Forces Pacific</option>
                               <option value="12" title="California">California</option>
                               <option value="13" title="Colorado">Colorado</option>
                               <option value="14" title="Connecticut">Connecticut</option>
                               <option value="15" title="Delaware">Delaware</option>
                               <option value="16" title="District of Columbia">District of Columbia</option>
                               <option value="17" title="Federated States Of Micronesia">Federated States Of Micronesia</option>
                               <option value="18" title="Florida">Florida</option>
                               <option value="19" title="Georgia">Georgia</option>
                               <option value="20" title="Guam">Guam</option>
                               <option value="21" title="Hawaii">Hawaii</option>
                               <option value="22" title="Idaho">Idaho</option>
                               <option value="23" title="Illinois">Illinois</option>
                               <option value="24" title="Indiana">Indiana</option>
                               <option value="25" title="Iowa">Iowa</option>
                               <option value="26" title="Kansas">Kansas</option>
                               <option value="27" title="Kentucky">Kentucky</option>
                               <option value="28" title="Louisiana">Louisiana</option>
                               <option value="29" title="Maine">Maine</option>
                               <option value="30" title="Marshall Islands">Marshall Islands</option>
                               <option value="31" title="Maryland">Maryland</option>
                               <option value="32" title="Massachusetts">Massachusetts</option>
                               <option value="33" title="Michigan">Michigan</option>
                               <option value="34" title="Minnesota">Minnesota</option>
                               <option value="35" title="Mississippi">Mississippi</option>
                               <option value="36" title="Missouri">Missouri</option>
                               <option value="37" title="Montana">Montana</option>
                               <option value="38" title="Nebraska">Nebraska</option>
                               <option value="39" title="Nevada">Nevada</option>
                               <option value="40" title="New Hampshire">New Hampshire</option>
                               <option value="41" title="New Jersey">New Jersey</option>
                               <option value="42" title="New Mexico">New Mexico</option>
                               <option value="43" title="New York">New York</option>
                               <option value="44" title="North Carolina">North Carolina</option>
                               <option value="45" title="North Dakota">North Dakota</option>
                               <option value="46" title="Northern Mariana Islands">Northern Mariana Islands</option>
                               <option value="47" title="Ohio">Ohio</option>
                               <option value="48" title="Oklahoma">Oklahoma</option>
                               <option value="49" title="Oregon">Oregon</option>
                               <option value="50" title="Palau">Palau</option>
                               <option value="51" title="Pennsylvania">Pennsylvania</option>
                               <option value="52" title="Puerto Rico">Puerto Rico</option>
                               <option value="53" title="Rhode Island">Rhode Island</option>
                               <option value="54" title="South Carolina">South Carolina</option>
                               <option value="55" title="South Dakota">South Dakota</option>
                               <option value="56" title="Tennessee">Tennessee</option>
                               <option value="57" title="Texas">Texas</option>
                               <option value="58" title="Utah">Utah</option>
                               <option value="59" title="Vermont">Vermont</option>
                               <option value="60" title="Virgin Islands">Virgin Islands</option>
                               <option value="61" title="Virginia">Virginia</option>
                               <option value="62" title="Washington">Washington</option>
                               <option value="63" title="West Virginia">West Virginia</option>
                               <option value="64" title="Wisconsin">Wisconsin</option>
                               <option value="65" title="Wyoming">Wyoming</option>
                            </select>
                      </div>     
                      <div class="form-group form-fluid">
                        <label for="company">Company:</label>
                        <input type="text" class="form-control" id="company" name="billing_company" placeholder="Company">
                      </div>  
                      <div class="form-group form-fluid">
                        <label for="fax">Fax:</label>
                        <input type="text" class="form-control" id="fax" name="billing_fax" placeholder="Fax">
                      </div> 
                      <input type="submit" value="submit" style="width:0px;height:0px;display:none;"/>
                    </form>
                    <!-- Create New Account -->
                    <input type="checkbox" id="createRadio" data-toggle="collapse" data-target="#createAccount" aria-expanded="false" aria-controls="createAccount"/>
                    <label for="createRadio">Create an account for later use</label>
                    <form id="createAccount" class="collapse">   
                      <h5 id="password_feedback"></h5>                      
                      <div class="form-group form-fluid">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
                      </div>  
                      <div class="form-group form-fluid">
                        <label for="confirm">Confirm:</label>
                        <input type="password" class="form-control" id="confirm" placeholder="password" required>
                      </div> 
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 checkout-col">
                    <h3>Shipping</h3>                  
                    <input type="checkbox" id="shippingRadio" data-toggle="collapse" data-target="#shippingAddress" aria-expanded="false" aria-controls="shippingAddress"/>
                    <label for="shippingRadio">Ship to different address</label>
                    <form id="shippingAddress" class="collapse">          
                      <div class="form-group form-fluid">
                        <label for="shipping_firstName">First Name:<span class="bad">*</span></label>
                        <input type="text" class="form-control" id="shipping_firstName" name="shipping_firstName" placeholder="First Name" required>
                      </div>                  
                      <div class="form-group form-fluid">
                        <label for="shipping_lastName">Last Name:<span class="bad">*</span></label>
                        <input type="text" class="form-control" id="shipping_lastName" name="shipping_lastName" placeholder="Last Name" required>
                      </div>                
                      <div class="form-group">
                        <label for="shipping_telephone">Telephone:<span class="bad">*</span></label>
                        <input type="tel" class="form-control" id="shipping_telephone" name="shipping_telephone" placeholder="(XXX) XXX-XXXX" required>
                      </div>      
                      <div class="form-group">
                        <label for="shipping_address_1">Address:<span class="bad">*</span></label>
                        <input type="text" class="form-control" id="shipping_address_1" placeholder="" name="shipping_address_one" required><br>
                        <input type="text" class="form-control" id="shipping_address_2" placeholder="" name="shipping_address_two">
                      </div>          
                      <div class="form-group form-fluid">
                        <label for="shipping_zip">ZIP/Postal Code:<span class="bad">*</span></label>
                        <input type="text" class="form-control" id="shipping_zip" placeholder="Code" name="shipping_zip" required>
                      </div>       
                      <div class="form-group form-fluid">
                        <label for="state">State/Province:<span class="bad">*</span></label>
                        <select title="State/Province" id="shipping_state" name="shipping_state" required>
                               <option value="">Please select region, state or province</option>
                               <option value="1" title="Alabama">Alabama</option>
                               <option value="2" title="Alaska">Alaska</option>
                               <option value="3" title="American Samoa">American Samoa</option>
                               <option value="4" title="Arizona">Arizona</option>
                               <option value="5" title="Arkansas">Arkansas</option>
                               <option value="6" title="Armed Forces Africa">Armed Forces Africa</option>
                               <option value="7" title="Armed Forces Americas">Armed Forces Americas</option>
                               <option value="8" title="Armed Forces Canada">Armed Forces Canada</option>
                               <option value="9" title="Armed Forces Europe">Armed Forces Europe</option>
                               <option value="10" title="Armed Forces Middle East">Armed Forces Middle East</option>
                               <option value="11" title="Armed Forces Pacific">Armed Forces Pacific</option>
                               <option value="12" title="California">California</option>
                               <option value="13" title="Colorado">Colorado</option>
                               <option value="14" title="Connecticut">Connecticut</option>
                               <option value="15" title="Delaware">Delaware</option>
                               <option value="16" title="District of Columbia">District of Columbia</option>
                               <option value="17" title="Federated States Of Micronesia">Federated States Of Micronesia</option>
                               <option value="18" title="Florida">Florida</option>
                               <option value="19" title="Georgia">Georgia</option>
                               <option value="20" title="Guam">Guam</option>
                               <option value="21" title="Hawaii">Hawaii</option>
                               <option value="22" title="Idaho">Idaho</option>
                               <option value="23" title="Illinois">Illinois</option>
                               <option value="24" title="Indiana">Indiana</option>
                               <option value="25" title="Iowa">Iowa</option>
                               <option value="26" title="Kansas">Kansas</option>
                               <option value="27" title="Kentucky">Kentucky</option>
                               <option value="28" title="Louisiana">Louisiana</option>
                               <option value="29" title="Maine">Maine</option>
                               <option value="30" title="Marshall Islands">Marshall Islands</option>
                               <option value="31" title="Maryland">Maryland</option>
                               <option value="32" title="Massachusetts">Massachusetts</option>
                               <option value="33" title="Michigan">Michigan</option>
                               <option value="34" title="Minnesota">Minnesota</option>
                               <option value="35" title="Mississippi">Mississippi</option>
                               <option value="36" title="Missouri">Missouri</option>
                               <option value="37" title="Montana">Montana</option>
                               <option value="38" title="Nebraska">Nebraska</option>
                               <option value="39" title="Nevada">Nevada</option>
                               <option value="40" title="New Hampshire">New Hampshire</option>
                               <option value="41" title="New Jersey">New Jersey</option>
                               <option value="42" title="New Mexico">New Mexico</option>
                               <option value="43" title="New York">New York</option>
                               <option value="44" title="North Carolina">North Carolina</option>
                               <option value="45" title="North Dakota">North Dakota</option>
                               <option value="46" title="Northern Mariana Islands">Northern Mariana Islands</option>
                               <option value="47" title="Ohio">Ohio</option>
                               <option value="48" title="Oklahoma">Oklahoma</option>
                               <option value="49" title="Oregon">Oregon</option>
                               <option value="50" title="Palau">Palau</option>
                               <option value="51" title="Pennsylvania">Pennsylvania</option>
                               <option value="52" title="Puerto Rico">Puerto Rico</option>
                               <option value="53" title="Rhode Island">Rhode Island</option>
                               <option value="54" title="South Carolina">South Carolina</option>
                               <option value="55" title="South Dakota">South Dakota</option>
                               <option value="56" title="Tennessee">Tennessee</option>
                               <option value="57" title="Texas">Texas</option>
                               <option value="58" title="Utah">Utah</option>
                               <option value="59" title="Vermont">Vermont</option>
                               <option value="60" title="Virgin Islands">Virgin Islands</option>
                               <option value="61" title="Virginia">Virginia</option>
                               <option value="62" title="Washington">Washington</option>
                               <option value="63" title="West Virginia">West Virginia</option>
                               <option value="64" title="Wisconsin">Wisconsin</option>
                               <option value="65" title="Wyoming">Wyoming</option>
                            </select>
                      </div>     
                      <div class="form-group form-fluid">
                        <label for="shipping_company">Company:</label>
                        <input type="text" class="form-control" id="shipping_company" name="shipping_company" placeholder="Company">
                      </div>  
                      <div class="form-group form-fluid">
                        <label for="shipping_fax">Fax:</label>
                        <input type="text" class="form-control" id="shipping_fax" name="shipping_fax" placeholder="Fax">
                      </div> 
                      <input type="submit" value="submit" style="width:0px;height:0px;display:none;"/>
                    </form>
                    
                    <h3>Shipping Method</h3>
                    <form id="shippingMethod">
                        <input type="radio" id="willCall" name="shipping_method" checked value="0"/>
                        <label for="willCall">Will Call</label><br>
                        <p><span class="method">For Pickup Only</span> <b class="cost">$0.00</b></p>
                    </form>
                    
                    <h3>Payment Method</h3>
                    <form id="creditForm">
                        <input type="radio" id="credit" name="payment" value="credit" checked />
                        <label for="credit">Credit Card</label><br>
                        <div id="credit-container" class="collapse in">
                          <table>
                            <thead>
                              <th colspan="2">Payment Details</th>
                              <th class="last-col" id="card-type" style="text-align:right;font-size:2.5em;"><span class="icon-secure"></span></th>
                            </thead>
                            <tbody>
                              <tr><td colspan="3">Card Number</td></tr>
                              <tr><td colspan="3"><input type="number" id="card_number" name="card_number" required /></td></tr>
                              <tr>
                                <td colspan="2">Expiration</td>
                                <td class="last-col text-center">CSV</td>
                              </tr>
                              <tr>
                                <td>
                                  <select id="expiration_month" name="expiration_month" required>
                                    <option value="" selected="selected">Month</option>
                                    <option value="1">01 - January</option>
                                    <option value="2">02 - February</option>
                                    <option value="3">03 - March</option>
                                    <option value="4">04 - April</option>
                                    <option value="5">05 - May</option>
                                    <option value="6">06 - June</option>
                                    <option value="7">07 - July</option>
                                    <option value="8">08 - August</option>
                                    <option value="9">09 - September</option>
                                    <option value="10">10 - October</option>
                                    <option value="11">11 - November</option>
                                    <option value="12">12 - December</option>
                                  </select>
                                </td>
                                <td>
                                  <select id="expiration_year" name="expiration_year" required>
                                    <option value="" selected="selected">Year</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                  </select>
                                </td>
                                <td class="last-col"><input type="number" id="csv" name="csv" required /></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <input type="radio" id="check" name="payment" value="check" />
                        <label for="check">Check / Money order</label><br>
                        <input type="submit" value="submit" id="creditSubmit" style="width:0px;height:0px;display:none;"/>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 checkout-col">
                    <h3>Review Order</h3>                  
                    <table id="cart-table">
                        <thead>
                            <th class="info-col">Product Name</th>
                            <th class="qty-col">Qty</th>
                            <th class="price-col">Subtotal</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" style="text-align:right;padding:2px 3px;"><h5>Subtotal</h5></td>
                                <td class="price-col" style="padding:2px 3px;"><b id="subtotal" data-value="0">$0.00</b></td>
                            </tr>   
                            <tr>
                                <td colspan="2" style="text-align:right;padding:2px 3px;"><h5>Tax</h5></td>
                                <td class="price-col" style="padding:2px 3px;"><b id="tax" data-value="0">$0.00</b></td>
                            </tr> 
                            <tr>
                                <td colspan="2" style="text-align:right;padding:2px 3px;"><h5>Shipping & Handling</h5></td>
                                <td class="price-col" style="padding:2px 3px;"><b id="shipping" data-value="0">$0.00</b></td>
                            </tr>  
                            <tr>
                                <th colspan="2" style="text-align:right;"><h4>Grand Total</h4></th>
                                <th class="price-col"><b id="grand-total" data-value="0">$0.00</b></th>
                            </tr>   
                        </tbody>
                    </table>
                    <div class="coupon-container" style="width:100%;">
                        <input type="text" id="coupon" placeholder="Enter Coupon Code Here..."/>
                        <button id="apply-coupon" class="btn btn-press">Apply</button>
                    </div>
                    <h4>Purchase Order # / Comment</h4>
                    <textarea id="comments" style="width:100%;resize:vertical;"></textarea>
                    
                    <input type="checkbox" id="newsletter"/>
                    <label for="newsletter">Sign Up for Our Newsletter</label><br>
                    <input type="checkbox" id="terms"/>
                    <label for="terms">I read and agree to Terms and Conditions</label><br>
                    
                    <div><span>Forgot an Item? </span><a href="<?php echo BASE_URL; ?>cart/">Edit Your Cart</a></div>
                    <br>
                    <button id="checkout-btn" class="btn btn-press btn-lg" style="width:100%;">Place Order   <span class="glyphicon glyphicon-arrow-right"></span></button>
                </div>
            </div>
        </div>
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>        
        <script>      
            function updateCart(){    
                var tax_rate = 0.09;
                var subtotal = 0,
                    total = 0,
                    tax = 0,
                    shipping = 0;
                $(".product").each(function(){
                    var amount = parseFloat($(this).find(".total").data("amount"));
                    subtotal += amount;
                });
                tax = subtotal*tax_rate;
                shipping = parseFloat($('input[name=shipping_method]:checked', '#shippingMethod').val());
                total = subtotal + tax + shipping;
                $("#subtotal").text("$"+subtotal.toFixed(2)).data("value",subtotal.toFixed(2));
                $("#tax").text("$"+tax.toFixed(2)).data("value", tax.toFixed(2));
                $("#grand-total").text("$"+total.toFixed(2)).data("value",total.toFixed(2));
            }
            function cartRow(){
                cart_row = "";
                for(var i=0; i< cart_items.length; i++){
                    cart_row += '<tr class="product"><td class="info-col" data-sku="' +cart_items[i].sku+ '">'+cart_items[i].title+'</td><td class="qty-col"><span>' +cart_items[i].quantity +'</span></td><td class="price-col"><span class="total" data-amount="'+(parseInt(cart_items[i].quantity) * parseFloat(cart_items[i].price)).toFixed(2)+'">$'+(parseInt(cart_items[i].quantity) * parseFloat(cart_items[i].price)).toFixed(2)+'</span></td></tr>';
                }            
                $("#cart-table .product").remove();
                $("#cart-table tbody").prepend(cart_row);
            }
            //check if there are items in the shopping cart
            if(cart_items.length > 0){
                cartRow();
            }
            else{
                $("#feedback_txt").removeClass().text("There Are No Items on Your Cart");      
                $("#checkout-modal").find("h3").text("Sorry");  
                $("#checkout-modal").find("p").text("There Are No Items on Your Cart");  
                $("#checkout-modal").find(".icon").removeClass("success error");  
                $("#checkout-modal").find(".icon").html('');  
                $("#checkout-modal").fadeIn();  
            }
            
            $('.shopping-cart').popover('destroy'); //remove the shopping cart popover
            
            updateCart();
            
            
        </script>    
    </body>
</html>
