<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>About Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/icons.css" rel="stylesheet">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("php/includes/header.php"); ?>
        <?php include("php/includes/navbar.php"); ?>
        <?php include("php/includes/mobile-navigation.php"); ?>
        <div class="container-fluid common-container">
            <div class="row">
                <div class="col-xs-12 col-sm-9" style="font-size:1.2em;">
                    <a class="btn btn-warning" href="index.php"><span class="glyphicon glyphicon-arrow-left">&nbsp;</span>Back to Shopping</a><br><br>
                    <h2>Same Day Delivery Zone</h2><hr>
                    <p>It is simple: order by 11 am and we can have it on a truck for delivery by 5 pm the same day! Live just outside of our zone or in the Inland Empire? Give us a call for a delivery quote - we may be able to have your order delivered by 5 pm.<br><br>

Most orders are only $15!</p>
                    
                    <div class="jumbotron" style="padding:0;">
                        <img src="img/delivery-zone.jpg" alt="Shipping"/>
                    </div>
                </div>
                <div class="hidden-xs col-sm-3">
                    <?php include("php/includes/side-content.php"); ?>
                </div>
            </div>
        </div>
        <?php include("php/includes/chat.php"); ?>
        <?php include("php/includes/footer.php"); ?>
        <?php include("php/includes/script-js.php"); ?>
    </body>
</html>