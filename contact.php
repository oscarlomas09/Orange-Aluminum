<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Company News</title>
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
        <div class="common-container container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-9" style="font-size:1.2em;">
                    <a class="btn btn-warning" href="index.php"><span class="glyphicon glyphicon-arrow-left">&nbsp;</span>Back to Shopping</a><br><br>
                    <h2>Contact Us</h2><hr>
                    <form>
                        <table style="width:100%;" class="form-panel">
                            <thead><th colspan="2">Contact Information</th></thead>
                        </table>
                        <div class="container-fluid form-panel">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <label>Inquiry*</label><br>
                                        <select name="inquiry" id="inquiry" class="required-entry validate-select">
                                            <option value="general_inquiries">General Inquiries</option>
                                            <option value="order_inquiries">Order Inquiries</option>
                                            < value="distribution_inquiries">Distribution Inquiries</option>
                                            <option value="custom_profile_inquiry">Custom Profile Inquiry</option>
                                            <option value="volume_discounts">Volume Discounts</option>
                                            <option value="samplecatalog_request">Sample/Catalog Request</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label>First Name</label><br>
                                        <input type="text"/>
                                    </div>
                                    <div>
                                        <label>Last Name</label><br>
                                        <input type="text"/>
                                    </div>
                                    <div>
                                        <label>Business Name</label><br>
                                        <input type="text"/>
                                    </div>
                                    <div>
                                        <label>Email*</label><br>
                                        <input type="email" required/>
                                    </div>
                                    <div>
                                        <label>Telephone</label><br>
                                        <input type="tel"/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">                                    
                                    <div>
                                        <label>Comments</label><br>
                                        <textarea rows="8"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-warning" style="font-size:1.2em;float:right;">Submit</button>
                    </form>
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
