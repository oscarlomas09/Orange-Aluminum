<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Product Page</title>
        <meta name="description" content="">
        <?php include("php/includes/header-files.php"); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("php/includes/header.php"); ?>
        <?php include("php/includes/navbar.php"); ?>
        <?php include("php/includes/mobile-navigation.php"); ?>
        <div id="product-container" class="container-fluid common-container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <img class="product-img" src="img/products/clips/5337_6.jpg" alt="Product Image"/><br>
                </div>
                <div class="col-xs-12 col-sm-1">
                    <img class="product-img tiny-img" src="img/products/clips/5337_6.jpg" alt="Product Thumbnail"/><br>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <h2 class="product-title">Panel Rail and Clip, Style 1</h2>
                    <h4 class="product-sku">SKU: OA5337</h4>
                    <h4 class="product-price"><strong>$9.06</strong></h4>
                    <p class="delivery">Want it Thursday, April 30? Order within <span class="good">19 hrs 06 min</span> and choose Same Day Delivery at checkout!</p>
                    <h5 id="product-stock" class="good">In Stock</h5>
                    <br>
                    <div class="options">
                        <h4 class="option-title">Cut Length</h4>
                        <form>
                           <div class="filter-option">
                               <input type="radio" id="cut-clips" name="cut" value="cut-clips"/>
                               <label for="cut-clips"><span></span>Clips (20pcs)</label>
                           </div>
                           <div class="filter-option">
                               <input type="radio" id="cut-six" name="cut" value="cut-six" checked/>
                               <label for="cut-six"><span></span>6' + ($0.30)</label>
                           </div>
                           <div class="filter-option">
                               <input type="radio" id="cut-twelve" name="cut" value="cut-twelve"/>
                               <label for="cut-twelve"><span></span>12' + ($9.36)</label>
                           </div>
                       </form>
                       <br>
                       <div class="add-cart" style="float:none;">                         
                          <label class="sr-only">Quantity</label>    
                          <input type="number" id="'.$item.'-qty" min="0" value="1">
                          <button type="submit">
                              <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                          </button>
                       </div>
                        <div class="clearfix"></div><br>
                       <button class="btn btn-default">Customize</button>
                       <button class="btn btn-default">+ Wishlist</button>
                       <br><br>
                       <h4>Share This Item</h4>
                       <a class="share-link"><span class="icon-facebook"></span></a>
                       <a class="share-link"><span class="icon-twitter"></span></a>
                       <a class="share-link"><span class="icon-pinterest"></span></a>
                       <a class="share-link"><span class="glyphicon glyphicon-envelope"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 hidden-xs">
                    <h3>Product Description</h3><hr>
                    <p>Mill Finish Aluminum Panel Rails and Clips, Style 1, Panel Rails and Clips are Designed for Two of the Sections to Wedge Together, Securely Locking Panels in Place. Ideal for Hanging Wall Panels, Partitions, and Signs. Lift-off Clearance of 5/8" Required for Installation and Removal. Overall Height when Mounted is 3-1/8" (Style 1 Has Less Offset and Larger Lift-Off Than Style 2 with Larger Offset and Smaller Lift-Off.)</p>
                    <ul>
                        <li>3/16" Offset x 5/8" Drop (.175" x .625")</li>
                        <li>Available in 1.5" Clips, 6 Foot and 12 Foot Cut Lengths</li>
                        <li>Mill Finish, Per American Society for Testing and Materials (ASTM)</li>
                        <li>6063 Ultra-Corrosive Resistant Architectural Grade Alloy, T5 Temper</li>
                        <li>Rails Punched 8" OC for #8 Screws; Clips are Punched with 2 holes</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h3>Quick Overview</h3><hr>
                    <p>Ideal for hanging wall panels, signs, artwork, cabinets & more.</p>
                    <ul>
                        <li>3/16" Offset x 5/8" Drop (.175" x .625")</li>
                        <li>Available in 1.5" Clips, 6 Foot and 12 Foot Cut Lengths</li>
                        <li>Mill Finish</li>
                        <li>6063-T5</li>
                        <li>Available Punched 8" On Center</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <img src="img/charity.jpg" />
            </div>
        </div>
        <?php include("php/includes/chat.php"); ?>
        <?php include("php/includes/footer.php"); ?>
        <?php include("php/includes/script-js.php"); ?>
    </body>
</html>
