<?php
    include("../php/helper.php");
    $base_url = getBaseUrl();
    global $base_url;
    function newPanel($product){
        $models = $product["Models"];
        $alterations = newModel($models);
        $panel = '<div class="panel panel-default panel-fluid" style="margin:0.8%;">
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
                                    <th class="hidden-xs text-center">Finish</th>
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
                    <td class="item-finish hidden-xs text-center">'.$value["finish"].'</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
        }
        return $row;
    }

    $panels = '';
    $edge = array( 
        "Description" => 'Brite-Dip and Clear Anodized Aluminum Edge Molding, also Known as Overlapping Face Molding',
        "Title" => "Edge Trim",
        "Models" => array(
            "OA7429-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "1/2",
                "price" => 6.36,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-half finish-brite alloy-6063"
            ),
            "OA7428-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "3/4",
                "price" => 7.03,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-three-quarter finish-brite alloy-6063"
            ),
            "OA7432-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "7/8",
                "price" => 7.54,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-seven-eight finish-brite alloy-6063"
            ),
            "OA7430-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "1-1/16",
                "price" => 8.36,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-one-one-sixteen finish-brite alloy-6063"
            ),
            "OA7431-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "1-1/4",
                "price" => 8.93,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-one-one-quarter finish-brite alloy-6063"
            ),
            "OA7429-6" => array(
                "title" => "Edge Trim",
                "cut" => "6'",
                "covers" => "1/2",
                "price" => 11.13,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-half finish-brite alloy-6063"
            ),
            "OA7428-6" => array(
                "title" => "Edge Trim",
                "cut" => "6'",
                "covers" => "3/4",
                "price" => 12.31,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-three-quarter finish-brite alloy-6063"
            ),
            "OA7432-6" => array(
                "title" => "Edge Trim",
                "cut" => "6'",
                "covers" => "7/8",
                "price" => 13.19,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-seven-eight finish-brite alloy-6063"
            ),
            "OA7430-6" => array(
                "title" => "Edge Trim",
                "cut" => "6'",
                "covers" => "1-1/16",
                "price" => 14.63,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-one-one-sixteen finish-brite alloy-6063"
            ),
            "OA7429-6" => array(
                "title" => "Edge Trim",
                "cut" => "6'",
                "covers" => "1-1/4",
                "price" => 15.63,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-one-one-quarter finish-brite alloy-6063"
            ),
            "OA9538-6" => array(
                "title" => "Edge Trim",
                "cut" => "6'",
                "covers" => "1-5/8",
                "price" => 22.95,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-one-five-eight finish-clear alloy-6063"
            ),
            "OA7429-12" => array(
                "title" => "Edge Trim",
                "cut" => "12'",
                "covers" => "1/2",
                "price" => 22.26,
                "finish" => "Clear Anodized Finish",
                "classes" => "cut-twleve covers-half finish-clear alloy-6063"
            ),
            "OA7428-12" => array(
                "title" => "Edge Trim",
                "cut" => "12'",
                "covers" => "3/4",
                "price" => 24.63,
                "finish" => "Clear Anodized Finish",
                "classes" => "cut-twleve covers-three-quarter finish-clear alloy-6063"
            ),
            "OA7432-12" => array(
                "title" => "Edge Trim",
                "cut" => "12'",
                "covers" => "7/8",
                "price" => 26.38,
                "finish" => "Clear Anodized Finish",
                "classes" => "cut-twleve covers-seven-eight finish-clear alloy-6063"
            ),
            "OA9538-12" => array(
                "title" => "Edge Trim",
                "cut" => "12'",
                "covers" => "1-5/8",
                "price" => 34.99,
                "finish" => "Clear Anodized Finish",
                "classes" => "cut-twleve covers-one-five-eight finish-clear alloy-6063"
            )
        ),
        "img" => $base_url."img/products/trims/edge-trim-aside.png",
        "img_alt" => "Edge Trim"
    );
    $panels .= newPanel($edge);

    $heavy = array( 
        "Description" => 'Brite-Dip and Clear Anodized Aluminum Edge Molding, also Known as Overlapping Face Molding',
        "Title" => "Edge Trim Heavy Lip",
        "Models" => array(
            "OA7433-3" => array(
                "title" => "Edge Trim Heavy Lip",
                "cut" => "3'",
                "covers" => "13/16",
                "price" => 8.22,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-thirteen-sixteen finish-brite alloy-6063"
            ),
            "OA7434-3" => array(
                "title" => "Edge Trim Heavy Lip",
                "cut" => "3'",
                "covers" => "1-1/2",
                "price" => 8.99,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-one-one-half finish-brite alloy-6063"
            ),
            "OA7432-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "7/8",
                "price" => 7.54,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-seven-eight finish-brite alloy-6063"
            ),
            "OA7433-6" => array(
                "title" => "Edge Trim Heavy Lip",
                "cut" => "6'",
                "covers" => "13/16",
                "price" => 14.39,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-thirteen-sixteen finish-brite alloy-6063"
            ),
            "OA7434-6" => array(
                "title" => "Edge Trim Heavy Lip",
                "cut" => "6'",
                "covers" => "1-1/2",
                "price" => 15.73,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-one-one-half finish-brite alloy-6063"
            ),
            "OA9538-12" => array(
                "title" => "Edge Trim Heavy Lip",
                "cut" => "12'",
                "covers" => "13/16",
                "price" => 28.72,
                "finish" => "Mechanically Polished",
                "classes" => "cut-twleve covers-thirteen-sixteen finish-polished alloy-6063"
            )
        ),
        "img" => $base_url."img/products/trims/heavy-lip-aside.png",
        "img_alt" => "Edge Trim"
    );
    $panels .= newPanel($heavy);

    $grooved = array( 
        "Description" => 'Brite-Dip and Clear Anodized Aluminum Edge Molding, also Known as Overlapping Face Molding',
        "Title" => "Grooved Edge Trim",
        "Models" => array(
            "OA7435-3" => array(
                "title" => "Grooved Edge Trim",
                "cut" => "3'",
                "covers" => "2",
                "price" => 10.14,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-two finish-brite alloy-6063"
            ),
            "OA7435-6" => array(
                "title" => "Grooved Edge Trim",
                "cut" => "6'",
                "covers" => "2",
                "price" => 17.74,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-two finish-brite alloy-6063"
            ),
            "OA7435-12" => array(
                "title" => "Grooved Edge Trim",
                "cut" => "12'",
                "covers" => "2",
                "price" => 35.58,
                "finish" => "Mechanically Polished",
                "classes" => "cut-twelve covers-two finish-polished alloy-6063"
            )
        ),
        "img" => $base_url."img/products/trims/grooved-aside.png",
        "img_alt" => "Edge Trim"
    );
    $panels .= newPanel($grooved);

    $round = array( 
        "Description" => 'Brite-Dip and Clear Anodized Aluminum Edge Molding, also Known as Overlapping Face Molding',
        "Title" => "Round Edge Trim",
        "Models" => array(
            "OA7426-3" => array(
                "title" => "Round Edge Trim",
                "cut" => "3'",
                "covers" => "3/4",
                "price" => 9.95,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-three-quarter finish-brite alloy-6063"
            ),
            "OA7427-3" => array(
                "title" => "Round Edge Trim",
                "cut" => "3'",
                "covers" => "63/64",
                "price" => 13.80,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-sixtythree-sixtyfour finish-brite alloy-6063"
            ),
            "OA7426-6" => array(
                "title" => "Round Edge Trim",
                "cut" => "6'",
                "covers" => "3/4",
                "price" => 17.42,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-three-quarter finish-brite alloy-6063"
            ),
            "OA7427-6" => array(
                "title" => "Round Edge Trim",
                "cut" => "6'",
                "covers" => "63/64",
                "price" => 24.15,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-sixtythree-sixtyfour finish-brite alloy-6063"
            )
        ),
        "img" => $base_url."img/products/trims/grooved-aside.png",
        "img_alt" => "Edge Trim"
    );
    $panels .= newPanel($round);

    $rounded = array( 
        "Description" => 'Brite-Dip and Clear Anodized Aluminum Edge Molding, also Known as Overlapping Face Molding',
        "Title" => "Rounded Edge Trim",
        "Models" => array(
            "OA7436-3" => array(
                "title" => "Rounded Edge Trim",
                "cut" => "3'",
                "covers" => "3/8",
                "price" => 9.85,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-three-eight finish-brite alloy-6063"
            ),
            "OA7437-3" => array(
                "title" => "Rounded Edge Trim",
                "cut" => "3'",
                "covers" => "1/2",
                "price" => 10.73,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-half finish-brite alloy-6063"
            ),
            "OA7438-3" => array(
                "title" => "Rounded Edge Trim",
                "cut" => "3'",
                "covers" => "3/4",
                "price" => 10.88,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-three-quarter finish-brite alloy-6063"
            ),
            "OA7439-3" => array(
                "title" => "Rounded Edge Trim",
                "cut" => "3'",
                "covers" => "1",
                "price" => 13.02,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-three covers-one finish-brite alloy-6063"
            ),
            "OA7436-6" => array(
                "title" => "Rounded Edge Trim",
                "cut" => "6'",
                "covers" => "3/8",
                "price" => 17.23,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-three-eight finish-brite alloy-6063"
            ),
            "OA7437-6" => array(
                "title" => "Rounded Edge Trim",
                "cut" => "6'",
                "covers" => "1/2",
                "price" => 18.77,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-half finish-brite alloy-6063"
            ),
            "OA7438-6" => array(
                "title" => "Rounded Edge Trim",
                "cut" => "6'",
                "covers" => "3/4",
                "price" => 19.04,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-three-quarter finish-brite alloy-6063"
            ),
            "OA7439-6" => array(
                "title" => "Rounded Edge Trim",
                "cut" => "6'",
                "covers" => "1",
                "price" => 22.79,
                "finish" => "Brite-Dip Finish",
                "classes" => "cut-six covers-one finish-brite alloy-6063"
            ),
            "OA7438-12" => array(
                "title" => "Rounded Edge Trim",
                "cut" => "12'",
                "covers" => "3/4",
                "price" => 38.16,
                "finish" => "Clear Anodized",
                "classes" => "cut-twelve covers-three-quarter finish-clear alloy-6063"
            )
        ),
        "img" => $base_url."img/products/trims/grooved-aside.png",
        "img_alt" => "Edge Trim"
    );
    $panels .= newPanel($rounded);
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
            ),    
            "polished" => array(
                "name" => "finish-polished",
                "title" => "Mechanically Polished",
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
            "alloy-6063" => array(
                "name" => "alloy-6063",
                "title" => "6063-T5",
                "group" => "alloy"
            )
        )
    );
    $covers = array( 
        "title" => "Covers",
        "options" => array(
            "covers-three-eight" => array(
                "name" => "covers-three-eight",
                "title" => '3/8"',
                "group" => "covers"
            ),
            "covers-half" => array(
                "name" => "covers-half",
                "title" => '1/2"',
                "group" => "covers"
            ),
            "covers-three-quarter" => array(
                "name" => "covers-three-quarter",
                "title" => '3/4"',
                "group" => "covers"
            ),
            "covers-thirteen-sixteen" => array(
                "name" => "covers-thirteen-sixteen",
                "title" => '13/16"',
                "group" => "covers"
            ),
            "covers-seven-eight" => array(
                "name" => "covers-seven-eight",
                "title" => '7/8"',
                "group" => "covers"
            ),
            "covers-sixtythree-sixtyfour" => array(
                "name" => "covers-sixtythree-sixtyfour",
                "title" => '63/64"',
                "group" => "covers"
            ),
            "covers-one" => array(
                "name" => "covers-one",
                "title" => '1"',
                "group" => "covers"
            ),
            "covers-one-one-sixteen" => array(
                "name" => "covers-one-one-sixteen",
                "title" => '1-1/16"',
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
            ),
            "covers-one-five-eight" => array(
                "name" => "covers-one-five-eight",
                "title" => '1-5/8"',
                "group" => "covers"
            ),
            "covers-two" => array(
                "name" => "covers-two",
                "title" => '2"',
                "group" => "covers"
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
    $options .= newFilter($covers);
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Trim Filter</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Edge Trims</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/trims.jpg" alt=""></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Tee Molding & Edge Trims</a></li>
              <li>Edge Trims</li>
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
                                                <a data-toggle="tooltip" title="Ultra-Corrosive Resistant Architectural Grade Alloy">(CA) 6063-T5</a><br>
                                                <a data-toggle="tooltip" title="Considered a Brite-Dip alloy, specially engineered for brite anodize finishes">(BD) 6063-T5</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Finish</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="Clear Anodized Finish, Per MIL-A-8625F. Electrochemical process that is corrosion resistant and protects the material from oxidizing.">Clear Anodized</a>, 
                                                <a data-toggle="tooltip" title="Process that buffs out the surface finish to create a smooth, mirror-ish appearance. Does not protect the material from oxidizing">Mechanically Polished</a> and    
                                                <a data-toggle="tooltip" title="A shiny finish that is corrosion resistant and protects the material from oxidizing.">Brite Dip Anodized</a>
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
            </div>
        </main>
        <?php include("../php/includes/cart.php"); ?>
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
