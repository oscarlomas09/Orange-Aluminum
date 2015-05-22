<?php
    include("../php/helper.php");
    $base_url = getBaseUrl();
    global $base_url;
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
                              <thead><tr>
                                    <th>SKU</th>
                                    <th class="text-center">Fits</th>
                                    <th class="text-center hidden-xs">Cut</th>
                                    <th class="text-center hidden-xs">Finish</th>
                                    <th class="hidden-xs text-center">Price</th>
                                    <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
                              </tr></thead>
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
      global $base_url;
      $row = '';
      foreach($alteration as $item => $value){
        $row .= '<tr class="filter-row '.$value["classes"].'">
                    <td class="item-sku" data-name="'.$item.'"><a href="'.$base_url.'product.php">'.$item.'</a></td>
                    <td class="item-dimensions text-center">'.$value["fits"].'"</td>
                    <td class="item-cut text-center hidden-xs">'.$value["cut"].'</td>
                    <td class="item-finish text-center hidden-xs">'.$value["finish"].'</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
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
                "classes" => "finish-clear fits-three-quarter cut-six"
            ),
            "OA5048" => array(
                "title" => "Drawer Pull",
                "finish" => "Clear Anodized",
                "fits" => "13/16",
                "cut" => "6'",
                "price" => 17.46,
                "classes" => "finish-clear fits-thirteen-sixteen cut-six"
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
                "classes" => "finish-clear fits-three-quarter cut-six"
            ),
            "OA5089" => array(
                "title" => "Panel Drawer Pull",
                "finish" => "Clear Anodized",
                "fits" => "13/16",
                "cut" => "6'",
                "price" => 18.42,
                "classes" => "finish-clear fits-thirteen-sixteen cut-six"
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
                "classes" => "finish-clear fits-three-quarter cut-six"
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
                "classes" => "finish-clear fits-three-quarter cut-eight"
            ),
            "OA6920-BP" => array(
                "title" => "Continuous Pull",
                "finish" => "Black Powder Coat",
                "fits" => "3/4",
                "cut" => "8'",
                "price" => 22.13,
                "classes" => "finish-black fits-three-quarter cut-eight"
            ),
            "OA6920-WP" => array(
                "title" => "Continuous Pull",
                "finish" => "White Powder Coat",
                "fits" => "3/4",
                "cut" => "8'",
                "price" => 22.13,
                "classes" => "finish-white fits-three-quarter cut-eight"
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
                "fits" => "5/8",
                "cut" => "6'",
                "price" => 18.01,
                "classes" => "finish-clear fits-five-eight cut-six"
            ),
            "OA5085" => array(
                "title" => "Top Handle",
                "finish" => "Clear Anodized",
                "fits" => "3/4",
                "cut" => "6'",
                "price" => 18.01,
                "classes" => "finish-clear fits-three-quarter cut-six"
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
                "classes" => "finish-clear fits-variable cut-clips"
            ),
            "OA5088-6" => array(
                "title" => "Angle Bulb Pull",
                "finish" => "Clear Anodized",
                "fits" => "Variable ",
                "cut" => "6'",
                "price" => 9.96,
                "classes" => "finish-clear fits-variable cut-six"
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
                "classes" => "finish-clear fits-seven-variable cut-six"
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
                "classes" => "finish-clear fits-seven-eight cut-six"
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
                "classes" => "finish-clear fits-variable cut-six"
            )
        ),
        "img" => $base_url."img/products/cabinet/san-andreas-pull.png",
        "img_alt" => "San Andreas Pull"
    );
    $panels .= newPanel($san);

    //filters
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(    
            "clips" => array(
                "name" => "cut-clips",
                "title" => "Clips",
                "group" => "cut"
            ),    
            "six" => array(
                "name" => "cut-six",
                "title" => "6'",
                "group" => "cut"
            ),    
            "eight" => array(
                "name" => "cut-eight",
                "title" => "8'",
                "group" => "cut"
            )
        )
    );
    $finish = array( 
        "title" => "Finish",
        "options" => array(
            "clear" => array(
                "name" => "finish-clear",
                "title" => "Clear Anodized",
                "group" => "finish"
            ),
            "gold" => array(
                "name" => "finish-black",
                "title" => "Black Poweder Coat",
                "group" => "finish"
            ),    
            "oil" => array(
                "name" => "finish-white",
                "title" => "White Powder Coat",
                "group" => "finish"
            )        
        )
    );
    $alloy = array( 
        "title" => "Alloy & Temper",
        "options" => array(
            "alloy" => array(
                "name" => "fixed",
                "title" => "6063-T5",
                "group" => "alloy"
            ),
        )
    );
    $fits = array( 
        "title" => "Fits",
        "options" => array(
            "fits-five-eight" => array(
                "name" => "fits-five-eight",
                "title" => '5/8"',
                "group" => "fits"
            ),
            "fits-three-quarter" => array(
                "name" => "fits-three-quarter",
                "title" => '3/4"',
                "group" => "fits"
            ),
            "fits-thirteen-sixteen" => array(
                "name" => "fits-thirteen-sixteen",
                "title" => '13/16"',
                "group" => "fits"
            ),
            "fits-seven-eight" => array(
                "name" => "fits-seven-eight",
                "title" => '7/8"',
                "group" => "fits"
            ),
            "fits-variable" => array(
                "name" => "fits-variable",
                "title" => 'Variable',
                "group" => "fits"
            ),
        )
    );

    
    $options = "";
    function newFilter($arr){
        $filter = '<h4 class="filter-name active">'.$arr["title"].'</h4><ul>';    
        $filter_group = $arr["options"];
        $filter_count = count($filter_group);
        foreach($filter_group as $item => $value){
            $lonely = $filter_count == 1 ? "checked" : "";
            $filter .= '<li class="visible">
                    <input id="'.$value["name"].'" name="'.$value["group"].'" type="radio" value="'.$value["name"].'" '.$lonely.'>
                    <label for="'.$value["name"].'">'.$value["title"].'</label>
                </li>';
        }
        $filter .= "</ul>";
        return $filter;
    }
    $options .= newFilter($cuts);
    $options .= newFilter($finish);
    $options .= newFilter($alloy);
    $options .= newFilter($fits);
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Pulls & Handles</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Pulls and Handles</title>
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
                    <?php echo $filter; ?><br>
                    <?php include("../php/includes/quote.php"); ?>
                </aside>
                <div class="col-xs-12 col-sm-9">
                    <div class="panel panel-primary hidden-xs">
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
                </div></div>
        </main>
        <?php include("../php/includes/cart.php"); ?>          
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
