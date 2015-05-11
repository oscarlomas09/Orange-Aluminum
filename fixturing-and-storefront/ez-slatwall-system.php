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
                           <div class="col-xs-12 col-md-2">
                                <img class="img-tall" alt="'.$product["img_alt"].'" src="'.$product["img"].'"/>
                            </div>
                            <div class="col-xs-12 col-md-10 visible-md visible-lg">
                              <p>'.$product["Description"].'</p>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover" style="width:100%;">
                              <thead>
                                <tr>
                                  <th>SKU</th>
                                  <th>Cut</th>
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
                    <td class="item-cut">'.$value["cut"].'"</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
        }
        return $row;
    }
    $panels = '';
    $OA7389 = array( 
        "Description" => 'EZ Slatwall Systems : Aluminum Stackable Track to be Used as the Main Joining Extrusion to Build the Height and Add the T Slot Functionality. EZ Slatwall System Track is Used in Between the 1/8” Material to Desired Height. This Piece is the Section in which the Wall Panel System’s Height is Grown and Determined. Designed to be Fastened with Screws to the Wall, Stacked Atop a Panel with Top Tab Fastened to a Wall and Repeated Until your Desired Height is reached. This Section is to be Used in Conjunction with the EZ Slatwall System Trim OA7587 and 1/8” Thick Panels (OA125P, Not included).',
        "Title" => "EZ SLATWALL TRACK",
        "Models" => array(
            "OA7389-4" => array(
                "title" => "EZ SLATWALL TRACK: 4 Feet",
                "cut" => "4'",
                "price" => 9.48,
                "classes" => "cut-four"
            ),
            "OA7389-8" => array(
                "title" => "EZ SLATWALL TRACK: 8 Feet",
                "cut" => "8'",
                "price" => 18.96,
                "classes" => "cut-eight"
            )
        ),
        "img" => $base_url."img/products/fixturing/ez-slatwall-track.png",
        "img_alt" => "EZ Slatwall Track"
    );
    $panels .= newPanel($OA7389);

    $OA7587 = array( 
        "Description" => 'EZ Slatwall Systems : Aluminum Trim to be Used as Both the Top and Bottom Trim for the EZ Slatwall System, Designed to be Used with any 1/8” Material. This Piece is the Section in which the Wall Panel System Starts and Terminates. Designed to be Fastened with Screws to the Wall in Bottom Trim Application, Top Trim Application can Either be Left Atop the Rigid 1/8” Panel you Insert or Adhered to the Wall with any Type of Industrial Adhesive. This Section is to be Used in Conjunction with the EZ Slatwall System Track OA7389 and 1/8” Thick Panels (OA125P, Not included).',
        "Title" => "EZ SLATWALL TRIM - TOP/BOTTOM",
        "Models" => array(
            "OA7587-4" => array(
                "title" => "EZ SLATWALL TRIM - TOP/BOTTOM: 4 Feet",
                "cut" => "4'",
                "price" => 5.27,
                "classes" => "cut-four"
            ),
            "OA7587-8" => array(
                "title" => "EZ SLATWALL TRIM - TOP/BOTTOM: 8 Feet",
                "cut" => "8'",
                "price" => 10.54,
                "classes" => "cut-eight"
            )
        ),
        "img" => $base_url."img/products/fixturing/ez-slatwall-trim.png",
        "img_alt" => "EZ Slatwall Trim"
    );
    $panels .= newPanel($OA7587);

    $OA7589 = array( 
        "Description" => 'Our solution for exact finishing off of the edges of your EZ slatwall panel project, the perfect trim at the perfect size to make your finished product look perfect.',
        "Title" => "EZ SLATWALL FINISHING ANGLE",
        "Models" => array(
            "OA7589-4" => array(
                "title" => "EZ SLATWALL FINISHING ANGLE: 4 Feet",
                "cut" => "4'",
                "price" => 3.75,
                "classes" => "cut-four"
            ),
            "OA7589-8" => array(
                "title" => "EZ SLATWALL FINISHING ANGLE: 8 Feet",
                "cut" => "8'",
                "price" => 7.50,
                "classes" => "cut-eight"
            )
        ),
        "img" => $base_url."img/products/fixturing/ez-slatwall-angle.png",
        "img_alt" => "EZ Slatwall Trim"
    );
    $panels .= newPanel($OA7589);

    //filters
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(      
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
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">EZ Slatwall</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>EZ Slatwall System</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/ez-slatwall.jpg" alt="EZ Slatwall"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Fixturing and Storefront</a></li>
              <li>EZ Slatwall System</li>
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
                                    <p><h4>Customization options are simple, affordable and unparalleled by any other product.</h4>
• Slots can be used with both peg board hooks and standard slatwall hardware.<br>
• System can be packaged in small convenient box for ease in handling and shipping.<br>
• Installs in Minutes!<br>
• Patent Pending</p>
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
                                                <a data-toggle="tooltip" title="The natural/raw appearance of the aluminum as it is extruded. No secondary process, may show heavy production lines.">Mill Finish</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Cut Length</b></td>
                                            <td style="width:75%;">4' and 8' Cut Lengths</td>
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
            </div>
        </main>
        <?php include("../php/includes/cart.php"); ?>
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
