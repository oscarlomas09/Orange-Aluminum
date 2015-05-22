<?php 
    include("php/helper.php"); 
    $file = "docs/products.csv";
    if(isset($_GET['sku'])) {
        $sku = $_GET['sku'];
    }
    else{
        $sku = "";
    }
    //defaults
    $title = "Not Found";
    $description = '';
    $overview = '';
    $price = 0;
    $img = "img/products/not_found.jpg";
    $cart = '';
    $stock = '';
    $row = 0;
    
    $today = time();
    //Before 12PM
    if(date('G') <= 12){
       $tomorrow =  strtotime(date("Y-m-d 12:00"));
    }
    else{        
        //check if today is Friday, Saturday or Sunday
        if(date("N") >= 5){
            $tomorrow = strtotime(date("Y-m-d 12:00",strtotime("next Monday"))); //next day delivery would be the following monday
        }
        else{
            $tomorrow = strtotime(date("Y-m-d 12:00",strtotime('tomorrow')));
        }
    }
    $diff = $tomorrow - $today;
    $same_day = "";

    if (($handle = fopen($file, "r")) !== FALSE) {
        /***** CSV FILE STRUCTURE *******/
        /*
             0  |      1      |   2  |   3   |          4        |   5  
            SKU | Description | Name | Price | Short Description | Image
        */
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            //add this heading title to the products array as an index
            if($row < 1){
                $row++;
                continue;
            } 
            $i = 0;
            $row++;
            
            //check if the SKUs match
            if($sku == $data[0]){
                $description = $data[1];
                $title = $data[2];
                $price = $data[3];
                $overview = $data[4];
                $img = "http://www.orangealuminum.com/".$data[5];
                $cart = '<div class="add-cart" style="float:none;">                         
                      <label class="sr-only">Quantity</label>    
                      <input type="number" id="product-qty" min="0" value="1">
                      <button type="submit" id="product-add" data-sku="'.$sku.'">
                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                      </button>   
                   </div>
                    <div class="clearfix"></div><br>
                   <h4 id="successful-add" class="good" style="display:none;">Product Added!</h4>
                   <button class="btn btn-default" data-toggle="modal" data-target="#quote-modal">Customize</button>
                   <button class="btn btn-default">+ Wishlist</button>
                   <br><br>
                   <h4>Share This Item</h4>
                   <a class="share-link"><span class="icon-facebook"></span></a>
                   <a class="share-link"><span class="icon-twitter"></span></a>
                   <a class="share-link"><span class="icon-pinterest"></span></a>
                   <a class="share-link"><span class="glyphicon glyphicon-envelope"></span></a>';
                $stock = "In Stock";
                $same_day = 'Want it by '. date('l, F j', $tomorrow). '? Order within <span class="good">' .seconds2human($diff) .'</span> and choose Same Day Delivery at checkout!';
            }
            else{
                continue;   //product not found
            }
        }
        fclose($handle);
    }
?>
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
                    <img class="product-img" src="<?php echo $img; ?>" alt="Product Image"/><br>
                </div>
                <div class="col-xs-12 col-sm-1">
                    <img class="product-img tiny-img" src="<?php echo $img; ?>" alt="Product Thumbnail"/><br>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <h2 id="product-title"><?php echo $title; ?></h2>
                    <h4 id="product-sku">SKU: <?php echo $sku; ?></h4>
                    <h4 id="product-price" data-price="<?php echo $price; ?>"><strong>$<?php echo number_format(floatval($price), 2, '.', ''); ?></strong></h4>
                    <p class="delivery"><?php echo $same_day; ?></p>
                    <h5 id="product-stock" class="good"><?php echo $stock; ?></h5>
                    <br>
                    <!-- <div class="options">
                        <h4 class="option-title">Cut Length</h4>
                        <>
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
                    </div> -->
                    <br>
                   <?php echo $cart; ?>                   
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 hidden-xs">
                    <h3>Product Description</h3><hr>
                    <p><?php echo $description; ?></p>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h3>Quick Overview</h3><hr>
                    <p><?php echo $overview; ?></p>
                </div>
            </div>
            <div class="row">
                <img src="img/charity.jpg" />
            </div>
            <?php include("php/includes/quote.php"); ?>
        </div> 
        <?php include("php/includes/chat.php"); ?>
        <?php include("php/includes/footer.php"); ?>
        <?php include("php/includes/script-js.php"); ?>
        <script>
            $("#custom-quote").remove();
        </script>
    </body>
</html>
