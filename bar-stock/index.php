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
                                <img src="<?php echo BASE_URL;?>/img/products/bars/angles.jpg" alt="Angles" class="img-thumbnail">
                                <span>Angles</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/channels.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/channels.jpg" alt="Channels" class="img-thumbnail">
                                <span>Channels</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/flat-bars.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/flat.jpg" alt="Flat Bars" class="img-thumbnail">
                                <span>Flat Bars</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/flat-bars-radiused.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/flat-radiused.jpg" alt="Flat Bars: Radiused" class="img-thumbnail">
                                <span>Radiused</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/h-sections.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/h-bar.jpg" alt="H-Sections" class="img-thumbnail">
                                <span>H Sections</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/half-rounds.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/half-round.jpg" alt="Half Rounds" class="img-thumbnail">
                                <span>Half Rounds</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/hex-bars.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/hex.jpg" alt="Hex Bars" class="img-thumbnail">
                                <span>Hex Bars</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/square-tubes.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/square.jpg" alt="Square Tubes" class="img-thumbnail">
                                <span>Square Tubes</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/round-rod.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/rod.jpg" alt="Round Rods" class="img-thumbnail">
                                <span>Round Rod</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/round-tube.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/tube.jpg" alt="Round Tubes" class="img-thumbnail">
                                <span>Round Tubes</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/tee-bars.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/tee.jpg" alt="Tee Bars" class="img-thumbnail">
                                <span>Tee Bars</span>
                            </a>
                            <a href="<?php echo BASE_URL;?>bar-stock/z-bars.php" class="col-xs-4 col-sm-2">
                                <img src="<?php echo BASE_URL;?>/img/products/bars/z-bar.jpg" alt="Z-Bar" class="img-thumbnail">
                                <span>Z-Bars</span>
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
