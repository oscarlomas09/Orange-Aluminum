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
                              <thead><tr>
                                    <th>SKU</th>
                                    <th>Fits x Reveal</th>
                                    <th class="text-center hidden-xs">Cut</th>
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
                    <td class="item-dimensions">'.$value["fits"].'" x '.$value["reveal"].'"</td>
                    <td class="text-center hidden-xs">'.$value["cut"].'</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
      }
      return $row;
    }

    $panels = '';

    $trim = array( 
        "Description" => "",
        "Title" => "J Cap Edge Trim",
        "Models" => array(
            "OA7408-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/16",
                "reveal" => "3/16",
                "price" => 5.02,
                "cut" => "3'",
                "classes" => "fits-one-sixteen reveal-three-sixteen clear alloy-6063 cut-three"
            ),
            "OA7423-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "3/16",
                "reveal" => "5/16",
                "price" => 6.98,
                "cut" => "3'",
                "classes" => "fits-three-sixteen reveal-five-sixteen brite alloy-6063 cut-three"
            ),
            "OA7424-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/4",
                "reveal" => "5/16",
                "price" => 6.98,
                "cut" => "3'",
                "classes" => "fits-quarter reveal-five-sixteen brite alloy-6063 cut-three"
            ),
            "OA7419-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/16",
                "reveal" => "3/32",
                "price" => 9.33,
                "cut" => "3'",
                "classes" => "fits-five-sixteen reveal-three-thirtytwo brite alloy-6063 cut-three"
            ),
            "OA7425-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/16",
                "reveal" => "21/32",
                "price" => 8.93,
                "cut" => "3'",
                "classes" => "fits-five-sixteen reveal-twentyone-thirtytwo brite alloy-6463 cut-three"
            ),
            "OA7408-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/16",
                "reveal" => "3/16",
                "price" => 8.79,
                "cut" => "6'",
                "classes" => "fits-one-sixteen reveal-three-sixteen clear alloy-6063 cut-six"
            ),
            "OA7983-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "3/32",
                "reveal" => "1/4",
                "price" => 4.98,
                "cut" => "6'",
                "classes" => "fits-three-thirtytwo reveal-quarter clear alloy-6063 cut-six"
            ),
            "OA7984-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "7/64",
                "reveal" => "13/67",
                "price" => 4.96,
                "cut" => "6'",
                "classes" => "fits-seven-sixtyfour reveal-thirteen-sixtyseven clear alloy-6063 cut-six"
            ),
            "OA7985-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/8",
                "reveal" => "1/4",
                "price" => 3.06,
                "cut" => "6'",
                "classes" => "fits-one-eight reveal-quarter clear alloy-6063 cut-six"
            ),
            "OA7422-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/32",
                "reveal" => "9/32",
                "price" => 10.09,
                "cut" => "6'",
                "classes" => "fits-five-thirtytwo reveal-nine-thirtytwo brite alloy-6063 cut-six"
            ),
            "OA7423-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "3/16",
                "reveal" => "5/16",
                "price" => 12.21,
                "cut" => "6'",
                "classes" => "fits-three-sixteen reveal-five-sixteen brite alloy-6063 cut-six"
            ),
            "OA7424-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/4",
                "reveal" => "5/16",
                "price" => 12.21,
                "cut" => "6'",
                "classes" => "fits-quarter reveal-five-sixteen brite alloy-6063 cut-six"
            ),
            "OA7986-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/4",
                "reveal" => "3/8",
                "price" => 7.83,
                "cut" => "6'",
                "classes" => "fits-quarter reveal-three-eight clear alloy-6063 cut-six"
            ),
            "OA7419-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/16",
                "reveal" => "3/32",
                "price" => 16.33,
                "cut" => "6'",
                "classes" => "fits-five-sixteen reveal-three-thirtytwo brite alloy-6063 cut-six"
            ),
            "OA7425-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/16",
                "reveal" => "21/32",
                "price" => 16.31,
                "cut" => "6'",
                "classes" => "fits-five-sixteen reveal-twentyone-thirtytwo brite alloy-6063 cut-six"
            ),
            "OA7409-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "3/8",
                "reveal" => "3/8",
                "price" => 15.63,
                "cut" => "6'",
                "classes" => "fits-three-eight reveal-three-eight brite alloy-6063 cut-six"
            ),
            "OA7410-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/2",
                "reveal" => "9/16",
                "price" => 11.69,
                "cut" => "6'",
                "classes" => "fits-half reveal-nine-sixteen clear alloy-6063 cut-six"
            ),
            "OA7985-12" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/8",
                "reveal" => "1/4",
                "price" => 6.12,
                "cut" => "12'",
                "classes" => "fits-one-eight reveal-quarter clear alloy-6063 cut-twelve"
            ),
            "OA7424-12" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/4",
                "reveal" => "5/16",
                "price" => 24.42,
                "cut" => "12'",
                "classes" => "fits-quarter reveal-five-sixteen clear alloy-6063 cut-twelve"
            )
        ),
        "img" => $base_url."img/products/dividers/j-cap-trim.png",
        "img_alt" => "J Cap Edge Trim"
    );
    $panels .= newPanel($trim);

    $pinch = array( 
        "Description" => "",
        "Title" => "J Cap Edge Trim: Pinch Fit",
        "Models" => array(
            "OA7416-6" => array(
                "title" => "J Cap Edge Trim: Pinch Fit",
                "fits" => "19/64",
                "reveal" => "3/8",
                "price" => 13.01,
                "cut" => "6'",
                "classes" => "fits-nineteen-sixtyfour reveal-three-eight clear alloy-6063 cut-six"
            ),
            "OA7423-3" => array(
                "title" => "J Cap Edge Trim: Pinch Fit",
                "fits" => "19/64",
                "reveal" => "5/8",
                "price" => 16.13,
                "cut" => "6'",
                "classes" => "fits-nineteen-sixtyfour reveal-five-eight clear alloy-6063 cut-six"
            )
        ),
        "img" => $base_url."img/products/dividers/j-cap-pinch.png",
        "img_alt" => "J Cap Edge Trim"
    );
    $panels .= newPanel($pinch);

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
            "fits-three-thirtytwo" => array(
                "name" => "fits-three-thirtytwo",
                "title" => '3/32"',
                "group" => "fits"
            ),
            "fits-seven-sixtyfour" => array(
                "name" => "fits-seven-sixtyfour",
                "title" => '7/64"',
                "group" => "fits"
            ),
            "fits-one-eight" => array(
                "name" => "fits-one-eight",
                "title" => '1/8"',
                "group" => "fits"
            ),
            "fits-five-thirtytwo" => array(
                "name" => "fits-five-thirtytwo",
                "title" => '5/32"',
                "group" => "fits"
            ),
            "fits-three-sixteen" => array(
                "name" => "fits-three-sixteen",
                "title" => '3/16"',
                "group" => "fits"
            ),
            "fits-quarter" => array(
                "name" => "fits-quarter",
                "title" => '1/4"',
                "group" => "fits"
            ),
            "fits-nineteen-sixtyfour" => array(
                "name" => "fits-nineteen-sixtyfour",
                "title" => '19/64"',
                "group" => "fits"
            ),
            "fits-five-sixteen" => array(
                "name" => "fits-five-sixteen",
                "title" => '5/16"',
                "group" => "fits"
            ),
            "fits-three-eight" => array(
                "name" => "fits-three-eight",
                "title" => '3/8"',
                "group" => "fits"
            ),
            "fits-one" => array(
                "name" => "fits-half",
                "title" => '1/2"',
                "group" => "fits"
            )
        ));
    $reveal = array( 
        "title" => "Reveal",
        "options" => array(
            "reveal-three-thirtytwo" => array(
                "name" => "reveal-three-thirtytwo",
                "title" => '3/32"',
                "group" => "reveal"
            ),
            "reveal-three-sixteen" => array(
                "name" => "reveal-three-sixteen",
                "title" => '3/16"',
                "group" => "reveal"
            ),
            "reveal-thirteen-sixtyseven" => array(
                "name" => "reveal-thirteen-sixtyseven",
                "title" => '13/67"',
                "group" => "reveal"
            ),
            "reveal-quarter" => array(
                "name" => "reveal-quarter",
                "title" => '1/4"',
                "group" => "reveal"
            ),
            "reveal-nine-thirtytwo" => array(
                "name" => "reveal-nine-thirtytwo",
                "title" => '9/32"',
                "group" => "reveal"
            ),
            "reveal-five-sixteen" => array(
                "name" => "reveal-five-sixteen",
                "title" => '5/16"',
                "group" => "reveal"
            ),
            "reveal-three-eight" => array(
                "name" => "reveal-three-eight",
                "title" => '3/8"',
                "group" => "reveal"
            ),
            "reveal-nine-sixteen" => array(
                "name" => "reveal-nine-sixteen",
                "title" => '9/16"',
                "group" => "reveal"
            ),
            "reveal-five-eight" => array(
                "name" => "reveal-five-eight",
                "title" => '5/8"',
                "group" => "reveal"
            ),
            "reveal-twentyone-thirtytwo" => array(
                "name" => "reveal-twentyone-thirtytwo",
                "title" => '21/32"',
                "group" => "reveal"
            )
        ));


    
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
    $options .= newFilter($reveal);
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Corners Filter</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>J-Cap Edge Trim</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/j-cap.jpg" alt="J-Cap"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Caps, Corners, Coves, and Dividers</a></li>
              <li>J-Cap Edge Trinm</li>
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
                </div>
        </main>
        <?php include("../php/includes/cart.php"); ?>          
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
