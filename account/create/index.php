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
                    <form>
                       <table>
                           <thead><th colspan="4"><h3 class="good"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Personal Information&nbsp;&nbsp;</h3></th></thead>
                           <tbody>
                               <tr>
                                   <td style="text-align:right;"><label for="create-name">First Name:<small style="color:red;">*</small></label></td>
                                   <td style="width:30%;padding:21px 8px;"><input id="create-name" type="text" placeholder="First Name" required//></td>
                                   <td style="text-align:right;"><label for="create-last">Last Name:<small style="color:red;">*</small></label></td>
                                   <td style="width:30%;padding:21px 8px;"><input id="create-last" type="text" placeholder="Last Name" required//></td>
                               </tr>
                               <tr>
                                   <td style="text-align:right;"><label for="create-email">Email:</label><small style="color:red;">*</small></td>
                                   <td style="width:30%;padding:21px 8px;"><input id="create-email" type="email" placeholder="Email" required/></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                           </tbody> 
                       </table>
                       <table>
                           <thead><th colspan="4"><h3 class="good"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;Login Information&nbsp;&nbsp;</h3></th></thead>
                           <tbody>
                               <tr>
                                   <td style="text-align:right;"><label for="create-password">Password:<small style="color:red;">*</small></label></td>
                                   <td style="width:30%;padding:21px 8px;"><input id="create-password" type="password" placeholder="" required//></td>
                                   <td style="text-align:right;"><label for="create-confirm">Confirm:<small style="color:red;">*</small></label></td>
                                   <td style="width:30%;padding:21px 8px;"><input id="create-confirm" type="password" placeholder="" required//></td>
                               </tr>
                           </tbody> 
                       </table>
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
