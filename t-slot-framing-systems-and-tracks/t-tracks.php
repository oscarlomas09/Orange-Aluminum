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
                                  <th class="text-center hidden-xs">Alloy & Temper</th>
                                  <th class="text-center">Price</th>
                                  <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
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
        global $base_url;
        $row = '';
        foreach($alteration as $item => $value){
        $row .= '<tr class="filter-row '.$value["classes"].'">
                    <td class="item-sku" data-name="'.$item.'"><a href="'.$base_url.'product.php">'.$item.'</a></td>
                    <td class="item-cut">'.$value["cut"].'</td>
                    <td class="item-alloy hidden-xs text-center">'.$value["alloy"].'</td>
                    <td class="item-price text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
        }
        return $row;
    }

    $panels = '';
    $OA7150 = array( 
        "Description" => 'Specialty "T" Track allows you to slide in 1/4"-20 hex head bolts to mount, position, and hang clamps and fixtures. To Reposition Clamps and Fixtures, Loosen the Bolt and Slide to New Position. Ideal for Positioning Jigs, Stops, and Hold-Downs on Table Saws. Multiple Lengths Available.
Custom Lengths Available for Larger Orders Don\'t see your size? We may still have it... Call us NOW 877-464-2181!!!',
        "Title" => "T Track",
        "Models" => array(
            "OA7150-18" => array(
                "title" => "T Track: 18-inches",
                "cut" => '18"',
                "price" => 4.13,
                "classes" => "cut-eighteen",
                "alloy" => "6063-T5"
            ),
            "OA7150-24" => array(
                "title" => "T Track: 24-inches",
                "cut" => '24"',
                "price" => 4.82,
                "classes" => "cut-twentyfour",
                "alloy" => "6063-T5"
            ),
            "OA7150-36" => array(
                "title" => "T Track: 36-inches",
                "cut" => '36"',
                "price" => 6.34,
                "classes" => "cut-thirtysix",
                "alloy" => "6063-T5"
            ),
            "OA7150-48" => array(
                "title" => "T Track: 48-inches",
                "cut" => '48"',
                "price" => 7.83,
                "classes" => "cut-fortyeight",
                "alloy" => "6063-T5"
            )
        ),
        "img" => $base_url."img/products/t-slot/t-track-aside.png",
        "img_alt" => "T-Track"
    );
    $panels .= newPanel($OA7150);

    //filters
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(      
            "eighteen" => array(
                "name" => "cut-eighteen",
                "title" => '18"',
                "group" => "cut"
            ),
            "twentyfour" => array(
                "name" => "cut-twentyfour",
                "title" => '24"',
                "group" => "cut"
            ),
            "thirtysix" => array(
                "name" => "cut-thirtysix",
                "title" => '36"',
                "group" => "cut"
            ),
            "fortyeight" => array(
                "name" => "cut-fortyeight",
                "title" => '48"',
                "group" => "cut"
            )
        )
    );
    $finish = array( 
        "title" => "Finish",
        "options" => array(
            "mill" => array(
                "name" => "fixed",
                "title" => "Mil Finish",
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
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">T Tracks</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>T Tracks</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/t-track.jpg" alt="T Tracks"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">T-Slot Framing Systems and Tracks </a></li>
              <li>T Tracks</li>
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
                                    <p>Specialty “T” Track allows you to slide in 1/4”-20 hex head bolts to mount, position, and hang clamps and fixtures. To reposition clamps and fixtures, loosen the bolt and slide to new position. Ideal for positioning jigs, stops, and hold-downs on table saws. Multiple lengths available.</p>
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
                                                <a data-toggle="tooltip" title="Clear Anodized Finish, Per MIL-A-8625F. Electrochemical process that is corrosion resistant and protects the material from oxidizing">Clear Anodized</a></td>
                                        </tr>
                                        <tr>
                                            <td><b>Cut Length</b></td>
                                            <td style="width:75%;">Available 18", 24", 36" and 48"</td>
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
                                        <tr>
                                            <td><b>FAB</b></td>
                                            <td style="width:75%;">
                                                Punched and Countersunk Holes 3” on Center to Accommodate #8 Pan Head Screws
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
