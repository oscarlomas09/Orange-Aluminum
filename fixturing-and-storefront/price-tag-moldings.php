<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Price Tag Moldings</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">
        
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../css/icons.css" rel="stylesheet">
        
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="../js/vendor/respond-.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("../php/includes/header.php"); ?>
        <?php include("../php/includes/navbar.php"); ?>
        <?php include("../php/includes/mobile-navigation.php"); ?>
        
        <!-- Content Just for this Page -->
        <div class="jumbotron"><img src="../img/jumbotron/Assembled_2.jpg" alt=""></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="../index.php">Home</a></li>
              <li><a href="../fixturing-and-storefront.php">Fixturing and Storefront</a></li>
              <li>Price Tag Moldings</li>
            </ol>
            <!-- Modal Window for Tolerance Table-->
            <div class="modal fade" id="toleranceModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-../title" id="myMod../alLabel">Standard System of Measurement Inch Material</h4>
                        </div>
                        <div class="modal-body">
                            <img src="../img/tolerance.jpg" alt="Tolerance Table" style="max-width:100%;"/>
                        </div>
                    </div>
                </div>
            </div>
            <div id="filter-btn" class="visible-xs" data-toggle="collapse" data-target="#filters" aria-expanded="false" aria-controls="filters"><span class="glyphicon glyphicon-tasks"></span> Filter</div>
            <div class="row">
                <aside class="col-xs-12 col-sm-3">
                    <div class="filter clearfix" id="filters">
                        <h3>Price Tag Moldings <span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <section class="filter-content">
                            <div class="cut filter-type">
                               <span class="filter-title">Cut Length</span>
                               <form id="cut-form">
                                   <div class="filter-option">
                                       <input type="radio" id="cut-six" name="cut-length" value="fixed" checked/>
                                       <label for="cut-six"><span></span>6'</label>
                                   </div>
                               </form>
                            </div>
                            <div class="finish filter-type">
                               <span class="filter-title">Finish</span>
                               <form id="clips-finish-form">
                                   <div class="filter-option">
                                       <input type="radio" id="polished" name="finish" value="fixed" checked/>
                                       <label for="polished"><span></span>Mechanical Polished</label>
                                   </div>
                               </form>
                            </div>
                            <div class="alloy filter-type">
                               <span class="filter-title">Alloy & Temper</span>
                               <form id="clips-alloy-form">
                                   <div class="filter-option">
                                       <input type="radio" id="alloy" name="alloy" value="fixed" checked/>
                                       <label for="alloy"><span></span>6063-T5</label>
                                   </div>
                               </form>
                            </div>
                            <div class="alloy filter-type">
                               <span class="filter-title">Ticket Size</span>
                               <form id="ticket-size">
                                   <div class="filter-option">
                                       <input type="radio" id="ticket-five-eight" name="tickets" value="ticket-five-eight"/>
                                       <label for="ticket-five-eight"><span></span>5/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="ticket-seven-eight" name="tickets" value="ticket-seven-eight"/>
                                       <label for="ticket-seven-eight"><span></span>7/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="ticket-one-seven-sixtyfour" name="tickets" value="ticket-one-seven-sixtyfour"/>
                                       <label for="ticket-one-seven-sixtyfour"><span></span>1-7/64"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="ticket-one-nine-sixtyfour" name="tickets" value="ticket-one-nine-sixtyfour"/>
                                       <label for="ticket-one-nine-sixtyfour"><span></span>1-9/64"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="ticket-all" name="tickets" value="ticket-all"/>
                                       <label for="ticket-all"><span></span>All of the Above</label>
                                   </div>
                               </form>
                            </div>
                            <div class="alloy filter-type">
                               <span class="filter-title">Ticket Size</span>
                               <form id="material-size">
                                   <div class="filter-option">
                                       <input type="radio" id="material-three-quarter" name="material" value="material-three-quarter"/>
                                       <label for="material-three-quarter"><span></span>3/4"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="material-one-one-eight" name="material" value="material-one-one-eight"/>
                                       <label for="material-one-one-eight"><span></span>1-1/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="material-one-quarter" name="material" value="material-one-quarter"/>
                                       <label for="material-one-quarter"><span></span>1-1/4"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="material-one-fifteen-thirtytwo" name="material" value="material-one-fifteen-thirtytwo"/>
                                       <label for="material-one-fifteen-thirtytwo"><span></span>1-15/32"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="material-three" name="material" value="material-three"/>
                                       <label for="material-three"><span></span>3-25/41"</label>
                                   </div>
                               </form>
                            </div>
                            <div class="clearfix"></div>
                            <div id="reset-btn" class="text-center clearfix">Reset Filters</div>
                        </section>
                    </div>
                </aside>
                <div class="col-xs-12 col-sm-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Product Info</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12">
                                    <p>Add function and style with our mechanically polished aluminum architectural price tag molding. For use with material thicknesses of 3/4”, 1-1/8”, 1-1/4”, 1-15/32” and 3-3/5”. Designed to mount as edge trim on the front of shelves and fastened with screws through the face of the profile.</p>
                                    <table style="width:100%;">
                                        <tr>
                                            <td><b>Alloy</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="Ultra-Corrosive Resistant Architectural Grade Alloy">6063-T5</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Finish</b></td>
                                            <td style="width:75%;">Mechanical Polished</td>
                                        </tr>
                                        <tr>
                                            <td><b>Cut Length</b></td>
                                            <td style="width:75%;">6' Cut Lengths</td>
                                        </tr>
                                        <tr>
                                            <td><b>Tolerance</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="modal" data-target="#toleranceModal">Standard System of Measurement Inch Material</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>MET</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="ASTM is the American Society for Testing and Materials.">ASTM</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FLUTED PRICE TAG MOLDING -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">FLUTED PRICE TAG MOLDING</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="" src="img/tile-tall.jpg"/>
                                </div>
                                <div class="col-xs-12 col-md-10 visible-md visible-lg">
                                  <p>Punched holes 6” on Center to Accommodate #5 Screws. <br>
• For Use with material thickness of 3/4”.<br>
• Designed to Mount Atop Material via a 1/8” Routed <br>
• Available in 3/4” (0.750”) Width; 1-3/8” Tall (1.375”)</p>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>SKU</th>
                                      <th>Ticket Size</th>
                                      <th>Material Size</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA7900" class="accordion-toggle ticket-five-eight material-three-quarter">
                                      <th scope="row">OA7900</td>
                                      <td>5/8"</td>
                                      <td>3/4"</td>
                                      <td>$9.96</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA7900" style="padding:8px 13px;">
                                                <h4 class="text-center">FLUTED PRICE TAG MOLDING</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA7900-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>                                   
                                    <tr data-toggle="collapse" data-target="#collapse-OA7899" class="accordion-toggle ticket-seven-eight material-one-one-eight">
                                      <th scope="row">OA7899</td>
                                      <td>7/8"</td>
                                      <td>1-1/8</td>
                                      <td>$10.85</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA7899" style="padding:8px 13px;">
                                                <h4 class="text-center">FLUTED PRICE TAG MOLDING</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA7899-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>                              
                                    <tr data-toggle="collapse" data-target="#collapse-OA6387" class="accordion-toggle ticket-one-seven-sixtyfour material-one-fifteen-thirtytwo">
                                      <th scope="row">OA6387</td>
                                      <td>1-7/64"</td>
                                      <td>1-15/32"</td>
                                      <td>$11.17</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA6387" style="padding:8px 13px;">
                                                <h4 class="text-center">FLUTED PRICE TAG MOLDING</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA6387-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- CONCAVE PRICE TAG MOLDING -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">CONCAVE PRICE TAG MOLDING</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="" src="img/tile-tall.jpg"/>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>SKU</th>
                                      <th>Ticket Size</th>
                                      <th>Material Size</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA7898" class="accordion-toggle ticket-one-nine-sixtyfour material-one-quarter">
                                      <th scope="row">OA7898</td>
                                      <td>1-9/64"</td>
                                      <td>1-1/4"</td>
                                      <td>$9.06</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA7898" style="padding:8px 13px;">
                                                <h4 class="text-center">CONCAVE PRICE TAG MOLDING</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA7898-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>                                   
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- CONCAVE PRICE TAG MOLDING -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">UNIVERSAL PRICE TAG MOLDING</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="" src="img/tile-tall.jpg"/>
                                </div>
                                
                                <div class="col-xs-12 col-md-10 visible-md visible-lg">
                                  <p>This versatile price tag molding not only adds function and style to your display but allows you to work with any size tag for your product info. <br>
• For Use with material thickness of 3/4”. <br>
• Designed to Mount Atop Material via a 1/8” Routed <br>
• Available in 3/4” (0.750”) Width; 1-3/8” Tall (1.375”)</p>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>SKU</th>
                                      <th>Ticket Size</th>
                                      <th>Material Size</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA7897" class="accordion-toggle ticket-all material-three">
                                      <th scope="row">OA7897</td>
                                      <td>All of the Above</td>
                                      <td>3-25/41"</td>
                                      <td>$21.78</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA7897" style="padding:8px 13px;">
                                                <h4 class="text-center">UNIVERSAL PRICE TAG MOLDING</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA7897-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>                                   
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <!-- Include all compiled plugins (below), or  individual files as needed -->
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
