<?php 
    include("../php/helper.php");
    $base_url = getBaseUrl();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Bar Stock</title>
        <meta name="description" content="">
        <?php include("../php/includes/header-files.php"); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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
                              <li>Bar Stock</li>
                            </ol>
                            <h2>Bar Stock</h2>
                            <p>Standard Aluminum profiles: 6061 structural alloy to 6063 architectural grade, from mill to clear anodized finishes.</p>
                            <hr>
                        <a href="<?php echo BASE_URL;?>bar-stock/angles.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/angles.png" />
                                <div class="icon"><h1><span class="icon-angle"></span></h1></div>
                            </div>
                            <h5 class="text-center">Angles</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/channels.php" class="col-xs-4 col-sm-2">   
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/channels.png" />
                                <div class="icon"><h1><span class="icon-channel"></span></h1></div>
                            </div>
                            <h5 class="text-center">Channels</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/flat-bars.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/flat.png" />
                                <div class="icon"><h1><span class="icon-flat" style="width:100%;position:absolute;top:50%;margin-top:-1em;"></span></h1></div>
                            </div>
                            <h5 class="text-center">Flat Bars</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/flat-bars-radiused.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/radiused.png" />
                                <div class="icon"><h1><span class="icon-flat-radiused" style="width:100%;position:absolute;top:50%;margin-top:-1em;"></span></h1></div>
                            </div>
                            <h5 class="text-center">Radiused Bars</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/h-sections.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/h-section.png" />
                                <div class="icon"><h1><span class="icon-h-section"></span></h1></div>
                            </div>
                            <h5 class="text-center">H Sections</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/half-rounds.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/half.png" />
                                <div class="icon"><h1><span class="icon-half-round" style="width:100%;position:absolute;top:50%;margin-top:-0.75em;"></span></h1></div>
                            </div>
                            <h5 class="text-center">Half Rounds</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/hex-bars.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/hex.png" />
                                <div class="icon"><h1><span class="icon-hex"></span></h1></div>
                            </div>
                            <h5 class="text-center">Hex Bars</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/square-tubes.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/square.png" />
                                <div class="icon"><h1><span class="icon-square-hollow"></span></h1></div>
                            </div>
                            <h5 class="text-center">Square Tubes</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/round-rod.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/rod.png" />
                                <div class="icon"><h1><span class="icon-round-rod"></span></h1></div>
                            </div>
                            <h5 class="text-center">Round Rods</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/round-tube.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/tube.png" />
                                <div class="icon"><h1><span class="icon-round-tube"></span></h1></div>
                            </div>
                            <h5 class="text-center">Round Tubes</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/tee-bars.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/tee.png" />
                                <div class="icon"><h1><span class="icon-tee-bar"></span></h1></div>
                            </div>
                            <h5 class="text-center">Tee Bars</h5>
                        </a>
                        <a href="<?php echo BASE_URL;?>bar-stock/z-bars.php" class="col-xs-4 col-sm-2">
                            <div class="product-img">
                                <img src="<?php echo BASE_URL;?>/img/flat/z-bar.png" />
                                <div class="icon"><h1><span class="icon-z-bar"></span></h1></div>
                            </div>
                            <h5 class="text-center">Z Bars</h5>
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
