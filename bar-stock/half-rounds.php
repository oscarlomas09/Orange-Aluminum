<?php 
    include("../php/helper.php");
    $base_url = getBaseUrl();
    $group = "Half Rounds";
    $filters = array(
        "cut" => array( 
            "title" => "Cut Length",
            "options" => array()
        ),
        "finish" => array( 
            "title" => "Finish",
            "options" => array()
        ),
        "alloy" => array( 
            "title" => "Alloy & Temper",
            "options" => array()
        ),
        "od-in" => array( 
            "title" => "OD (in)",
            "options" => array()
        )
    );

    function newPanel($file, $name, $group){      
        global $base_url, $filters;
        $row = 0;
        $headings = array();
        $products = array();
        
        if (($handle = fopen($file, "r")) !== FALSE) {
            /***** CSV FILE STRUCTURE *******/
            /*
                 0  |  1  |    2   |   3   |   4  |   5   |   6    |    8   |   9   |  10
                SKU | Cut | Finish | Alloy | Wall | Width | Height |  Fits  | Price |  Name
            */
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $sku = $data[0];

                //add this heading title to the products array as an index
                if($row < 1){
                    for($i = 0; $i <= count($data); $i++){
                        $heading = isset($data[$i]) ? str_replace(" ", "-",strtolower($data[$i])) : null;
                        $heading = strtr($heading, array("(" => "", ")" => ""));
                        array_push($headings, $heading);
                    }
                    $row++;
                    continue;
                } 
                $i = 0;
                //add the values of this product for each corresponding category
                foreach($headings as $type){
                    if($type == "sku"){continue;}
                    $products[''.$sku.''][''.$type.''] = $data[$i];
                    $i++;
                }
            }

            fclose($handle);
        }
        $panel = '<div class="panel panel-default panel-fluid">
                    <div class="panel-heading">
                        <h3 class="panel-title">'.$name.'</h3>
                    </div>
                    <div class="panel-default container-fluid">
                    <div class="row"><table class="table table-hover" style="width:100%;margin-bottom:0;"><thead><tr>
                    <th>SKU</th>
                    <th>OD (in)</th>
                    <th class="text-center">Price</th>
                    <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
                </tr></thead><tbody>';
        foreach($products as $key => $value){
            $classes = "";
            $i = 0;
            foreach($value as $category){
                if($headings[$i] == "alloy" || $headings[$i] == "name" || $headings[$i] == "price"){
                    //$classes .= $headings[$i]."-".$category." ";
                }
                else if($headings[$i] == "finish"){
                    $classes .= $headings[$i]."-".strtolower(strtok($category," "))." ";
                }
                else if($headings[$i] != "sku" && $headings[$i] != "price"){
                    $classes .= $headings[$i]."-".num2text($category)." ";
                }
                
                if($headings[$i] == "price"){
                    $price = floatval($category);
                }
                else if($headings[$i] == "od-in"){
                    $od = $category;
                }
                else if($headings[$i] == "name"){
                    $product_name = $category;
                }
                
                //add filters
                if(array_key_exists($headings[$i], $filters)){ //check if this is one of the desired filters
                    if(!in_array($category,$filters[$headings[$i]]["options"])){
                        array_push($filters[$headings[$i]]["options"],$category);
                    }
                }
                $i++;
            }
            $panel .= '<tr class="filter-row '.rtrim($classes, " ").'">
                <td class="item-sku" data-name=\''.$product_name.'\'><a href="'.$base_url.'product.php?sku='.$key.'">'.$key.'</a></td>
                <td class="item-dimensions">'.$od.'</td>
                <td class="item-price text-center" data-price="'.$price.'">$'.number_format($price, 2, '.', '').'</td>
                <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
            </tr>';
        }
        $panel .= '</tbody></table></div></div></div>';
        
        return $panel;
    }
    $half_round = newPanel("../docs/half_rounds.csv", "Half Rounds", $group);
        
    //create Filters
    $filter_option = '';
    foreach($filters as $key => $value){
        $filter_option .= '<h4 class="filter-name active">'.$value["title"].'</h4><ul>';
        $options = $value["options"];
        $filter_count = count($options);            
        foreach($options as $filter){
            if($key == "finish"){
                $option = $key."-".strtolower(strtok($filter," "));
            }
            else{
                $option = $key."-".num2text($filter);
            }
            $lonely = $filter_count == 1 ? "checked" : "";
            $fixed = $filter_count == 1 ? "fixed" : $option;
            $filter_option .= '<li class="visible">
                <input id="'.$fixed.'" name="'.$key.'" type="radio" value="'.$fixed.'" '.$lonely.'>
                <label for="'.$fixed.'">'.$filter.'</label>
            </li>';
        }
        $filter_option .= "</ul>";
    }
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">'.ucfirst($group).' Filter</h3><img class="hidden-xs" src="'.$base_url.'img/products/bars/half-round-diagram.png" alt="Diagram"/>'.$filter_option.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Half Rounds</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/half-rounds.jpg" alt="Half Rounds"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Bar Stock</a></li>
              <li>Half Rounds</li>
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
                    <td style="width: 150px;"><img src="<?php echo BASE_URL;?>img/products/bars/half-round-diagram.png" alt="Diagram" style="max-height: 89px; width: auto;float:right;"/></td>
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
                               <div class="col-sm-3 hidden-xs">
                                   <img src="<?php echo BASE_URL;?>img/products/bars/half-round-aside.png" alt="Half Rounds" />
                               </div>
                            </div>
                        </div>
                    </div>
                   <?php echo $half_round; ?>
                </div></div>
        </main>
        <?php include("../php/includes/cart.php"); ?>        
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>