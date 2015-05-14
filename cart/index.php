<?php include("../php/helper.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Your Shopping Cart</title>
        <meta name="description" content="">
        <?php include("../php/includes/header-files.php"); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("../php/includes/header.php"); ?>
        <div id="product-container" class="container-fluid common-container">
           <h1 style="color:#999999;"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Your Shopping Cart</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <div class="btn btn-warning" style="float:left;max-width:48%;overflow:hidden;">
                        <a href="<?php echo BASE_URL; ?>" style="color:white;"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back to Shopping</a>
                    </div>
                    <div class="btn btn-warning" style="float:right;max-width:48%;overflow:hidden;">
                        Secure Checkout&nbsp;<span class="glyphicon glyphicon-arrow-right"></span>
                    </div>
                    <div class="clearfix"></div><br>
                    <table id="cart-table">
                        <thead>
                            <th class="remove-col"></th>
                            <th class="img-col"></th>
                            <th class="info-col">Product</th>
                            <th class="qty-col">Qty</th>
                            <th class="price-col">Price</th>
                            <th class="total-col">Total</th>
                        </thead>
                        <tbody>
                            <tr><td colspan="6"><h3>No Items in Your Cart</h3></td></tr>
                        </tbody>
                    </table>
                    <div class="coupon-container">
                        <input type="text" placeholder="Enter Coupon Code Here..."/>
                        <button id="apply-coupon" class="btn btn-press">Apply</button>
                    </div>
                    <div class="btn-container">
                        <button id="update-cart" class="btn btn-press"><span class="glyphicon glyphicon-refresh"> </span> Update</button> 
                        <button id="clear-cart" class="btn btn-press"><span class="glyphicon glyphicon-trash"> </span> Clear Cart</button>   
                    </div>
                    <div class="clearfix"></div>
                    <div class="shipping-container">
                        <h3>Calculate Shipping</h3><hr style="margin:0 0 13px 0;">
                        <form>
                            <button id="shipping-btn" class="btn" type="submit">Estimate</button>
                            <div class="clearfix"></div>
                            <div class="shipping-section">
                                <label>State and Province*</label>
                                <select title="State/Province">
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
                            <div class="shipping-section">
                                <label>ZIP/Postal Code*</label>
                                <input type="text" size="8"/>
                            </div>
                            <div class="clearfix"></div>
                            <div id="shipping-methods">
                                <label>Shipping Method</label>
                                <select>
                                    <option selected>FedEx Ground - $9.34</option>
                                    <option> Express Saver - $18.11</option>
                                    <option>2 Day - $19.04</option>
                                    <option>Same Day - $15.00</option>
                                    <option>Overnight - $28.00</option>
                                    <option> Call (For Pickup Only) - $0.00</option>
                                </select>
                            </div>
                        </form>
                        <hr class="visible-xs">
                    </div>
                    <div class="totals-container">
                        <table id="totals-table">
                            <tr><td>Subtotal:</td><td><span id="subtotal" data-value="54">$54.00</span></td></tr>
                            <tr><td>Tax:</td><td><span id="tax" data-value="0.69">$0.69</span></td></tr>
                            <tr><td>Shipping:</td><td><span id="shipping-fee" data-value="0">$0.00</span></td></tr>
                            <tr><td><h3>Grand Total:</h3></td><td><h3 id="grand-total" data-value="54.69">$54.69</h3></td></tr>
                        </table>
                        <div class="clearfix"></div>
                        <button id="checkout-btn" class="btn btn-press btn-lg">Proceed to Checkout   <span class="glyphicon glyphicon-arrow-right"></span></button>
                    </div>
                </div>
                <div class="hidden-xs col-sm-3"><?php include("../php/includes/side-content.php") ?></div>
            </div>
        </div>
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
        
        <script>      
            function updateCart(){    
                $(".qty-col input").each(function(){
                    $(this).trigger("change");
                });
                var tax_rate = 0.09;
                var subtotal = 0,
                    total = 0,
                    tax = 0,
                    shipping = 0;
                $(".product").each(function(){
                    var price = parseFloat($(this).find(".total").data("price"));
                    var qty = parseInt($(this).find(".qty-col input").val());
                    subtotal += price * qty;
                });
                tax = subtotal*tax_rate;
                shipping = parseFloat($("#shipping-fee").data("value"));
                total = subtotal + tax + shipping;
                $("#subtotal").text("$"+subtotal.toFixed(2)).data("value",subtotal.toFixed(2));
                $("#tax").text("$"+tax.toFixed(2)).data("value", tax.toFixed(2));
                $("#grand-total").text("$"+total.toFixed(2)).data("value",total.toFixed(2));
            }
            function cartRow(){
                cart_row = "";
                for(var i=0; i< cart_items.length; i++){
                    cart_row += '<tr class="product"><td class="remove-col"><span class="glyphicon glyphicon-remove"></span></td><td class="img-col"><img src="../img/products/clips/5337_6.jpg"/></td><td class="info-col"><h3>'+cart_items[i].title+'</h3><span class="info-sku" data-sku="'+cart_items[i].sku+'">SKU: '+cart_items[i].sku+'</span></td><td class="qty-col"><input type="number" min="1" max="9999" value="'+cart_items[i].quantity+'" max="9999" /></td><td class="price-col"><span>$'+parseFloat(cart_items[i].price).toFixed(2)+'</span></td><td class="total-col"><span class="total" data-price="'+(parseFloat(cart_items[i].price)).toFixed(2)+'">$'+(parseInt(cart_items[i].quantity) * parseFloat(cart_items[i].price)).toFixed(2)+'</span></td></tr>';
                }            
                $("#cart-table tbody").empty();
                $("#cart-table tbody").html(cart_row);
            }
            if(cart_items.length > 0){
                cartRow();
            }
            //update subtotal price per item
            $(document).on("change",".qty-col input", function(){
                var $parent_row = $(this).closest("tr"),
                    qty = parseInt($(this).val()),
                    price = parseFloat($parent_row.find(".total").data("price")),
                    total = parseFloat(qty * price).toFixed(2);
                $parent_row.find(".total").text("$" + total).data(total); 
            }).on("blur",".qty-col input", function(){
                var $parent_row = $(this).closest("tr"),
                    qty = parseInt($(this).val());
                    sku = $parent_row.find(".info-sku").data("sku");
                updateItem(sku, qty);
                updateCart();
            });
            
            $(document).on("click",".remove-col", function(){
                var sku = $(this).siblings(".info-col").children(".info-sku").data("sku");
                $(this).closest("tr").remove(); 
                removeItem(sku);
                if(cart_items.length > 0){
                    cartRow();
                }
                else{
                    location.reload();
                }
            });

            $("#clear-cart").click(function(){
                showProgress(500, 100);
                setTimeout(function(){
                    window.localStorage.clear();
                    location.reload();
                }, 800);
            });
            $("#update-cart").click(function(){
                showProgress(100, 100);
                updateCart();
            });
            updateCart();
        </script>
        
    </body>
</html>
