<?php
    include("../php/helper.php");
    $base_url = getBaseUrl();
    //filters
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
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Slatwall Systems</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Snap Frames</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/snap-frame.jpg" alt="Snap Frames"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Fixturing and Storefront</a></li>
              <li>Snap Frames</li>
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
                                    <p>Specialty designed for the elite, American made, and Style with Function. We have designed one of the most popular rounded style snap frame extrusions on the market, easy on the eye and on your pocket book. They are sold in 8 Foot Lengths and include Corner Brackets and your required Spring Steel! We are sure that our Extruded Snap Frame Extrusions will add the style and function to the advertisements your client is looking for.</p>
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
                                                <a data-toggle="tooltip" title="Clear Anodized Finish, Per MIL-A-8625F. Electrochemical process that is corrosion resistant and protects the material from oxidizing.">Clear Anodized</a></td>
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
                    <!-- COVER -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cover</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-10 visible-md visible-lg">
                                  <p>Clear Anodized Aluminum Snap Frame Cover Cap, engineered to easily hinge atop our Base Extrusion with precise accuracy. Sold in long lengths to allow you to meet the variety of printed advertisements your project may require.
4 Corner brackets and 4 Spring Steels Included with every 8 foot pairing lengths</p>
                                </div>
                                <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="Snap Frame: Cover" src="<?php echo BASE_URL;?>img/products/fixturing/snap-cover-aside.png"/>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>SKU</th>
                                      <th>Cut</th>
                                      <th class="text-center hidden-xs">Finish</th>
                                      <th class="text-center">Price</th>
                                      <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="filter-row">
                                      <td class="item-sku" data-name="OA9069"><a href="<?php echo BASE_URL;?>product.php?sku=oa9069">OA9069</a></td>
                                      <td>8'</td>
                                      <td class="text-center hidden-cs">Clear Anodized</td>
                                      <td class="text-center">$12.86</td>
                                      <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- BASE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Base</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-10 visible-md visible-lg">
                                  <p>Clear Anodized Aluminum Snap Frame Base Plate, designed to easily work perfectly with our Cap profile, while engineered with the bottom mount T Track to allow for easier assembly and accommodation for our flush hanger. The OA9410 Hanger Extrusion quickly mounts to the wall while providing a functional tongue that serves as the hanging rail for the base to slide easily into. Sold in long lengths to allow you to meet the variety of printed advertisements your project may require.
4 Corner brackets and 4 Spring Steels Included with every 8 foot pairing lengths</p>
                                </div>
                               <div class="col-xs-12 col-md-2">
                                    <img class="img-tall" alt="Snap Frame: Base" src="<?php echo BASE_URL;?>img/products/fixturing/snap-base-aside.png"/>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>SKU</th>
                                      <th>Cut</th>
                                      <th class="text-center hidden-xs">Finish</th>
                                      <th class="text-center">Price</th>
                                      <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="filter-row">
                                      <td class="item-sku" data-name="OA9055"><a href="<?php echo BASE_URL;?>product.php?sku=OA9055">OA9055</a></td>
                                      <td>8'</td>
                                      <td class="text-center hidden-cs">Clear Anodized</td>
                                      <td class="text-center">$14.72</td>
                                      <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
