<?php
    include("../php/helper.php");
    $base_url = getBaseUrl();
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
                                    <th>Ticket Size</th>
                                    <th>Material Size</th>
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
                    <td class="item-ticket">'.$value["ticket"].'"</td>
                    <td class="item-material">'.$value["material"].'"</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
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
                "classes" => "ticket-one-nine-sixtyfour material-one-one-quarter",
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
                "classes" => "ticket-all material-three-twentyfive-fortyone",
                "ticket" => "All Of the Above ",	    
                "material" => "3-25/41"
            )
        ),
        "img" => $base_url."img/products/fixturing/price-tag-universal.png",
        "img_alt" => "UNIVERSAL PRICE TAG MOLDING"
    );
    $panels .= newPanel($universal);

    //filters
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(      
            "six" => array(
                "name" => "fixed",
                "title" => "6'",
                "group" => "cut"
            )
        )
    );
    $finish = array( 
        "title" => "Finish",
        "options" => array(
            "polished" => array(
                "name" => "fixed",
                "title" => "Mechanical Polished",
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
    $ticket = array( 
        "title" => "Ticket Size",
        "options" => array(
            "five-eight" => array(
                "name" => "ticket-five-eight",
                "title" => '5/8"',
                "group" => "ticket"
            ),
            "seven-eight" => array(
                "name" => "ticket-seven-eight",
                "title" => '7/8"',
                "group" => "ticket"
            ),
            "one-seven-sixtyfour" => array(
                "name" => "ticket-one-seven-sixtyfour",
                "title" => '1-7/64"',
                "group" => "ticket"
            ),
            "one-nine-sixtyfour" => array(
                "name" => "ticket-one-nine-sixtyfour",
                "title" => '1-9/64"',
                "group" => "ticket"
            ),
            "all" => array(
                "name" => "ticket-all",
                "title" => 'All of the Above',
                "group" => "ticket"
            ),
        )
    );
    $material = array( 
        "title" => "Material Size",
        "options" => array(
            "three-quarter" => array(
                "name" => "material-three-quarter",
                "title" => '3/4"',
                "group" => "material"
            ),
            "seven-eight" => array(
                "name" => "material-one-one-eight",
                "title" => '1-1/8"',
                "group" => "material"
            ),
            "one-one-quarter" => array(
                "name" => "material-one-one-quarter",
                "title" => '1-1/4"',
                "group" => "material"
            ),
            "one-fifteen-thirtytwo" => array(
                "name" => "material-one-fifteen-thirtytwo",
                "title" => '1-15/32"',
                "group" => "material"
            ),
            "three-twentyfive-fortyone" => array(
                "name" => "material-three-twentyfive-fortyone",
                "title" => '3-25/41"',
                "group" => "material"
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
    $options .= newFilter($ticket);
    $options .= newFilter($material);
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Price Tag Moldings</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
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
                </div></div>
        </main>
        <?php include("../php/includes/cart.php"); ?>
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
