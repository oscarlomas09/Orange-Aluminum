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
                <div class="col-xs-12 col-sm-9" style="font-size:1.2em;">
                    <a class="btn btn-warning" href="<?php echo BASE_URL;?>"><span class="glyphicon glyphicon-arrow-left">&nbsp;</span>Back to Shopping</a><br><br>
                    <h2>Forgot Password?</h2><hr>
                    <form>
                        <h4>Please enter your email address below. You will receive a link to reset your password.</h4>
                        <label for="forgot-email"><small style="color:red;">*</small> Email Address:</label><br>
                        <input id="forgot-email" type="email" placeholder="Email"/> <hr>
                        <div style="text-align:right;"><small style="color:red;">*Required Fields</small></div>
                        <button type="submit" class="btn btn-warning" style="font-size:1.2em;float:right;">Submit</button>
                    </form>
                </div>
                <div class="hidden-xs col-sm-3">
                    <?php include("../../php/includes/side-content.php"); ?>
                </div>
            </div>
        </div>
        <?php include("../../php/includes/chat.php"); ?>
        <?php include("../../php/includes/footer.php"); ?>
        <?php include("../../php/includes/script-js.php"); ?>
    </body>
</html>
