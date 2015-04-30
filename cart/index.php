<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Shopping Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <!-- Bootstrap -->
        <link href="../_dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../css/icons.css" rel="stylesheet">
        
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="../js/vendor/respond-1.4.2.min.js"></script>
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
                    <div class="btn btn-warning" style="float:left;">
                        <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back to Shopping
                    </div>
                    <div class="btn btn-warning" style="float:right;">
                        Secure Checkout&nbsp;<span class="glyphicon glyphicon-arrow-right"></span>
                    </div>
                    <div class="clearfix"></div><br>
                    <table id="shopping-cart-panel" style="width:100%;">
                       <thead>
                            <th colspan="2">Product</th>
                            <th style="text-align:center;">Unit Price</th>
                            <th style="text-align:center;">Qty</th>
                            <th>Subtotal</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="tiny-img hidden-xs" src="../img/products/clips/5337_6.jpg"/></td>
                                <td>
                                    <h4>Panel Rail and Clip, Style 1</h4>
                                    <strong>Cut Length</strong><br>
                                    <span class="option-value">6'</span>
                                    <strong class="product-sku">SKU</strong><span>OA5337</span>
                                </td>
                                <td style="text-align:center;">$9.36</td>
                                <td style="text-align:center;"><input type="number" min="1" max="9999" name="" id="" value="1"/></td>
                                <td>$9.36</td>
                                <td>
                                    <a class="cart-link remove-item"><span class="glyphicon glyphicon-remove"></span>&nbsp;Remove<br></a>
                                    <a class="cart-link add-wishlist"><span class="glyphicon glyphicon-plus"></span>&nbsp;Wishlist</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="shopping-cart-buttons" class="clearfix">
                        <button class="shopping-btn"><span class="glyphicon glyphicon-trash"></span>&nbsp;Clear Cart</button>
                        <button class="shopping-btn"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Update Cart</button>
                    </div>
                    <div id="shoppping-options-container" class="container-fluid">
                        <div class="col-xs-12 col-sm-4 col-sm-push-8">
                            <table style="float:right;text-align:right;">
                                <tr><td style="padding-right:13px;">Subtotal</td><td>$9.36</td></tr>
                                <tr><td style="padding-right:13px;">Tax</td><td>$0.75</td></tr>
                                <tr style="font-size:1.3em;"><td style="padding-right:13px;"><strong>Grand Total</strong></td><td><strong>$10.11</strong></td></tr>
                            </table>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <h4>Using Promotional Code?</h4><hr style="margin-top:0;">
                            <label>Enter your coupon code if you have one*</label>
                            <input type="text" /><br><br>
                            <button class="btn btn-warning">Apply</button>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-pull-8">
                            <h4>Estimate Shipping and Tax</h4><hr style="margin-top:0;">
                            <label>State and Province*</label>
                            <select title="State/Province" style="max-width:100%;">
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
                            <br><br>
                            <label>ZIP/Postal Code*</label>
                            <input type="text" /><br><br>
                            <button class="btn btn-warning">Calculate</button>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs col-sm-3"><?php include("../php/includes/side-content.php") ?></div>
            </div>
        </div>
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <!-- Include all compiled plugins (below), or  individual files as needed -->
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
