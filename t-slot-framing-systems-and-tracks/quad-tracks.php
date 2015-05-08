<?php
    $base_url = "http://localhost/Orange-Aluminum/";
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
                            <div class="col-xs-12 visible-md visible-lg">
                              <p>'.$product["Description"].'</p>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover" style="width:100%;">
                              <thead><tr>
                                    <th>SKU</th>
                                    <th class="text-center">Cut</th>
                                    <th class="text-center hidden-xs">Alloy</th>
                                    <th class="text-center hidden-xs">Finish</th>
                                    <th class="text-center">Price</th>
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
      $size = "";
      foreach($alteration as $item => $value){
          if($value["size"] != $size){
                $row .= '<tr class="filter-fixed filter-row"><td colspan="6"><b>'.$value["size"].' Size</b></td></tr>';
                $size = $value["size"];
            }
          $row .= '<tr class="filter-row '.$value["classes"].'">
                    <td class="item-sku" data-name="'.$value["title"].'"><a href="'.$base_url.'product.php">'.$item.'</a></td>
                    <td class="text-center">'.$value["cut"].'</td>
                    <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">'.$value["size"].'</td>
                    <td class="item-alloy hidden-xs text-center">'.$value["alloy"].'</td>
                    <td class="item-finish hidden-xs text-center">'.$value["finish"].'</td>
                    <td class="item-price text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
      }
      return $row;
    }

    $panels = '';

    $t_slot = array( 
        "Description" => "",
        "Title" => "T Slots",
        "Models" => array(
            "OA9401-1M" => array(
                "title" => "T Slot",
                "size" => "25mm",
                "price" => 3.2,
                "alloy" => "6061-T6",
                "cut" => "1'",
                "finish" => "Mill Finish",
                "classes" => "size-twentyfive finish-mill cut-one"
            ),
            "OA9401-1A" => array(
                "title" => "T Slot",
                "size" => "25mm",
                "price" => 3.41,
                "alloy" => "6061-T6",
                "cut" => "1'",
                "finish" => "Clear Anodized",
                "classes" => "size-twentyfive finish-clear cut-one"
            ),
            "OA9401-4M" => array(
                "title" => "T Slot",
                "size" => "25mm",
                "price" => 10.77,
                "alloy" => "6061-T6",
                "cut" => "4'",
                "finish" => "Mill Finish",
                "classes" => "size-twentyfive finish-mill cut-four"
            ),
            "OA9401-4A" => array(
                "title" => "T Slot",
                "size" => "25mm",
                "price" => 11.64,
                "alloy" => "6061-T6",
                "cut" => "4'",
                "finish" => "Clear Anodized",
                "classes" => "size-twentyfive finish-clear cut-four"
            ),
            "OA9401-8M" => array(
                "title" => "T Slot",
                "size" => "25mm",
                "price" => 21.24,
                "alloy" => "6061-T6",
                "cut" => "8'",
                "finish" => "Mill Finish",
                "classes" => "size-twentyfive finish-mill cut-eight"
            ),
            "OA9401-8A" => array(
                "title" => "T Slot",
                "size" => "25mm",
                "price" => 23.28,
                "alloy" => "6061-T6",
                "cut" => "8'",
                "finish" => "Clear Anodized",
                "classes" => "size-twentyfive finish-clear cut-eight"
            ),
            "OA9402-1M" => array(
                "title" => "T Slot",
                "size" => "40mm",
                "price" => 7.75,
                "alloy" => "6061-T6",
                "cut" => "1'",
                "finish" => "Mill Finish",
                "classes" => "size-forty finish-mill cut-one"
            ),
            "OA9402-1A" => array(
                "title" => "T Slot",
                "size" => "40mm",
                "price" => 8.13,
                "alloy" => "6061-T6",
                "cut" => "1'",
                "finish" => "Clear Anodized",
                "classes" => "size-forty finish-clear cut-one"
            ),
            "OA9402-4M" => array(
                "title" => "T Slot",
                "size" => "40mm",
                "price" => 28.99,
                "alloy" => "6061-T6",
                "cut" => "4'",
                "finish" => "Mill Finish",
                "classes" => "size-forty finish-mill cut-four"
            ),
            "OA9402-4A" => array(
                "title" => "T Slot",
                "size" => "40mm",
                "price" => 30.51,
                "alloy" => "6061-T6",
                "cut" => "4'",
                "finish" => "Clear Anodized",
                "classes" => "size-forty finish-clear cut-four"
            ),
            "OA9402-8M" => array(
                "title" => "T Slot",
                "size" => "40mm",
                "price" => 57.99,
                "alloy" => "6061-T6",
                "cut" => "8'",
                "finish" => "Mill Finish",
                "classes" => "size-forty finish-mill cut-eight"
            ),
            "OA9402-8A" => array(
                "title" => "T Slot",
                "size" => "40mm",
                "price" => 61.02,
                "alloy" => "6061-T6",
                "cut" => "8'",
                "finish" => "Clear Anodized",
                "classes" => "size-forty finish-clear cut-eight"
            )
        ),
        "img" => $base_url."img/products/t-slot/quad-track-aside.png",
        "img_alt" => "Quad Tracks"
    );
    $panels .= newPanel($t_slot);
    
    //Filters
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(      
            "one" => array(
                "name" => "cut-one",
                "title" => "1'",
                "group" => "cut"
            ),
            "four" => array(
                "name" => "cut-four",
                "title" => "4'",
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
            "mill" => array(
                "name" => "finish-mill",
                "title" => "Mill Finish",
                "group" => "finish"
            )      
        )
    );
    $alloy = array( 
        "title" => "Alloy & Temper",
        "options" => array(
            "alloy-6063" => array(
                "name" => "fixed",
                "title" => "6061-T6",
                "group" => "alloy"
            )
        )
    );
    $size = array( 
        "title" => "Size",
        "options" => array(
            "size-twentyfive" => array(
                "name" => "size-twentyfive",
                "title" => '25mm',
                "group" => "size"
            ),
            "size-forty" => array(
                "name" => "size-forty",
                "title" => '40mm',
                "group" => "size"
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
    $options .= newFilter($size);
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/quad-tracks.jpg" alt="Corners"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">T-Slot Framing Systems and Tracks </a></li>
              <li>T-Slot Framing: Quad Tracks</li>
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
                    <?php echo $filter; ?>
                </aside>
                <div class="col-xs-12 col-sm-9">
                    <div class="panel panel-primary hidden-xs">
                        <div class="panel-heading">
                            <h3 class="panel-title">Product Info</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12 col-sm-9">
                                    <p>Heavy Duty Modular T Slot Framing Extrusions are used for the custom construction of structures and products ranging from furniture to clean rooms. Our offering of the two most popular sizes of 25 mm (1”) and 40 mm (1-1/2”) Extrusions are used with a variety of stock hardware parts to easily assemble into whatever formation your mind can conceive. Manufactured in the USA of high quality aircraft grade structural 6061 alloy, we are confident that these extrusions will hold up to whatever design your mind can throw at them.<br>
• 25 MM ( .984”) works with Size 6 T Slot Hardware<br>
• 40 MM (1.575”) works with Size 8 T Slot Hardware</p>
                                    <table style="width:100%;">
                                        <tr>
                                            <td><b>Alloy</b></td>
                                            <td style="width:75%;">
                                                (CA) <a data-toggle="tooltip" title="Multi-Purpose Structural Grade Aluminum">6061-T6</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Finish</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="The natural/raw appearance of the aluminum as it is extruded. No secondary process, may show heavy production lines.">Mill Finish</a> and 
                                                <a data-toggle="tooltip" title="Clear Anodized Finish, Per MIL-A-8625F. Electrochemical process that is corrosion resistant and protects the material from oxidizing.">Clear Anodized</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Cut Length</b></td>
                                            <td style="width:75%;">1, 4 and 8 Foot Cut Lengths</td>
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
                                <div class="col-xs-12 col-sm-3">
                                    <img src="<?php echo BASE_URL;?>img/products/t-slot/quad-track-aside.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo $panels; ?>
                    
                    <h3>T Slot Hardware</h3><hr>
                    <!-- Nuts --->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">T Slot Nuts</h3>
                        </div>
                        <div class="panel-default container-fluid">
                            <div class="row">
                                <div class="col-xs-5 visible-md visible-lg">
                                  <img src="<?php echo BASE_URL;?>img/products/t-slot/nuts.jpg" />
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                       <tr>
                                        <th>SKU</th>
                                        <th class="text-left hidden-xs">Name</th>
                                        <th class="text-center">Size</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="T Slot Nuts"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-T1377">OA9401-T1377</a></td>
                                        <td class="item-name hidden-xs">Roll-in T-Slot Nut</td>
                                        <td class="item-dimensions text-center">13.7mm x 7.0mm</td>
                                        <td class="item-price text-center" data-price="1.48">$1.48</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                     <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="T Slot Nuts"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-2401T">OA9401-2401T</a></td>
                                        <td class="item-name hidden-xs">Roll-in T-Slot Nut</td>
                                        <td class="item-dimensions text-center">13.7mm x 7.2mm</td>
                                        <td class="item-price text-center" data-price="1.48">$1.48</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                     <tr class="filter-row size-forty">
                                        <td class="item-sku" data-name="T Slot Nuts"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-2757T">OA9401-2757T</a></td>
                                        <td class="item-name hidden-xs">Roll-in T-Slot Nut</td>
                                        <td class="item-dimensions text-center">25mm</td>
                                        <td class="item-price text-center" data-price="1.70">$1.70</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                  </tbody>
                                </table>
                            </div>
 </div>
                    </div> 
                    <!-- Hinges -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Hinges and Fitting</h3>
                        </div>
                        <div class="panel-default container-fluid">
                            <div class="row">
                                <div class="col-xs-5 visible-md visible-lg">
                                  <img src="<?php echo BASE_URL;?>img/products/t-slot/corners.jpg" />
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                       <tr>
                                        <th>SKU</th>
                                        <th class="text-left">Name</th>
                                        <th class="text-center hidden-xs">Price</th>
                                        <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                     <!-- 25mm -->
                                      <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="Cover Cap"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-91232">OA9401-91232</a></td>
                                        <td class="item-name">25mm Cover Cap</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">25mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="0.74">$0.74</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="Left Hinge"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-LH">OA9401-LH</a></td>
                                        <td class="item-name">25mm Plastic Combination Hinge, Left</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">25mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="4.24">$4.24</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="Universal Hinge"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-UH">OA9401-UH</a></td>
                                        <td class="item-name">25mm Plastic Combination Hinge, Universal</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">25mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="4.24">$4.24</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="Right Hinge"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-RH">OA9401-RH</a></td>
                                        <td class="item-name">25mm Plastic Combination Hinge, Right</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">25mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="4.24">$4.24</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                     <!-- 40mm -->
                                     <tr class="filter-row size-forty">
                                        <td class="item-sku" data-name="Cover Cap"><a href="<?php echo BASE_URL;?>product.php?sku=OA9402-91232">OA9402-91232</a></td>
                                        <td class="item-name">40mm Cover Cap</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">40mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="1.33">$1.33</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-forty">
                                        <td class="item-sku" data-name="Left Hinge"><a href="<?php echo BASE_URL;?>product.php?sku=OA9402-LH">OA9402-LH</a></td>
                                        <td class="item-name">40mm Plastic Combination Hinge, Left</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">40mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="5.30">$5.30</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-forty">
                                        <td class="item-sku" data-name="Universal Hinge"><a href="<?php echo BASE_URL;?>product.php?sku=OA9402-UH">OA9402-UH</a></td>
                                        <td class="item-name">40mm Plastic Combination Hinge, Universal</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">40mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="5.30">$5.30</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-forty">
                                        <td class="item-sku" data-name="Right Hinge"><a href="<?php echo BASE_URL;?>product.php?sku=OA9402-RH">OA9402-RH</a></td>
                                        <td class="item-name">40mm Plastic Combination Hinge, Right</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">40mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="5.30">$5.30</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                    <!-- Accessories -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Accessories</h3>
                        </div>
                        <div class="panel-default container-fluid">
                            <div class="row">
                                <div class="col-xs-5 visible-md visible-lg">
                                  <img src="<?php echo BASE_URL;?>img/products/t-slot/accessories.jpg" />
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                       <tr>
                                        <th>SKU</th>
                                        <th class="text-left">Name</th>
                                        <th class="text-center hidden-xs">Price</th>
                                        <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                     <!-- 25mm -->
                                      <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="Connector Angle"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-CA">OA9401-CA</a></td>
                                        <td class="item-name">25mm Connector Angle</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">25mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="1.33">$1.33</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="Uniblock"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-U14">OA9401-U14</a></td>
                                        <td class="item-name">Uniblock 14, 25mm</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">25mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="2.12">$2.12</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="2D Connector Cube"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-2D">OA9401-2D</a></td>
                                        <td class="item-name">25mm 2D Connector Cube</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">25mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="8.76">$8.76</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-twentyfive">
                                        <td class="item-sku" data-name="3D Connector Tube"><a href="<?php echo BASE_URL;?>product.php?sku=OA9401-3D">OA9401-3D</a></td>
                                        <td class="item-name">3D Connector Tube, 25mm</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">25mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="4.24">$8.76</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                     <!-- 40mm -->
                                      <tr class="filter-row size-forty">
                                        <td class="item-sku" data-name="Connector Angle"><a href="<?php echo BASE_URL;?>product.php?sku=OA9402-CA">OA9402-CA</a></td>
                                        <td class="item-name">40mm Connector Angle</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">40mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="2.86">$2.86</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-forty">
                                        <td class="item-sku" data-name="Uniblock"><a href="<?php echo BASE_URL;?>product.php?sku=OA9402-U14">OA9402-U25</a></td>
                                        <td class="item-name">Uniblock 25, 40mm</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">40mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="2.12">$2.12</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-forty">
                                        <td class="item-sku" data-name="2D Connector Cube"><a href="<?php echo BASE_URL;?>product.php?sku=OA9402-2D">OA9402-2D</a></td>
                                        <td class="item-name">40mm 2D Connector Cube</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">40mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="8.76">$8.76</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                      <tr class="filter-row size-forty">
                                        <td class="item-sku" data-name="3D Connector Tube"><a href="<?php echo BASE_URL;?>product.php?sku=OA9402-3D">OA9402-3D</a></td>
                                        <td class="item-name">3D Connector Tube, 40mm</td>
                                        <td class="item-dimensions hidden-xs hidden-sm hidden-md hidden-lg">40mm</td>
                                        <td class="item-price hidden-xs text-center" data-price="4.24">$8.76</td>
                                        <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                     </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
        </main>
        <?php include("../php/includes/cart.php"); ?>          
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
