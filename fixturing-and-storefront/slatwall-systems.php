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
                                  <th>Cut Length</th>
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
                  <td>'.$value["cut"].'</td>
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
    $OA5022 = array( 
        "Description" => '',
        "Title" => "Slatwall Insert",
        "Models" => array(
            "OA5022" => array(
                "title" => "Slatwall Insert",
                "cut" => "8'",
                "price" => 11.61,
                "classes" => "cut-eight"
            )
        ),
        "img" => $base_url."img/products/fixturing/slatwall-aside.png",
        "img_alt" => "Slatwall Insert"
    );
    $panels .= newPanel($OA5022);

    $OA8524 = array( 
        "Description" => 'Interlocking Aluminum Slatwall Panel, Stack it as high as you want! These self mating aluminum slatwall strips are perfect for your cubicle millwork projects or retail spaces alike... The material comes mill finish... ready for you to paint or keep mill. Section allows your functional slatwall spacing to be fixed at exactly 1.610” (1-5/8”.) <br>
• Available in 5 and 10 foot Lengths <br>
• 1-5/8” (1.610”) On Center Slats <br>
• Mill Finish, Ready for Paint <br>
• 6063-T5 Aluminum',
        "Title" => "Interlocking Slatwall Panel",
        "Models" => array(
            "OA8524" => array(
                "title" => "Interlocking Slatwall Panel: 5 Feet",
                "cut" => "5'",
                "price" => 32.24,
                "classes" => "cut-five"
            ),
            "OA8524-10" => array(
                "title" => "Interlocking Slatwall Panel: 10 Feet",
                "cut" => "10'",
                "price" => 64.48,
                "classes" => "cut-ten"
            )
        ),
        "img" => $base_url."img/products/fixturing/slatwall-panel-aside.png",
        "img_alt" => "Interlocking Slatwall Panel"
    );
    $panels .= newPanel($OA8524);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Slatwall Systems</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/slatwall.jpg" alt="Slatwall Systems"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Fixturing and Storefront</a></li>
              <li>Slatwall Systems</li>
            </ol><!-- Modal Window for Tolerance Table-->
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
                        <h3>Slatwall System<span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <section class="filter-content">
                            <div class="cut filter-type">
                               <span class="filter-title">Cut Length</span>
                               <form id="cut-form">
                                   <div class="filter-option">
                                       <input type="radio" id="cut-five" name="cut-length" value="cut-five"/>
                                       <label for="cut-five"><span></span>5'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-eight" name="cut-length" value="cut-eight"/>
                                       <label for="cut-eight"><span></span>8'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-ten" name="cut-length" value="cut-ten"/>
                                       <label for="cut-ten"><span></span>10'</label>
                                   </div>
                               </form>
                            </div>
                            <div class="finish filter-type">
                               <span class="filter-title">Finish</span>
                               <form id="clips-finish-form">
                                   <div class="filter-option">
                                       <input type="radio" id="mill" name="finish" value="fixed" checked/>
                                       <label for="mill"><span></span>Mill Finish</label>
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
                                    <p>Aluminum Slatwall Insert for use of slatwall panels to add support, style and protection from blow out. Insert is a standard for most slatwall, but please check the drawing to confirm fit with your panels before ordering. Also available: Orange Aluminum bits for use in routing your panels out for the slots for slatwall panels. These bits were specially designed for our extrusions, and meet all the industry standards for height and depth for use with retail slatwall hanging hardware.</p>
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
                                                <a data-toggle="tooltip" title="The natural/raw appearance of the aluminum as it is extruded. No secondary process, may show heavy production lines.">Mill Finish</a></td>
                                        </tr>
                                        <tr>
                                            <td><b>Cut Length</b></td>
                                            <td style="width:75%;">8' Cut Lengths</td>
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
                    <h3>Slatwall Accessories</h3><hr>
                    <!-- BASE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Router Bit</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>SKU</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA5022-USA" class="accordion-toggle cut-five cut-eight cut-ten">
                                      <th scope="row">Router Bit: American Made</td>
                                      <td>OA5022-USA</td>
                                      <td>$85.80</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5022-USA" style="padding:8px 13px;">
                                                <h4 class="text-center">Router Bit: American Made</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5022-USA-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                     </tr> 
                                     <tr data-toggle="collapse" data-target="#collapse-OA5022-RTRBIT" class="accordion-toggle cut-five cut-eight cut-ten">
                                      <th scope="row">Router Bit: Made in China</td>
                                      <td>OA5022-RTRBIT</td>
                                      <td>$32.99</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5022-RTRBIT" style="padding:8px 13px;">
                                                <h4 class="text-center">Router Bit: Made in China</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5022-RTRBIT-qty" min="0" value="1">
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
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
