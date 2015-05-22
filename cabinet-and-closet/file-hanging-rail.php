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
                                    <th>Width x Thickness</th>
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
                    <td class="item-dimensions">'.$value["width"].'" x '.$value["thickness"].'"</td>
                    <td class="item-finish hidden-xs text-center">'.$value["finish"].'</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
      }
      return $row;
    }

    $panels = '';

    $rails = array( 
        "Description" => 'Aluminum File Hanging Rail 3/4" Tall x 1/8" Thick, Pendaflex Rails are Used as Cross-Section in which the Files Rest Atop within a Drawers Structure. Available in Black Anodize Finish ',
        "Title" => "Pendaflex File Hanging Rails",
        "Models" => array(
            "OA1058-8B" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Black Anodized",
                "cut" => "8'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 6.86,
                "classes" => "finish-black width-half cut-eight"
            ),
            "OA2126-8B" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Black Anodized",
                "cut" => "8'",
                "width" => "3/4",
                "thickness" => "1/8",
                "price" => 9.46,
                "classes" => "finish-black width-three-quarter cut-eight"
            ),
            "OA1058-8" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Mill Finish",
                "cut" => "8'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 4.80,
                "classes" => "finish-mill width-half cut-eight"
            ),
            "OA2126-8" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Mill Finish",
                "cut" => "8'",
                "width" => "3/4",
                "thickness" => "1/8",
                "price" => 7.46,
                "classes" => "finish-mill width-three-quarter cut-eight"
            ),
            "OA1058-8" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Mill Finish",
                "cut" => "8'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 4.80,
                "classes" => "finish-mill width-half cut-eight"
            ),
            "OA1058-12A" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Clear Anodized",
                "cut" => "12'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 13.72,
                "classes" => "finish-clear width-thalf cut-twelve"
            ),
            "OA2126-12A" => array(
                "title" => "Pendaflex File Hanging Rails",
                "finish" => "Clear Anodized",
                "cut" => "12'",
                "width" => "3/4",
                "thickness" => "1/8",
                "price" => 18.92,
                "classes" => "finish-clear width-three-quarter cut-twelve"
            )
        ),
        "img" => $base_url."img/products/cabinet/hanging-rail-aside.png",
        "img_alt" => "Pendaflex Hanging Rail"
    );
    $panels .= newPanel($rails);

    $press = array( 
        "Description" => '• Press Fit File Hanging Rail sits atop ½” material, leaving a generous 5/16” (.325”) lip for the files to slide along<br>
• 7/8” Total Height x ½” Wide x 3/64” Wall (.875” x .550” x .040”)',
        "Title" => "Press Fit File Rail",
        "Models" => array(
            "OAO5593" => array(
                "title" => "Press Fit File Rail",
                "finish" => "Black Anodized",
                "cut" => "8'",
                "width" => "1/2",
                "thickness" => "1/8",
                "price" => 6.86,
                "classes" => "finish-mill width-half cut-eight"
            )
        ),
        "img" => $base_url."img/products/cabinet/press-rail-aside.png",
        "img_alt" => "Press Fit File Rail"
    );
    $panels .= newPanel($press);

    //filters
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(      
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
                "name" => "finish-mill",
                "title" => "Mill Finish",
                "group" => "finish"
            ) ,
            "clear" => array(
                "name" => "finish-clear",
                "title" => "Clear Anodized",
                "group" => "finish"
            ),
            "gold" => array(
                "name" => "finish-black",
                "title" => "Black Anodized",
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
    $width = array( 
        "title" => "Width",
        "options" => array(
            "width-half" => array(
                "name" => "width-half",
                "title" => '1/2"',
                "group" => "width"
            ),
            "width-three-quarter" => array(
                "name" => "width-three-quarter",
                "title" => '3/4"',
                "group" => "width"
            ),
        )
    );
    $height = array( 
        "title" => "Height",
        "options" => array(
            "height-one-eight" => array(
                "name" => "fixed",
                "title" => '1/8"',
                "group" => "height"
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
    $options .= newFilter($width);
    $options .= newFilter($height);
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Rails Filter</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>File Hanging Rails</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/rails.jpg" alt="File Hanging Rails"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Cabinet, Case and Closet</a></li>
              <li>File Hanging Rails</li>
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
                                    <p>Files need filing, and Orange Aluminum has the hanging file folder molding that you have been looking for. American Made and well priced makes Orange Aluminum Desk File Rails the best value in the market.</p>
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
                                                <a data-toggle="tooltip" title="Black Anodized">Black Anodized</a>, and
                                                <a data-toggle="tooltip" title="he natural/raw appearance of the aluminum as it is extruded. No secondary process, may show heavy production lines">Mill Finish</a>
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
