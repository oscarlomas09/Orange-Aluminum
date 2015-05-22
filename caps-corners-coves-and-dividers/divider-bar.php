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
                           <div class="col-xs-12 col-md-2">
                                <img class="img-tall" alt="'.$product["img_alt"].'" src="'.$product["img"].'"/>
                            </div>
                            <div class="col-xs-12 col-md-10 visible-md visible-lg">
                              <p>'.$product["Description"].'</p>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover" style="width:100%;">
                              <thead><tr>
                                    <th>SKU</th>
                                    <th>Fits</th>
                                    <th class="text-center">Cut</th>
                                    <th class="text-center hidden-xs">Alloy</th>
                                    <th class="text-center hidden-xs">Finish</th>
                                    <th class="text-center hidden-xs">Price</th>
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
                    <td class="item-dimensions">'.$value["fits"].'"</td>
                    <td class="text-center">'.$value["cut"].'</td>
                    <td class="item-alloy hidden-xs text-center">'.$value["alloy"].'</td>
                    <td class="item-finish hidden-xs text-center">'.$value["finish"].'</td>
                    <td class="item-price text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
      }
      return $row;
    }

    $panels = '';

    $divider = array( 
        "Description" => "Use our Divider Bars to assist in transitioning and joining panels along walls or floors. Orange Aluminum's Divider Bars will add style to your next panel project",
        "Title" => "Divider Bar",
        "Models" => array(
            "OA7420-3" => array(
                "title" => "Divider Bar",
                "fits" => "1/4",
                "price" => 7.41,
                "alloy" => "6463-T5",
                "cut" => "3'",
                "finish" => "Brite-Dip Anodized",
                "classes" => "fits-quarter finish-brite alloy-6463 cut-three"
            ),
            "OA7418-3" => array(
                "title" => "Divider Bar",
                "fits" => "1/2",
                "price" => 9.16,
                "alloy" => "6063-T5",
                "cut" => "3'",
                "finish" => "Clear Anodized",
                "classes" => "fits-half finish-clear alloy-6063 cut-three"
            ),
            "OA7418-3" => array(
                "title" => "Divider Bar",
                "fits" => "1/2",
                "price" => 9.16,
                "alloy" => "6063-T5",
                "cut" => "3'",
                "finish" => "Clear Anodized",
                "classes" => "fits-half finish-clear alloy-6063 cut-three"
            ),
            "OA7979-6" => array(
                "title" => "Divider Bar",
                "fits" => "1/16",
                "price" => 4.84,
                "alloy" => "6063-T5",
                "cut" => "6'",
                "finish" => "Clear Anodized",
                "classes" => "fits-one-sixteen finish-clear alloy-6063 cut-six"
            ),
            "OA3355-6" => array(
                "title" => "Divider Bar",
                "fits" => "1/8",
                "price" => 6.18,
                "alloy" => "6063-T5",
                "cut" => "6'",
                "finish" => "Clear Anodized",
                "classes" => "fits-one-eight finish-clear alloy-6063 cut-six"
            ),
            "OA7420-6" => array(
                "title" => "Divider Bar",
                "fits" => "1/4",
                "price" => 12.97,
                "alloy" => "6463-T5",
                "cut" => "6'",
                "finish" => "Brite-Dip Anodized",
                "classes" => "fits-quarter finish-brite alloy-6463 cut-six"
            ),
            "OA7418-6" => array(
                "title" => "Divider Bar",
                "fits" => "1/2",
                "price" => 16.03,
                "alloy" => "6063-T5",
                "cut" => "6'",
                "finish" => "Clear Anodized",
                "classes" => "fits-half finish-clear alloy-6063 cut-six"
            ),
            "OA3355-12" => array(
                "title" => "Divider Bar",
                "fits" => "1/8",
                "price" => 12.26,
                "alloy" => "6063-T5",
                "cut" => "12'",
                "finish" => "Clear Anodized",
                "classes" => "fits-one-eight finish-clear alloy-6063 cut-twelve"
            )
        ),
        "img" => $base_url."img/products/dividers/divider-aside.png",
        "img_alt" => " Corner"
    );
    $panels .= newPanel($divider);
    
    //Filters
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(      
            "three" => array(
                "name" => "cut-three",
                "title" => "3'",
                "group" => "cut"
            ),
            "six" => array(
                "name" => "cut-six",
                "title" => "6'",
                "group" => "cut"
            ),
            "twelve" => array(
                "name" => "cut-twelve",
                "title" => "12'",
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
            "brite" => array(
                "name" => "finish-brite",
                "title" => "Brite-Dip Anodized",
                "group" => "finish"
            )      
        )
    );
    $alloy = array( 
        "title" => "Alloy & Temper",
        "options" => array(
            "alloy-6063" => array(
                "name" => "alloy-6063",
                "title" => "6063-T5",
                "group" => "alloy"
            ),
            "alloy-6463" => array(
                "name" => "alloy-6463",
                "title" => "6463-T5",
                "group" => "alloy"
            ),
        )
    );
    $fits = array( 
        "title" => "Fits",
        "options" => array(
            "fits-one-sixteen" => array(
                "name" => "fits-one-sixteen",
                "title" => '1/16"',
                "group" => "fits"
            ),
            "fits-one-eight" => array(
                "name" => "fits-one-eight",
                "title" => '1/8"',
                "group" => "fits"
            ),
            "fits-quarter" => array(
                "name" => "fits-quarter",
                "title" => '1/4"',
                "group" => "fits"
            ),
            "fits-quarter" => array(
                "name" => "fits-quarter",
                "title" => '1/4"',
                "group" => "fits"
            ),
            "fits-one" => array(
                "name" => "fits-half",
                "title" => '1/2"',
                "group" => "fits"
            )
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
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Dividers Filter</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Divider Bars</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/divider.jpg" alt="Corners"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Caps, Corners, Coves, and Dividers</a></li>
              <li>Divider Bars</li>
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
                                    <p>Use our Divider Bars to assist in transitioning and joining panels along walls or floors. Orange Aluminum's Divider Bars will add style to your next panel project. </p>
                                    <table style="width:100%;">
                                        <tr>
                                            <td><b>Alloy</b></td>
                                            <td style="width:75%;">
                                                (CA) <a data-toggle="tooltip" title="Ultra-Corrosive Resistant Architectural Grade Alloy">6063-T5</a><br>
                                                (BD) <a data-toggle="tooltip" title="Considered a Brite-Dip alloy, specially engineered for brite anodize finishes.">6463-T5</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Finish</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="A shiny finish that is corrosion resistant and protects the material from oxidizing.">Brite-Dip Anodized</a><br>
                                                <a data-toggle="tooltip" title="Clear Anodized Finish, Per MIL-A-8625F. Electrochemical process that is corrosion resistant and protects the material from oxidizing.">Clear Anodized</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Cut Length</b></td>
                                            <td style="width:75%;">3 and 6 Foot Cut Lengths. Inquire about 12’ lengths</td>
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
