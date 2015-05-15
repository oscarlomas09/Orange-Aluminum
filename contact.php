<?php include("php/helper.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Company News</title>
        <meta name="description" content="">
        <?php include("php/includes/header-files.php"); ?>
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
                    <a class="btn btn-warning" href="<?php echo BASE_URL;?>"><span class="glyphicon glyphicon-arrow-left">&nbsp;</span>Back to Shopping</a><br><br>
                    <h2 id="contact-feedback">Contact Us</h2><hr>
                    <table style="width:100%;" class="form-panel">
                        <thead><th colspan="2">Contact Information</th></thead>
                    </table>
                    <div class="container-fluid form-panel">
                        <div class="row">
                            <form id="contact-form">
                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <label>Inquiry*</label><br>
                                        <select name="inquiry" id="inquiry" class="required-entry validate-select">
                                            <option value="general_inquiries">General Inquiries</option>
                                            <option value="order_inquiries">Order Inquiries</option>
                                            <option value="distribution_inquiries">Distribution Inquiries</option>
                                            <option value="custom_profile_inquiry">Custom Profile Inquiry</option>
                                            <option value="volume_discounts">Volume Discounts</option>
                                            <option value="samplecatalog_request">Sample/Catalog Request</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label>First Name</label><br>
                                        <input type="text" name="first_name"/>
                                    </div>
                                    <div>
                                        <label>Last Name</label><br>
                                        <input type="text" name="last_name"/>
                                    </div>
                                    <div>
                                        <label>Business Name</label><br>
                                        <input type="text" name="business_name"/>
                                    </div>
                                    <div>
                                        <label>Email*</label><br>
                                        <input type="email" name="contact_email" required />
                                    </div>
                                    <div>
                                        <label>Telephone</label><br>
                                        <input type="tel" name="telephone"/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">                                    
                                    <div>
                                        <label>Comments</label><br>
                                        <textarea rows="8" name="comments" style="resize:vertical;width:100%;max-height:300px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12"> 
                                    <input type="submit" value="Submit" class="btn btn-warning" style="font-size:1.2em;float:right;"/>
                                </div>
                            </form>
                        </div>
                    </div><br>
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
