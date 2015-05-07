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
                                    <th class="text-center">Finish</th>
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
                    <td class="item-finish text-center">'.$value["finish"].'</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
        }
        return $row;
    }

    $panels = '';

    $round = array( 
        "Description" => 'Premium Grade Round Closet Rod is Heavy enough for any expansion or application, and is the true quality of what American Manufacturing represents. With a 1-5/16" OD and a .079" Wall Thickness, it is no wonder our Rod is the choice for most of the high end closet manufacturers.',
        "Title" => "Round Closet Rod",
        "Models" => array(
            "OA7749-GA" => array(
                "title" => "Round Closet Rod: Gold Anodized",
                "finish" => "Gold Anodized",
                "price" => 11.58,
                "classes" => "finish-gold"
            ),
            "OA7749-OB" => array(
                "title" => "Round Closet Rod: Bronze",
                "finish" => "Oil-Rubbed Bronze",
                "price" => 11.58,
                "classes" => "finish-bronze"
            ),
            "OA7749-CA" => array(
                "title" => "Round Closet Rod: Clear Anodized",
                "finish" => "Clear Anodized",
                "price" => 11.58,
                "classes" => "finish-clear"
            )
        ),
        "img" => $base_url."img/products/cabinet/closet-round-aside.png",
        "img_alt" => "Round Closet Rod"
    );
    $panels .= newPanel($round);
    
    $oval = array( 
        "Description" => 'Premium Grade Oval Closet Rod is Heavy enough for any expansion or application, and is the true quality of what American Manufacturing represents. With its Standard Oval Design of 1-3/16" High and 19/32" Width and a .060" Wall Thickness, it is no wonder our Rod is the choice for most of the high end closet manufacturers.',
        "Title" => "Oval Closet Rod",
        "Models" => array(
            "OA8443-GA" => array(
                "title" => "Oval Closet Rod: Gold Anodized",
                "finish" => "Gold Anodized",
                "price" => 15.42,
                "classes" => "finish-gold"
            ),
            "OA8443-OB" => array(
                "title" => "Oval Closet Rod: Bronze",
                "finish" => "Oil-Rubbed Bronze",
                "price" => 15.42,
                "classes" => "finish-bronze"
            ),
            "OA8443-CA" => array(
                "title" => "Oval Closet Rod: Clear Anodized",
                "finish" => "Clear Anodized",
                "price" => 15.42,
                "classes" => "finish-clear"
            )
        ),
        "img" => $base_url."img/products/cabinet/closet-oval-aside.png",
        "img_alt" => "Oval Closet Rod"
    );
    $panels .= newPanel($oval);

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
            "clear" => array(
                "name" => "finish-clear",
                "title" => "Clear Anodized",
                "group" => "finish"
            ),
            "gold" => array(
                "name" => "finish-gold",
                "title" => "Gold Anodized",
                "group" => "finish"
            ),    
            "oil" => array(
                "name" => "finish-bronze",
                "title" => "Oil-Rubbed Bronze",
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
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Closet Rods Filter</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Closet Rods</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/closet.jpg" alt="Closet Rods"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Cabinet, Case and Closet</a></li>
              <li>Closet Rods</li>
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Product Info</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                               <div class="col-xs-12">
                                    <p>Dress up your closets with Orange Aluminum’s Premium Closet Rods. Our system has a generous wall thickness that provides top-rated load bearing. Our closet rods not only look great, but boast the quality of American made products.</p>
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
                                                <a data-toggle="tooltip" title="Anodizing is an electrochemical process that is corrosion resistant and protects the material from oxidizing.">Clear</a>,
                                                <a data-toggle="tooltip" title="This piece is Gold Anodized">Gold</a>, and
                                                <a data-toggle="tooltip" title="This piece is anodized in an oil-rubbed bronze color:.">Oil-Rubbed Bronze</a> Anodized Finishes.
                                            </td>
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
                </div>
        </main>
        <?php include("../php/includes/cart.php"); ?>  
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
</html>
