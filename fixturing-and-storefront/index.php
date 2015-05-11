<?php include("../php/helper.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Fixturing and Storefront</title>
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
                              <li>Fixturing and Storefront</li>
                            </ol>
                            <h2>Fixturing and Storefront</h2>
                            <hr>
                            <a href="ez-slatwall-system.php" class="col-xs-6 col-sm-3 col-md-2">
                                <img src="<?php echo BASE_URL;?>img/products/fixturing/ez-slatwall.jpg" alt="EZ Slatwall" class="img-thumbnail">
                                <span>EZ Slatwall System</span>
                            </a>
                            <a href="price-tag-moldings.php" class="col-xs-6 col-sm-3 col-md-2">
                                <img src="<?php echo BASE_URL;?>img/products/fixturing/price-tag.jpg" alt="Price Tag Molding" class="img-thumbnail">
                                <span>Price Tag Moldings</span>
                            </a>
                            <a href="slatwall-systems.php" class="col-xs-6 col-sm-3 col-md-2">
                                <img src="<?php echo BASE_URL;?>img/products/fixturing/slatwall.jpg" alt="Slatwall Systems" class="img-thumbnail">
                                <span>Slatwall Systems</span>
                            </a>
                            <a href="snap-frames.php" class="col-xs-6 col-sm-3 col-md-2">
                                <img src="<?php echo BASE_URL;?>img/products/fixturing/snap-frame.jpg" alt="Snap Frames" class="img-thumbnail">
                                <span>Snap Frames</span>
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
