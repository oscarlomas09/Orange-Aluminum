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
                                    <th>Fits</th>
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
        $row = '';
        foreach($alteration as $item => $value){
        $row .= '<tr class="filter-row '.$value["classes"].'">
                    <td class="item-sku" data-name="'.$item.'"><a href="'.$base_url.'product.php">'.$item.'</a></td>
                    <td class="item-fits">'.$value["fits"].'"</td>
                    <td class="item-finish hidden-xs text-center">'.$value["finish"].'</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
        }
        return $row;
    }

    $panels = '';

    $shelf = array( 
        "Description" => '• For push fit on material withthicknesses of 3/4” and 1”.<br>
• Ideal for correcting and preventing sagging shelves in garage cabinets, pantries, and closets.<br>
• Popularly used in combination with OA6920 Pressure Fit Continuous Pull',
        "Title" => "Shelf Stiffener",
        "Models" => array(
            "OA5479-CA" => array(
                "title" => "Shelf Stiffener",
                "finish" => "Clear Anodized",
                "fits" => "3/4",
                "price" => 15.53,
                "classes" => "finish-clear fits-three-quarter"
            ),
            "OA5479-WP" => array(
                "title" => "Shelf Stiffener",
                "finish" => "White Powder Coat",
                "fits" => "3/4",
                "price" => 17.53,
                "classes" => "finish-white fits-three-quarter"
            ),
            "OA5479-BP" => array(
                "title" => "Shelf Stiffener",
                "finish" => "Black Powder Coat",
                "fits" => "3/4",
                "price" => 17.53,
                "classes" => "finish-black fits-three-quarter"
            ),
            "OA7697" => array(
                "title" => "Shelf Stiffener",
                "finish" => "Clear Anodized",
                "fits" => "1",
                "price" => 19.33,
                "classes" => "finish-clear fits-one"
            )
        ),
        "img" => $base_url."img/products/cabinet/shelf-aside.png",
        "img_alt" => "Shelf Stiffener"
    );
    $panels .= newPanel($shelf);

    $continuous = array( 
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
                "price" => 20.13,
                "classes" => "finish-clear fits-three-quarter"
            ),
            "OA6920-WP" => array(
                "title" => "Continuous Pull",
                "finish" => "White Powder Coat",
                "fits" => "3/4",
                "price" => 22.13,
                "classes" => "finish-white fits-three-quarter"
            ),
            "OA6920-BP" => array(
                "title" => "Continuous Pull",
                "finish" => "Black Powder Coat",
                "fits" => "3/4",
                "price" => 22.13,
                "classes" => "finish-black fits-three-quarter"
            )
        ),
        "img" => $base_url."img/products/cabinet/pull-aside.png",
        "img_alt" => "Continuous Pullr"
    );
    $panels .= newPanel($continuous);

    //Filters
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(      
            "eight" => array(
                "name" => "fixed",
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
            "black" => array(
                "name" => "finish-black",
                "title" => "Black Powder Coat",
                "group" => "finish"
            ),    
            "white" => array(
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
            "fits-three-quarter" => array(
                "name" => "fits-three-quarter",
                "title" => '3/4"',
                "group" => "fits"
            ),
            "fits-one" => array(
                "name" => "fits-one",
                "title" => '1"',
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
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Trim Filter</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Cabinet Trims</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/cabinet-trim.jpg" alt="Cabinet Trim"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Cabinet, Case and Closet</a></li>
              <li>Garage Cabinet Trim</li>
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
                                    <p>Use our premium aluminum clear anodized handles to finish off your cabinets. The combination of the shelf stiffener and the continuous pull adds both function and style to any color cabinets. These sections are specially engineered to pressure fit onto melamine boards. The shelf stiffener will snap any shelf straight and maintain shelves’ rigidity over time from excessive poundage and use. The continuous pull is cheaper than some regular steel handles on the market and provides a far more sleek and attractive means to open cabinets, while contributing to a flush sleek cabinet installation. With a premium look and the multiple advantages of using aluminum, there is no better way to customize your cabinets today.</p>
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
