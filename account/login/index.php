<?php include("../../php/helper.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Create Account</title>
        <meta name="description" content="">
        <?php include("../../php/includes/header-files.php"); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("../../php/includes/header.php"); ?>
        <?php include("../../php/includes/navbar.php"); ?>
        <?php include("../../php/includes/mobile-navigation.php"); ?>
        <div class="common-container container-fluid">
            <div class="row">
                <div class="col-xs-12" style="font-size:1.2em;">
                    <a class="btn btn-warning" href="<?php echo BASE_URL;?>"><span class="glyphicon glyphicon-arrow-left">&nbsp;</span>Back to Shopping</a><br><br>
                    <h2>Login or Create an Account</h2><hr>
                </div>
                <div class="col-xs-12 col-sm-5">
                   <h3 style="margin-top: 0;"><span class="glyphicon glyphicon-user"></span> Registered Customers</h3>
                    <form id="login-form">
                        <label for="login-email">Email:</label><br>
                        <input id="login-email" type="email" placeholder="Email"/> <br>
                        <label for="login-password">Password:</label><br>
                        <input id="login-password" type="password" placeholder="password"/> <br>
                        <button id="login-btn">Log In</button><br>
                        
                        <a href="<?php echo BASE_URL; ?>account/forgotpassword/" style="display:block;">Forgot Password?</a>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-2">&nbsp;</div>
                <div class="col-xs-12 col-sm-5">
                   <h3 style="margin-top: 0;"><span class="glyphicon glyphicon-file"></span> New Customers</h3>
                   <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    <a href="<?php echo BASE_URL; ?>account/create/" class="btn btn-warning">Create Account</a>
                </div>
            </div>
        </div>
        <?php include("../../php/includes/chat.php"); ?>
        <?php include("../../php/includes/footer.php"); ?>
        <?php include("../../php/includes/script-js.php"); ?>
    </body>
</html>
