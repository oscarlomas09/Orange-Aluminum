<?php
    $base_url = "http://localhost/Orange-Aluminum/";
    function newPanel($product){
        $models = $product["Models"];
        $alterations = newModel($models);
        $panel = '<div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">'.$product["Title"].'</h3>
                    </div>
                    <div class="panel-default container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 visible-md visible-lg">
                              <p>'.$product["Description"].'</p>
                            </div>
                           <div class="col-xs-12 col-md-2">
                                <img class="img-tall" alt="'.$product["img_alt"].'" src="'.$product["img"].'"/>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover" style="width:100%;">
                              <thead>
                                <tr>
                                  <th>SKU</th>
                                  <th>Material Size</th>
                                  <th>Ticket Size</th>
                                  <th>Each</th>
                                </tr>
                              </thead>
                              <tbody>
                                    '.$alterations.'
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div> ';
        return $panel;
    }
  function newModel($alteration){
      $row = '';
      foreach($alteration as $item => $value){
        $row .= '<tr data-toggle="collapse" data-target="#collapse-'.$item.'" class="accordion-toggle '.$value["classes"].'">
                  <th scope="row">'.$item.'</td>
                  <td>'.$value["ticket"].'"</th>
                  <td>'.$value["material"].'"</td>
                  <td>$'.number_format($value["price"], 2, '.', '').'</td>
                </tr>
                <tr>
                    <td colspan="4" class="hiddenRow">
                        <div class="accordion-body collapse" id="collapse-'.$item.'" style="padding:8px 13px;">
                            <h4 class="text-">'.$value["title"].'</h4>
                            <form style="width:100%;margin:0px auto;">
                               <a href="product.php?p_id='.$item.'" class="product-link">
                                   Product View<span class="glyphicon glyphicon-share"></span>
                                </a>
                                <div class="add-cart ">                         
                                  <label class="sr-only">Quantity</label>    
                                  <input type="number" id="'.$item.'-qty" min="0" value="1">
                                  <button type="submit">
                                      <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                  </button>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>';
      }
      return $row;
    }

    $panels = '';
    $fluted = array( 
        "Description" => 'Punched holes 6” on Center to Accommodate #5 Screws. <br>
• For Use with material thickness of 3/4”.<br>
• Designed to Mount Atop Material via a 1/8” Routed <br>
• Available in 3/4” (0.750”) Width; 1-3/8” Tall (1.375”)',
        "Title" => "FLUTED PRICE TAG MOLDING",
        "Models" => array(
            "OA7900" => array(
                "title" => "FLUTED PRICE TAG MOLDING",
                "price" => 9.96,
                "classes" => "ticket-five-eight material-three-quarter",
                "ticket" => "5/8",	    
                "material" => "3/4"
            ),
            "OA7899" => array(
                "title" => "FLUTED PRICE TAG MOLDING",
                "price" => 10.85,
                "classes" => "ticket-seven-eight material-one-one-eight",
                "ticket" => "7/8",	    
                "material" => "1-1/8"
            ),
            "OA6387" => array(
                "title" => "FLUTED PRICE TAG MOLDING",
                "price" => 11.17,
                "classes" => "ticket-one-seven-sixtyfour material-one-fifteen-thirtytwo",
                "ticket" => "1-7/64",	    
                "material" => "1-15/32"
            ),
        ),
        "img" => $base_url."img/products/fixturing/price-tag-fluted.png",
        "img_alt" => "FLUTED PRICE TAG MOLDING"
    );
    $panels .= newPanel($fluted);

    $concave = array( 
        "Description" => "",
        "Title" => "CONCAVE PRICE TAG MOLDING",
        "Models" => array(
            "OA7898" => array(
                "title" => "CONCAVE PRICE TAG MOLDING",
                "price" => 9.06,
                "classes" => "ticket-one-nine-sixtyfour material-one-quarter",
                "ticket" => "1-9/64",	    
                "material" => "1-1/4"
            )
        ),
        "img" => $base_url."img/products/fixturing/price-tag-concave.png",
        "img_alt" => "CONCAVE PRICE TAG MOLDING"
    );
    $panels .= newPanel($concave);

    $universal = array( 
        "Description" => "",
        "Title" => "UNIVERSAL PRICE TAG MOLDING",
        "Models" => array(
            "OA7898" => array(
                "title" => "UNIVERSAL PRICE TAG MOLDING",
                "price" => 21.78,
                "classes" => "ticket-all material-three",
                "ticket" => "All Of the Above ",	    
                "material" => "3-25/41"
            )
        ),
        "img" => $base_url."img/products/fixturing/price-tag-universal.png",
        "img_alt" => "UNIVERSAL PRICE TAG MOLDING"
    );
    $panels .= newPanel($universal);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Price Tag Moldings</title>
        <meta name="description" content="">
        <?php include("../php/includes/header-files.php"); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("../php/includes/header.php"); ?>
        <?php include("../php/includes/navbar.php"); ?>
        <?php include("../php/includes/mobile-navigation.php"); ?>
        
        <!-- Content Just for this Page -->
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/price-tag.jpg" alt="Price Tag"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Fixturing and Storefront</a></li>
              <li>Price Tag Moldings</li>
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
                            <img src="<?php echo BASE_URL;?>img/tolerance.jpg" alt="Tolerance Table" style="max-width:100%;"/>
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
                               <span class="filter-title">Material Size</span>
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
                    <?php echo $panels; ?>
                </div>
        </main>
        
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
