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
                                  <th>Finish</th>
                                  <th>Width x Thickness</th>
                                  <th>SKU</th>
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
                  <th scope="row">'.$value["finish"].'</td>
                  <td>'.$value["width"].'" x '.$value["thickness"].'"</td>
                  <td>'.$item.'</td>
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

    $rails = array( 
        "Description" => 'Aluminum File Hanging Rail 3/4" Tall x 1/8" Thick, Pendaflex Rails are Used as Cross-Section in which the Files Rest Atop within a Drawers Structure. Available in Black Anodize Finish ',
        "Title" => "Pendaflex File Hanging Rails",
        "Models" => array(
            "OA1058-8B" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Black Anodized",
                "cut" => "8'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 6.86,
                "classes" => "black width-half cut-eight"
            ),
            "OA2126-8B" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Black Anodized",
                "cut" => "8'",
                "width" => "3/4",
                "thickness" => "1/8",
                "price" => 9.46,
                "classes" => "black width-three-quarter cut-eight"
            ),
            "OA1058-8" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Mill Finish",
                "cut" => "8'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 4.80,
                "classes" => "mill width-half cut-eight"
            ),
            "OA2126-8" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Mill Finish",
                "cut" => "8'",
                "width" => "3/4",
                "thickness" => "1/8",
                "price" => 7.46,
                "classes" => "mill width-three-quarter cut-eight"
            ),
            "OA1058-8" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Mill Finish",
                "cut" => "8'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 4.80,
                "classes" => "mill width-half cut-eight"
            ),
            "OA1058-12A" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Clear Anodized",
                "cut" => "12'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 13.72,
                "classes" => "clear width-thalf cut-twelve"
            ),
            "OA2126-12A" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Clear Anodized",
                "cut" => "12'",
                "width" => "3/4",
                "thickness" => "1/8",
                "price" => 18.92,
                "classes" => "clear width-three-quarter cut-twelve"
            )
        ),
        "img" => $base_url."img/products/cabinet/hanging-rail-aside.png",
        "img_alt" => "Pendaflex Hanging Rail"
    );
    $panels .= newPanel($rails);

    $press = array( 
        "Description" => '• Press Fit File Hanging Rail sits atop ½” material, leaving a generous 5/16” (.325”) lip for the files to slide along<br>
• 7/8” Total Height x ½” Wide x 3/64” Wall (.875” x .550” x .040”)',
        "Title" => "Press Fit File Rail",
        "Models" => array(
            "OAO5593" => array(
                "title" => "Press Fit File Rail",
                "finish" => "Black Anodized",
                "cut" => "8'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 6.86,
                "classes" => "mill width-half cut-eight"
            )
        ),
        "img" => $base_url."img/products/cabinet/press-rail-aside.png",
        "img_alt" => "Press Fit File Rail"
    );
    $panels .= newPanel($press);
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EZ Slatwall System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../-touch-icon.png">
        
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/rails.jpg" alt="File Hanging Rails"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Cabinet, Case and Closet</a></li>
              <li>File Hanging Rails</li>
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
                        <h3>File Hanging Rails <span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <section class="filter-content">
                            <div class="cut filter-type">
                               <span class="filter-title">Cut Length</span>
                               <form id="clips-cut-form">
                                   <div class="filter-option">
                                       <input type="radio" id="cut-eight" name="cut-length" value="cut-eight"/>
                                       <label for="cut-eight"><span></span>8'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-twelve" name="cut-length" value="cut-twelve"/>
                                       <label for="cut-twelve"><span></span>12'</label>
                                   </div>
                               </form>
                            </div>
                            <div class="finish filter-type">
                               <span class="filter-title">Finish</span>
                               <form id="clips-finish-form">
                                   <div class="filter-option">
                                       <input type="radio" id="clear" name="finish" value="clear"/>
                                       <label for="clear"><span></span>Clear Anodized</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="black" name="finish" value="black"/>
                                       <label for="black"><span></span>Black Anodized</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="mill" name="finish" value="mill"/>
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
                            <div class="filter-section">
                               <span class="filter-title">Width</span>
                               <form>
                                   <div class="filter-option">
                                       <input type="radio" id="width-half" name="width" value="width-half"/>
                                       <label for="width-half"><span></span>1/2"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="width-three-quarter" name="width" value="width-three-quarter"/>
                                       <label for="width-three-quarter"><span></span>3/4"</label>
                                   </div>
                               </form>
                            </div>
                            <div class="filter-section">
                               <span class="filter-title">Thickness</span>
                               <form>
                                   <div class="filter-option">
                                       <input type="radio" id="thickness-eight" name="thickness" value="fixed" checked/>
                                       <label for="thickness-eight"><span></span>1/8"</label>
                                   </div>
                                   <div class="filter-option">&nbsp;</div>
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
                                    <p>Files need filing, and Orange Aluminum has the hanging file folder molding that you have been looking for. American Made and well priced makes Orange Aluminum Desk File Rails the best value in the market.</p>
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
                                                <a data-toggle="tooltip" title="Clear Anodized Finish, Per MIL-A-8625F. Electrochemical process that is corrosion resistant and protects the material from oxidizing.">Clear Anodized</a>,
                                                <a data-toggle="tooltip" title="Black Anodized">Black Anodized</a>, and
                                                <a data-toggle="tooltip" title="he natural/raw appearance of the aluminum as it is extruded. No secondary process, may show heavy production lines">Mill Finish</a>
                                            </td>
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
