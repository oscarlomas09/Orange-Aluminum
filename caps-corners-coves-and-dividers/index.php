<?php include("../php/helper.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Caps, Corners, Coves, and Dividers</title>
        <meta name="description" content="">
        <?php include("../php/includes/header-files.php"); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a ="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("../php/includes/header.php"); ?>
        <?php include("../php/includes/navbar.php"); ?>
        <?php include("../php/includes/mobile-navigation.php"); ?>
        <!-- Content Just for this Page -->
        <main class="container-fluid common-container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="container-fluid">
                        <div class="row">
                            <ol class="breadcrumb">
                              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
                              <li>Caps, Corners, Coves, and Dividers</li>
                            </ol>
                            <h2>Caps, Corners, Coves, and </h2>
                            <hr>
                            <a href="<?php echo BASE_URL;?>caps-corners-coves-and-dividers/corners.php" class="col-xs-6 col-sm-3 col-md-2">
                               <div class="product-img">
                                   <img src="<?php echo BASE_URL;?>img/products/dividers/corners.jpg" alt="Closet"/>
                                   <div class="icon"><h1><span class="icon-corners"></span></h1></div>
                                </div>
                                <h5 class="text-center">Corners</h5>
                            </a>
                            <a href="<?php echo BASE_URL;?>caps-corners-coves-and-dividers/divider-bar.php" class="col-xs-6 col-sm-3 col-md-2">
                               <div class="product-img">
                                   <img src="<?php echo BASE_URL;?>img/products/dividers/divider.jpg" alt="Divider Bars"/>
                                   <div class="icon"><h1><span class="icon-divider"></span></h1></div>
                                </div>
                                <h5 class="text-center">Divider Bars</h5>
                            </a>
                            <a href="<?php echo BASE_URL;?>caps-corners-coves-and-dividers/j-cap.php" class="col-xs-6 col-sm-3 col-md-2">
                               <div class="product-img">
                                   <img src="<?php echo BASE_URL;?>img/products/dividers/j-cap.jpg" alt="J-Cap Edge Trim"/>
                                   <div class="icon"><h1><span class="icon-j-cap"></span></h1></div>
                                </div>
                                <h5 class="text-center">J Cap Edge Trim</h5>
                            </a>
                        </div><br>
                    </div>
                </div>
            </div>
        </main>
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
