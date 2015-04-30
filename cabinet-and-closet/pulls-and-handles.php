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
                                  <th>Cut</th>
                                  <th>Finish</th>
                                  <th>Fits</th>
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
                  <td>'.$value["finish"].'</td>
                  <td>'.$value["fits"].'"</td>
                  <td>$'.number_format($value["price"], 2, '.', '').'</td>
                </tr>
                <tr>
                    <td colspan="5" class="hiddenRow">
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

    $drawer = array( 
        "Description" => '• Designed to mount atop material and fastened with screws through the back flange that overlaps material.<br>
• Flush Mortise Mounting (Similar to Epco Hardwares DP412)<br>
• Available in 3/4” (.750”) and 13/16” (.812”) Widths; 1-1/4” Tall (1.248”)',
        "Title" => "Drawer Pull",
        "Models" => array(
            "OA5047" => array(
                "title" => "Drawer Pull",
                "finish" => "Clear Anodized",
                "fits" => "3/4",
                "cut" => "6'",
                "price" => 17.40,
                "classes" => "clear fits-three-quarter cut-six"
            ),
            "OA5048" => array(
                "title" => "Drawer Pull",
                "finish" => "Clear Anodized",
                "fits" => "13/16",
                "cut" => "6'",
                "price" => 17.46,
                "classes" => "clear fits-thirteen-sixteen cut-six"
            )
        ),
        "img" => $base_url."img/products/cabinet/drawer-pull.png",
        "img_alt" => "Drawer Pull"
    );
    $panels .= newPanel($drawer);

    $panel = array( 
        "Description" => '• For use with material thicknesses of 3/4” and 13/16” with special internal angular detail.<br>
• Designed to mount atop material and fastened with screws through the back flange that overlaps material.<br>
• Flush Mortise Mounting (Similar to Epco Hardwares DP46)<br>
• Available in 3/4” (.750”) and 13/16” (.812”) Widths; 1-1/4” Tall (1.250”)',
        "Title" => "Panel Drawer Pull",
        "Models" => array(
            "OA5049" => array(
                "title" => "Panel Drawer Pull",
                "finish" => "Clear Anodized",
                "fits" => "3/4",
                "cut" => "6'",
                "price" => 17.82,
                "classes" => "clear fits-three-quarter cut-six"
            ),
            "OA5089" => array(
                "title" => "Panel Drawer Pull",
                "finish" => "Clear Anodized",
                "fits" => "13/16",
                "cut" => "6'",
                "price" => 18.42,
                "classes" => "clear fits-thirteen-sixteen cut-six"
            )
        ),
        "img" => $base_url."img/products/cabinet/panel-pull.png",
        "img_alt" => "Panel Drawer Pull"
    );
    $panels .= newPanel($panel);

    $kerf = array( 
        "Description" => '• For Use with material thickness of 3/4”.<br>
• Designed to Mount Atop Material via a 1/8” Routed Saw Kerf<br>
• Similar to Epco Hardwares DP419<br>
• Available in 3/4” (.750”) Width; 1-3/8” Tall (1.375”)',
        "Title" => "Kerf Mounted Pull",
        "Models" => array(
            "OA5122" => array(
                "title" => "Kerf Mounted Pull",
                "finish" => "Clear Anodized",
                "fits" => "3/4",
                "cut" => "6'",
                "price" => 18.98,
                "classes" => "clear fits-three-quarter cut-six"
            )
        ),
        "img" => $base_url."img/products/cabinet/panel-pull.png",
        "img_alt" => "Kerf Mounted Pull"
    );
    $panels .= newPanel($kerf);

    $cont = array( 
        "Description" => '• For push fit on material with thickness of 3/4”. Ideal for both vertical and horizontal applications, to run entire length of door or drawer.<br>
• Popularly used in combination with OA5479 Pressure Fit Shelf Stiffener.<br>
• Available in 3/4” (.750”) Width; 1-27/32” Tall (1.837”)<br>
• 8’ Length',
        "Title" => "Continuous Pull",
        "Models" => array(
            "OA6920-CA" => array(
                "title" => "Continuous Pull",
                "finish" => "Clear Anodized",
                "fits" => "3/4",
                "cut" => "8'",
                "price" => 20.13,
                "classes" => "clear fits-three-quarter cut-eight"
            ),
            "OA6920-BP" => array(
                "title" => "Continuous Pull",
                "finish" => "Black Powder Coat",
                "fits" => "3/4",
                "cut" => "8'",
                "price" => 22.13,
                "classes" => "black fits-three-quarter cut-eight"
            ),
            "OA6920-WP" => array(
                "title" => "Continuous Pull",
                "finish" => "White Powder Coat",
                "fits" => "3/4",
                "cut" => "8'",
                "price" => 22.13,
                "classes" => "white fits-three-quarter cut-eight"
            )
        ),
        "img" => $base_url."img/products/cabinet/pull-aside.png",
        "img_alt" => "Continuous Pull"
    );
    $panels .= newPanel($cont);

    $top = array( 
        "Description" => '• Designed to Mount Atop Material via a 1/8” Routed Saw Kerf<br>
• Available in 3/4” (.750”) and 5/8” (.625”) wide with 1-3/8” height, (1.375”)',
        "Title" => "Top Handle",
        "Models" => array(
            "OA7935" => array(
                "title" => "Top Handle",
                "finish" => "Clear Anodized",
                "fits" => "7/8",
                "cut" => "6'",
                "price" => 18.01,
                "classes" => "clear fits-seven-eight cut-six"
            ),
            "OA5085" => array(
                "title" => "Top Handle",
                "finish" => "Clear Anodized",
                "fits" => "3/4",
                "cut" => "6'",
                "price" => 18.01,
                "classes" => "clear fits-three-quarter cut-six"
            )
        ),
        "img" => $base_url."img/products/cabinet/top-handle.png",
        "img_alt" => "Top Handle"
    );
    $panels .= newPanel($top);

    $angle = array( 
        "Description" => '• For use with material thickness of 1/2” - 7/8”.<br>
• Designed for back mounting to material with screws (not included).<br>
• Available in 1-1/2” Clips in Bags of 10 with Holes Predrilled on Back for #6 Screws.<br>
• Similar to Epco Hardwares DP41<br>
• Available in 3/4” (.750”) wide and 1-3/8” Tall (1.375”)',
        "Title" => "Angle Bulb Pull",
        "Models" => array(
            "OA5088-2" => array(
                "title" => "Angle Bulb Pull",
                "finish" => "Clear Anodized",
                "fits" => "Variable ",
                "cut" => "Clips",
                "price" => 9.30,
                "classes" => "clear fits-variable cut-clips"
            ),
            "OA5088-6" => array(
                "title" => "Angle Bulb Pull",
                "finish" => "Clear Anodized",
                "fits" => "Variable ",
                "cut" => "6'",
                "price" => 9.96,
                "classes" => "clear fits-variable cut-six"
            )
        ),
        "img" => $base_url."img/products/cabinet/angle-bulb-pull.png",
        "img_alt" => "Angle Bulb Pull"
    );
    $panels .= newPanel($angle);

    $bulb = array( 
        "Description" => '• For use with material thickness of 5/8” - 1-1/4”.<br>
• Designed for top mounting to material with screws (not included)<br>
• Similar to Epco Hardwares DP42.',
        "Title" => "Bulb Pull",
        "Models" => array(
            "OA5087" => array(
                "title" => "Bulb Pull",
                "finish" => "Clear Anodized",
                "fits" => "Variable ",
                "cut" => "6'",
                "price" => 12.26,
                "classes" => "clear fits-seven-variable cut-six"
            )
        ),
        "img" => $base_url."img/products/cabinet/bulb-pull.png",
        "img_alt" => "Bulb Pull"
    );
    $panels .= newPanel($bulb);

    $flush = array( 
        "Description" => '• For use with material thickness of 13/16”.<br>
• Designed to mount atop material and fastened with screws through the back flange that overlaps material.<br>
• Flush Mortise mounting (Similar to Epco Hardwares DP414)<br>
• Available in 7/8” (.875”) Wide and 1-3/4” (1.750”) Tall.',
        "Title" => "Flush Mortise Pull",
        "Models" => array(
            "OA5090" => array(
                "title" => "Flush Mortise Pull",
                "finish" => "Clear Anodized",
                "fits" => "7/8",
                "cut" => "6'",
                "price" => 14.72,
                "classes" => "clear fits-seven-eight cut-six"
            )
        ),
        "img" => $base_url."img/products/cabinet/mortise-pull.png",
        "img_alt" => "Flush Mortise Pull"
    );
    $panels .= newPanel($flush);

    $san = array( 
        "Description" => '• For use with material thickness of 3/4” but can be used for other thickness if accounted for in milling process.<br>
• Designed for Kerf Mounting to material edging, 1/8” Kerf.<br>
• 2” Lip with 3/8” (.375” Barb Depth).',
        "Title" => "San Andreas Pull",
        "Models" => array(
            "OA5138" => array(
                "title" => "San Andreas Pull",
                "finish" => "Clear Anodized",
                "fits" => "Variable ",
                "cut" => "6'",
                "price" => 13.79,
                "classes" => "clear fits-variable cut-six"
            )
        ),
        "img" => $base_url."img/products/cabinet/san-andreas-pull.png",
        "img_alt" => "San Andreas Pull"
    );
    $panels .= newPanel($san);
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/pulls.jpg" alt="Pulls and Handles"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Cabinet, Case and Closet</a></li>
              <li>Pulls and Handles</li>
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
                        <h3>Pulls and Handles<span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <section class="filter-content">
                            <div class="filter-type">
                               <span class="filter-title">Cut Length</span>
                               <form>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-clips" name="cut-length" value="cut-clips"/>
                                       <label for="cut-clips"><span></span>Clips</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-six" name="cut-length" value="cut-six"/>
                                       <label for="cut-six"><span></span>6'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-eight" name="cut-length" value="cut-eight"/>
                                       <label for="cut-eight"><span></span>8'</label>
                                   </div>
                               </form>
                            </div>
                            <div class="filter-type">
                               <span class="filter-title">Finish</span>
                               <form>
                                   <div class="filter-option">
                                       <input type="radio" id="clear" name="finish" value="clear"/>
                                       <label for="clear"><span></span>Clear Anodized</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="black" name="finish" value="black"/>
                                       <label for="black"><span></span>Black Powder Coat</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="white" name="finish" value="white"/>
                                       <label for="white"><span></span>White Powder Coat</label>
                                   </div>
                               </form>
                            </div>
                            <div class="ilter-type">
                               <span class="filter-title">Alloy & Temper</span>
                               <form>
                                   <div class="filter-option">
                                       <input type="radio" id="alloy" name="alloy" value="fixed" checked/>
                                       <label for="alloy"><span></span>6063-T5</label>
                                   </div>
                               </form>
                            </div>
                            <div class="filter-type">
                               <span class="filter-title">Fits</span>
                               <form>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-five-eight" name="fits" value="fits-five-eight"/>
                                       <label for="fits-five-eight"><span></span>5/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-three-quarter" name="fits" value="fits-three-quarter"/>
                                       <label for="fits-three-quarter"><span></span>3/4"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-thirteen-sixteen" name="fits" value="fits-thirteen-sixteen"/>
                                       <label for="fits-thirteen-sixteen"><span></span>13/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-seven-eight" name="fits" value="fits-seven-eight"/>
                                       <label for="fits-seven-eight"><span></span>7/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-variable" name="fits" value="fits-variable"/>
                                       <label for="fits-variable"><span></span>Variable</label>
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
                                    <p>From traditional to contemporary—kitchens to offices—Orange Aluminum’s pulls and handles add functional and stylish detail to your architectural project. Let us help you achieve a truly customized look that will set your project apart.</p>
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
                                                <a data-toggle="tooltip" title="Electrostatically applied black powder paint provides a .001-.003” ‘skin’ like surface over the metal that is both decorative and protective">Black Powder Coat</a>, and
                                                <a data-toggle="tooltip" title="lectrostatically applied white powder paint provides a .001-.003” ‘skin’ like surface over the metal that is both decorative and protective">White Powder Coat</a>
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
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
