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
                    <h2>Create an Account</h2><hr>
                    <form class="form-horizontal register_form">
                      <h3 class="good"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Personal Information&nbsp;&nbsp;</h3>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">First Name:<small style="color:red;">*</small></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="registerFirstName" placeholder="First Name" required>
                        </div>
                      </div>                     
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Last Name:<small style="color:red;">*</small></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="registerLastName" placeholder="Last Name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Email:<small style="color:red;">*</small></label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="registerEmail" placeholder="Email" required>
                        </div>
                      </div>
                      <h3 class="good"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;Login Information&nbsp;&nbsp;</h3>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Password:<small style="color:red;">*</small></label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="registerPassword" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Confirm:<small style="color:red;">*</small></label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="conformPassword" placeholder="Password" required>
                        </div>
                      </div>
                    </form>
                    <div style="text-align:right;"><small style="color:red;">*Required Fields</small></div>
                    <button type="submit" class="btn btn-warning" style="font-size:1.2em;float:right;">Submit</button>
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
