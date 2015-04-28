<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Panel Rails and Clips</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/icons.css" rel="stylesheet">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/respond-.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("php/includes/header.php"); ?>
        <?php include("php/includes/navbar.php"); ?>
        <?php include("php/includes/mobile-navigation.php"); ?>
        
        <!-- Content Just for this Page -->
        <div class="jumbotron"><img src="img/jumbotron/Assembled_2.jpg" alt=""></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li>Panel Rails & Clips</li>
            </ol>
            <!-- Modal Window for Tolerance Table-->
            <div class="modal fade" id="toleranceModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Standard System of Measurement Inch Material</h4>
                        </div>
                        <div class="modal-body">
                            <img src="img/tolerance.jpg" alt="Tolerance Table" style="max-width:100%;"/>
                        </div>
                    </div>
                </div>
            </div>
            <div id="filter-btn" class="visible-xs" data-toggle="collapse" data-target="#filters" aria-expanded="false" aria-controls="filters"><span class="glyphicon glyphicon-tasks"></span> Filter</div>
            <div class="row">
                <aside class="col-xs-12 col-sm-3">
                    <div class="filter clearfix" id="filters">
                        <h3>Panel Rails & Clips <span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <section class="filter-content">
                            <span class="filter-title">Dimensions</span>
                            <div class="pic"><img src="img/logo-icon.png" /></div>
                            <div class="dimensions filter-type clearfix">
                                <div class="filter-section">
                                   <span class="filter-title">Offset A</span>                                    
                                   <form id="clips-alloy-form">
                                       <div class="filter-option">
                                           <input type="radio" id="offset-three-sixteen" name="clips-offset" value="offset-three-sixteen"/>
                                           <label for="offset-three-sixteen"><span></span>3/16"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="offset-three-eight" name="clips-offset" value="offset-three-eight"/>
                                           <label for="offset-three-eight"><span></span>3/8"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="offset-seven" name="clips-offset" value="offset-seven"/>
                                           <label for="offset-seven"><span></span>7/32"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="offset-quarter" name="clips-offset" value="offset-quarter"/>
                                           <label for="offset-quarter"><span></span>1/4"</label>
                                       </div>
                                   </form>
                                </div>
                                <div class="filter-section">
                                   <span class="filter-title">Drop B</span>                                    
                                   <form id="clips-alloy-form">
                                       <div class="filter-option">
                                           <input type="radio" id="drop-three-eight" name="clips-drop" value="drop-three-eight"/>
                                           <label for="drop-three-eight"><span></span>3/8"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="drop-seven" name="clips-drop" value="drop-seven"/>
                                           <label for="drop-seven"><span></span>7/16"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="drop-five-eight" name="clips-drop" value="drop-five-eight"/>
                                           <label for="drop-five-eight"><span></span>5/8"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="drop-forty" name="clips-drop" value="drop-forty"/>
                                           <label for="drop-forty"><span></span>45/64"</label>
                                       </div>
                                   </form>
                                </div>
                            </div>
                            <div class="cut filter-type">
                               <span class="filter-title">Cut Length</span>
                               <form id="clips-cut-form">
                                   <div class="filter-option">
                                       <input type="radio" id="clips-ten" name="clips-length" value="clips-ten"/>
                                       <label for="clips-ten"><span></span>Clips (10pcs)</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="clips-twenty" name="clips-length"  value="clips-twenty"/>
                                       <label for="clips-twenty"><span></span>Clips (20pcs)</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="clips-six" name="clips-length"  value="clips-six"/>
                                       <label for="clips-six"><span></span>6'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="clips-twelve" name="clips-length"  value="clips-twelve"/>
                                       <label for="clips-twelve"><span></span>12'</label>
                                   </div>
                               </form>
                            </div>
                            <div class="finish filter-type">
                               <span class="filter-title">Finish</span>
                               <form id="clips-finish-form">
                                   <div class="filter-option">
                                       <input type="radio" id="clips-mill" name="clips-finish" value="fixed" checked/>
                                       <label for="clips-mill"><span></span>Mill Finish</label>
                                   </div>
                               </form>
                            </div>
                            <div class="alloy filter-type">
                               <span class="filter-title">Alloy & Temper</span>
                               <form id="clips-alloy-form">
                                   <div class="filter-option">
                                       <input type="radio" id="clips-alloy" name="clips-alloy" value="fixed" checked/>
                                       <label for="clips-alloy"><span></span>6063-T5</label>
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
                               <div class="col-xs-12 col-md-8">
                                    <p>Panel Rails and Clips are a fast, easy and cost effective method to lock in place any kind of wall panel, acoustic panel, partition,cabinet, signage, artwork, etc. The “Z” shaped clips wedge together locking panels in place. It provides for easy and fast future removal or dismounting for change or replacement. Since Panel Rails and Clips remain concealed, it also allows for prefinishing,without time consuming face nailing or costly on-the-job finishing.Installation time and costs can be cut by 50% when using Panel Rails and Clips.</p>
                                    <table style="width:100%;">
                                        <tr>
                                            <td><b>Alloy</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="Ultra-Corrosive Resistant Architectural Grade Alloy">6063-T5</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Finish</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="The natural/raw appearance of the aluminum as it is extruded. No secondary process, may show heavy production lines.">Mill Finish</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Cut Length</b></td>
                                            <td style="width:75%;">Available in Clips, 6' and 12' Lengths</td>
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
                                        </tr><tr>
                                            <td><b>Fabrication</b></td>
                                            <td style="width:75%;">Punched 8” on center to accommodate #8 screws</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-4 visible-md visible-lg"><img class="img-tall" alt="" src="img/tile-tall.jpg"/></div>
                            </div>
                        </div>
                    </div>
                    <!-- OA5337 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel Rail and Clip Style 1</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="" src="img/tile-tall.jpg"/>
                                </div>
                                <div class="col-xs-12 col-md-10 visible-md visible-lg">
                                  <p>Mill Finish Aluminum Panel Rails and Clips, Style 1, Panel Rails and Clips are Designed for Two of the Sections to Wedge Together, Securely Locking Panels in Place. Ideal for  Wall Panels, Partitions, and Signs. Lift-off Clearance of 5/8" Required for Installation and Removal. Overall Height when Mounted is 3-1/8" (Style 1 Has Less Offset and Larger Lift-Off Than Style 2 with Larger Offset and Smaller Lift-Off.) </p>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>Offset (A) x Drop (B)</th>
                                      <th>Cut Length</th>
                                      <th>SKU</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA5337-CB" class="accordion-toggle offset-three-sixteen drop-five-eight clips-twenty">
                                      <th scope="row">3/16" x 5/8"</th>
                                      <td>Clips (20)</td>
                                      <td>OA5337-CB</td>
                                      <td>$9.06</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5337-CB" style="padding:8px 13px;">
                                                <h4 class="text-center">Panel Rail and Clip, Style 1: Bag of 20</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5337-CB-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-toggle="collapse" data-target="#collapse-OA5337-6" class="accordion-toggle offset-three-sixteen drop-five-eight clips-six">
                                      <th scope="row">3/16" x 5/8"</th>
                                      <td>6'</td>
                                      <td>OA5337-6</td>
                                      <td>$9.36</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5337-6" style="padding:8px 13px;">
                                                <h4 class="text-center">Panel Rail and Clip, Style 1: 6 Feet</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5337-6-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-toggle="collapse" data-target="#collapse-OA5337-12" class="accordion-toggle offset-three-sixteen drop-five-eight clips-twelve">
                                      <th scope="row">3/16" x 5/8"</th>
                                      <td>12'</td>
                                      <td>OA5337-12</td>
                                      <td>$18.72</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5337-12" style="padding:8px 13px;">
                                                <h4 class="text-center">Panel Rail and Clip, Style 1: 12 Feet</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5337-12-qty" min="0" value="1">
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
                    <!-- OA5403 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel Rail and Clip Style 2</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="" src="img/tile-tall.jpg"/>
                                </div>
                                <div class="col-xs-12 col-md-10 visible-md visible-lg">
                                    <p>Mill Finish Aluminum Panel Rails and Clips, Style 2, Panel Rails and Clips are Designed for Two of the Sections to Wedge Together, Securely Locking Panels in place. Ideal for Hanging Wall Panels, Partitions, and Signs. Lift-off clearance of 3/8" Required for Installation and Removal. Overall Height when Mounted is 2-3/8" (Style 1 Has Less Offset and Larger Lift-Off Than Style 2 with Larger Offset and Smaller Lift-Off.) </p>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>Offset (A) x Drop (B)</th>
                                      <th>Cut Length</th>
                                      <th>SKU</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA5403-CB" class="accordion-toggle offset-quarter drop-three-eight clips-twenty">
                                      <th scope="row">1/4" x 3/8"</th>
                                      <td>Clips (20)</td>
                                      <td>OA5403-CB</td>
                                      <td>$9.68</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5403-CB" style="padding:8px 13px;">
                                                <h4 class="text-center">Panel Rail and Clip, Style 2: Bag of 20</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5403-CB-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-toggle="collapse" data-target="#collapse-OA5403-6" class="accordion-toggle offset-quarter drop-three-eight clips-six">
                                      <th scope="row">1/4" x 3/8"</th>
                                      <td>6'</td>
                                      <td>OA5403-6</td>
                                      <td>$9.98</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5403-6" style="padding:8px 13px;">
                                                <h4 class="text-center">Panel Rail and Clip, Style 1: 6 Feet</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5403-6-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-toggle="collapse" data-target="#collapse-OA5403-12" class="accordion-toggle offset-quarter drop-three-eight clips-twelve">
                                      <th scope="row">1/4" x 3/8"</th>
                                      <td>12'</td>
                                      <td>OA5403-12</td>
                                      <td>$19.96</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5403-12" style="padding:8px 13px;">
                                                <h4 class="text-center">Panel Rail and Clip, Style 1: 12 Feet</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5403-12-qty" min="0" value="1">
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
                    <!-- OA9548 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Z Hanger</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="" src="img/tile-tall.jpg"/>
                                </div>
                                <div class="col-xs-12 col-md-10 visible-md visible-lg">
                                    <p>Infamous Z Hanger for Mirrors and Picture Frames, this Z hanger style is lighter then our other Panel Rails and Clips providing less in strength but more in savings. Designed for Two of the Sections to Wedge Together, Securely Locking Panels in Place. Ideal for Hanging Wall Panels, Partitions, and Signs. Lift-off Clearance of 45/64" (.704") is Required for Installation and Removal. Overall Height when Mounted is 1-3/4". </p>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>Offset (A) x Drop (B)</th>
                                      <th>Cut Length</th>
                                      <th>SKU</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA9548-6" class="accordion-toggle offset-seven drop-forty clips-six">
                                      <th scope="row">7/32" x 45/64"</th>
                                      <td>6'</td>
                                      <td>OA9548-6</td>
                                      <td>$7.99</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA9548-6" style="padding:8px 13px;">
                                                <h4 class="text-center">Z Hanger: Light Duty</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA9548-6-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-toggle="collapse" data-target="#collapse-OA9548-12" class="accordion-toggle offset-seven drop-forty clips-twleve">
                                      <th scope="row">7/32" x 45/64"</th>
                                      <td>12'</td>
                                      <td>OA9548-12</td>
                                      <td>$15.98</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA9548-12" style="padding:8px 13px;">
                                                <h4 class="text-center">Z Hanger: Light Duty</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA9548-12-qty" min="0" value="1">
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
                    <!-- OA8142 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">HD Panel Rail and Clip</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="" src="img/tile-tall.jpg"/>
                                </div>
                                <div class="col-xs-12 col-md-10 visible-md visible-lg">
                                    <p>Mill Finish Aluminum Panel Rails and Clips, MEDIUM to HEAVY DUTY Z CLIP APPLICATION, Panel Rails and Clips are Designed for Two of the Sections to Wedge Together, Securely Locking Panels in place. Ideal for Hanging Wall Panels, Partitions, and Signs. Lift-off clearance of 7/16" Required for Installation and Removal. Overall Height when Mounted is 3-1/16" and offset from wall is 1/4" </p>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>Offset (A) x Drop (B)</th>
                                      <th>Cut Length</th>
                                      <th>SKU</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA8142-CB" class="accordion-toggle offset-quarter drop-seven clips-ten">
                                      <th scope="row">1/4" x 7/16"</th>
                                      <td>Clips (10)</td>
                                      <td>OA8142-CB</td>
                                      <td>$26.50</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA8142-CB" style="padding:8px 13px;">
                                                <h4 class="text-center">HD Panel Rail and Clip</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA8142-CB-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-toggle="collapse" data-target="#collapse-OA8142-6" class="accordion-toggle offset-quarter drop-seven clips-six">
                                      <th scope="row">1/4" x 7/16"</th>
                                      <td>6'</td>
                                      <td>OA8142-6</td>
                                      <td>$15.92</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA8142-6" style="padding:8px 13px;">
                                                <h4 class="text-center">HD Panel Rail and Clip</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA8142-6-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-toggle="collapse" data-target="#collapse-OA8142-12" class="accordion-toggle offset-quarter drop-seven clips-twelve">
                                      <th scope="row">1/4" x 7/16"</th>
                                      <td>12'</td>
                                      <td>OA8142-12</td>
                                      <td>$31.84</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA8142-12" style="padding:8px 13px;">
                                                <h4 class="text-center">HD Panel Rail and Clip</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA8142-12-qty" min="0" value="1">
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
                    <!-- OA7919 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">XL Panel Rail and Clip</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="" src="img/tile-tall.jpg"/>
                                </div>
                                <div class="col-xs-12 col-md-10 visible-md visible-lg">
                                    <p>Overkill? Perhaps, but what project doesn’t need a little overkill?The biggest, baddest clip to ever leave our R&D Department, the XL Style 4 Clip was designed to wedge two buildings together in order to create the most secure lock imaginable. Comes unpunched. Lift-off clearance of 3/4” required for installation and removal.Overall height when mounted is 4.00” And offset from wall is 3/8”.Remember, though, with great power comes great responsibility.</p>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>Offset (A) x Drop (B)</th>
                                      <th>Cut Length</th>
                                      <th>SKU</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA7919-CB" class="accordion-toggle offset-three-eight drop-seven clips-ten">
                                      <th scope="row">3/8" x 7/16"</th>
                                      <td>Clips (10)</td>
                                      <td>OA7919-CB</td>
                                      <td>$29.20</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA7919-CB" style="padding:8px 13px;">
                                                <h4 class="text-center">XL Panel Rail and Clip</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA7919-CB-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-toggle="collapse" data-target="#collapse-OA7919-6" class="accordion-toggle offset-three-eight drop-seven clips-six">
                                      <th scope="row">3/8" x 7/16"</th>
                                      <td>6'</td>
                                      <td>OA7919-6</td>
                                      <td>$15.92</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA7919-6" style="padding:8px 13px;">
                                                <h4 class="text-center">XL Panel Rail and Clip</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA7919-6-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-toggle="collapse" data-target="#collapse-OA7919-12" class="accordion-toggle offset-three-eight drop-seven clips-twelve">
                                      <th scope="row">3/8" x 7/16"</th>
                                      <td>12'</td>
                                      <td>OA7919-12</td>
                                      <td>$31.84</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA7919-12" style="padding:8px 13px;">
                                                <h4 class="text-center">XL Panel Rail and Clip</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA7919-12-qty" min="0" value="1">
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
        
        <?php include("php/includes/chat.php"); ?>
        <?php include("php/includes/footer.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <!-- Include all compiled plugins (below), or  individual files as needed -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

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
