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
                            <div class="col-xs-12 col-sm-9 hidden-xs">
                              <p>'.$product["Description"].'</p>
                            </div>
                           <div class="col-xs-12 col-sm-3">
                                <img class="img-tall" alt="'.$product["img_alt"].'" src="'.$product["img"].'"/>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover" style="width:100%;">
                              <thead><tr>
                                    <th>SKU</th>
                                    <th>Covers</th>
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
        $cut = "";
        $row = '';
        foreach($alteration as $item => $value){
            if($value["cut"] != $cut){
                $row .= '<tr class="filter-fixed filter-row"><td colspan="5"><b>'.$value["cut"].' Cut Length</b></td></tr>';
                $cut = $value["cut"];
            }
            $row .= '<tr class="filter-row '.$value["classes"].'">
                    <td class="item-sku" data-name="'.$item.'"><a href="'.$base_url.'product.php">'.$item.'</a></td>
                    <td class="item-dimensions">'.$value["covers"].'"</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
        }
        return $row;
    }

    $panels = '';
    $smooth = array( 
        "Description" => 'Mechanically Polished Aluminum Edge Molding, Smooth Modern Face Asthetic . Designed to Mount to Material via a 1/10" Routed Saw Kerf',
        "Title" => "Smooth Push In Edge Trim",
        "Models" => array(
            "OA6028-3" => array(
                "title" => "Smooth Push In Edge Trim",
                "cut" => "3'",
                "covers" => "3/4",
                "price" => 3.79,
                "classes" => "cut-three covers-three-quarter"
            ),
            "OA5688-3" => array(
                "title" => "Smooth Push In Edge Trim",
                "cut" => "3'",
                "covers" => "1-1/4",
                "price" => 7,
                "classes" => "cut-three covers-one-one-quarter"
            ),
            "OA6028-6" => array(
                "title" => "Smooth Push In Edge Trim",
                "cut" => "6'",
                "covers" => "3/4",
                "price" => 6.63,
                "classes" => "cut-six covers-three-quarter"
            ),
            "OA5688-6" => array(
                "title" => "Smooth Push In Edge Trim",
                "cut" => "6'",
                "covers" => "1-1/4",
                "price" => 12.25,
                "classes" => "cut-six covers-one-one-quarter"
            )
        ),
        "img" => $base_url."img/products/trims/smooth-trim-diagram.png",
        "img_alt" => "Smooth Trim"
    );
    $panels .= newPanel($smooth);

    $flutted = array( 
        "Description" => "Mechanically Polished Aluminum Edge Molding, Face has Fluted 50's Retro Diner Asthetic Detail. Designed to Mount to Material via a 1/8\" Routed Saw Kerf",
        "Title" => "Fluted Push In Edge Trim",
        "Models" => array(
            "OA5532-3" => array(
                "title" => "Fluted Push In Edge Trim",
                "cut" => "3'",
                "covers" => "1-1/4",
                "price" => 4.87,
                "classes" => "cut-three covers-one-one-quarter"
            ),
            "OA5239-3" => array(
                "title" => "Fluted Push In Edge Trim",
                "cut" => "3'",
                "covers" => "1-1/2",
                "price" => 7.08,
                "classes" => "cut-three covers-one-one-half"
            ),
            "OA5532-6" => array(
                "title" => "Fluted Push In Edge Trim",
                "cut" => "6'",
                "covers" => "1-1/4",
                "price" => 8.53,
                "classes" => "cut-six covers-one-one-quarter"
            ),
            "OA5239-6" => array(
                "title" => "Fluted Push In Edge Trim",
                "cut" => "6'",
                "covers" => "1-1/2",
                "price" => 12.39,
                "classes" => "cut-six covers-one-one-half"
            ),
            "OA5239-12" => array(
                "title" => "Fluted Push In Edge Trim",
                "cut" => "12'",
                "covers" => "1-1/2",
                "price" => 24.78,
                "classes" => "cut-twelve covers-one-one-half"
            ),
        ),
        "img" => $base_url."img/products/trims/smooth-trim-diagram.png",
        "img_alt" => "Smooth Trim"
    );
    $panels .= newPanel($flutted);

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
            "polished" => array(
                "name" => "fixed",
                "title" => "Mechanically Polished",
                "group" => "finish"
            )        
        )
    );
    $alloy = array( 
        "title" => "Alloy & Temper",
        "options" => array(
            "alloy-6063" => array(
                "name" => "fixed",
                "title" => "6063-T5",
                "group" => "alloy"
            )
        )
    );
    $covers = array( 
        "title" => "Covers",
        "options" => array(
            "covers-three-quarter" => array(
                "name" => "covers-three-quarter",
                "title" => '3/4"',
                "group" => "covers"
            ),
            "covers-one-one-quarter" => array(
                "name" => "covers-one-one-quarter",
                "title" => '1-1/4"',
                "group" => "covers"
            ),
            "covers-one-one-half" => array(
                "name" => "covers-one-one-half",
                "title" => '1-1/2"',
                "group" => "covers"
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
    $options .= newFilter($covers);
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Tee Moulding</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Tee Moulding</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/tee-molding.jpg" alt="Tee Moulding"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Tee Molding & Edge Trims</a></li>
              <li>Tee Moulding</li>
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
                            <img src="../img/tolerance.jpg" alt="Tolerance Table" style="max-width:100%;"/>
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
                                    <p>The difference between a run-of-the-mill countertop, table or display and one that captures attention is often in the details. Whether you are looking to create a traditional 50’s look or something with contemporary flare, our edge trims add customized style while providing protection.</p>
                                    <table style="width:100%;">
                                        <tr>
                                            <td><b>Alloy</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="Ultra-Corrosive Resistant Architectural Grade Alloy">(CA) 6063-T5</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Finish</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="Process that buffs out the surface finish to create a smooth, mirror-ish appearance. Does not protect the material from oxidizing">Mechanically Polished</a>
                                            </td>
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
                                            <td style="width:75%;">Punched and Countersunk Holes 6” on Center</td>
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
