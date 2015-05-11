<?php 
    include("../php/helper.php");
    $base_url = getBaseUrl();
    $row = 0;
    $wall_thickness = "";
    $name = "Flat Bars";
    $mill_panel = '<div class="panel panel-default panel-fluid">
    <div class="panel-heading">
        <h3 class="panel-title">Metric Flat-Bars</h3>
    </div>
    <div class="panel-default container-fluid">
        <div class="row"><table class="table table-hover" style="width:100%;margin-bottom:0;">';

    if (($handle = fopen("../docs/angles.csv", "r")) !== FALSE) {
        /***** CSV FILE STRUCTURE *******/
        /*
             0  |  1  |    2   |   3   |   4  |   5   |   6   |    7    |   8
            SKU | Cut | Finish | Alloy | Wall | Leg A | Leg B | Classes | Price
        */
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $sku = $data[0];
            $cut = $data[1];
            $dimensions = $data[5].' x '.$data[6];
            $classes = $data[7];
            $price = $data[8];
            
            //skip the first row
            if($row < 1){
                $mill_panel .= '<thead><tr>
                    <th>'.$sku.'</th>
                    <th>'.$dimensions.'</th>
                    <th class="hidden-xs hidden-sm text-center">'.$cut.'</th>
                    <th class="hidden-xs hidden-sm text-center">'.$price.'</th>
                    <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
                </tr></thead>';
                $row++;
                continue;
            }
            
            if($data[4] != $wall_thickness){
                $mill_panel .= '<tr class="filter-fixed filter-row"><td colspan="5"><b>'.$data[4].' Wall Thickness</b></td></tr>';
                $wall_thickness = $data[4];
            }
            $mill_panel .= '<tr class="filter-row '.$classes.'">
                <td class="item-sku" data-name="'.$name.'"><a href="'.$base_url.'product.php">'.$sku.'</a></td>
                <td class="item-dimensions">'.$dimensions.'</td>
                <td class="hidden-xs hidden-sm text-center">'.$cut.'</td>
                <td class="item-price hidden-xs hidden-sm text-center" data-price="'.$price.'">$'.number_format($price, 2, '.', '').'</td>
                <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
            </tr>';
            $row++;  
        }
        fclose($handle);
    }
    $mill_panel .= '</table></div></div></div>';

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
            "eight" => array(
                "name" => "cut-eight",
                "title" => "8'",
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
            "mill" => array(
                "name" => "fixed",
                "title" => "Mill Finish",
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
            "alloy-6061" => array(
                "name" => "alloy-6061",
                "title" => "6061-T6",
                "group" => "alloy"
            ),
        )
    );
    $wall = array( 
        "title" => "Wall Thickness",
        "options" => array(
            "one-sixteen" => array(
                "name" => "wall-one-sixteen",
                "title" => '1/16"',
                "group" => "wall"
            ),
            "one-eight" => array(
                "name" => "wall-one-eight",
                "title" => '1/8"',
                "group" => "wall"
            ),
            "three-three-sixteen" => array(
                "name" => "wall-three-sixteen",
                "title" => '3/16"',
                "group" => "wall"
            ),
            "three-quarter" => array(
                "name" => "wall-quarter",
                "title" => '1/4"',
                "group" => "wall"
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
    $options .= newFilter($wall);
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Flat-Bars Filter</h3><img class="hidden-xs" src="'.$base_url.'img/products/bars/flat-diagram.png" alt="Diagram"/>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Flat-Bars</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/flat-bars.jpg" alt="Flat Bars"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Bar Stock</a></li>
              <li>Flat Bars</li>
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
            <table class="filter-table">
                <tr>
                    <td><div id="filter-btn" data-toggle="collapse" data-target="#filters" aria-expanded="false" aria-controls="filters"><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;Filter</div></td>
                    <td style="width: 150px;"><img src="<?php echo BASE_URL;?>img/products/bars/flat-diagram.png" alt="Diagram" style="max-height: 89px; width: auto;float:right;"/></td>
                </tr>
            </table>
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
                                   <p><h4>Rectangular and Square Bar Stock</h4></p>
                                    <table style="width:100%;">
                                        <tr>
                                            <td><b>Alloy</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="Ultra-Corrosive Resistant Architectural Grade Alloy">6063-T5</a> and 
                                                <a data-toggle="tooltip" title="Multi-Purpose Structural Grade Aluminum">6061-T6</a>
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
                                            <td style="width:75%;">6' and 12' Cut Lengths</td>
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
                               <div class="col-sm-3 hidden-xs">
                                   <img src="<?php echo BASE_URL;?>img/products/bars/flat-aside.png" alt="Flat Bars" />
                               </div>
                            </div>
                        </div>
                    </div>
                   <?php echo $mill_panel; ?>
                </div></div>
        </main>
        <?php include("../php/includes/cart.php"); ?>        
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>