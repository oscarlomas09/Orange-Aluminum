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
                                    <th class="text-center">Fits</th>
                                    <th class="text-center hidden-xs">Cut</th>
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
                    <td class="item-dimensions text-center">'.$value["fits"].'"</td>
                    <td class="item-cut text-center hidden-xs">'.$value["cut"].'</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
      }
      return $row;
    }

    $panels = '';

    $apart = array( 
        "Description" => 'This Break Apart Valance - Tongue and Groove Extrusion, Fits your 1/4", 3/8", and 1/2" Material, is Perfect for Lid Enclosures for all your Road or Flight Cases. The design allows material to be Extruded as one Piece, then Breaks Apart into Two Separate Aluminum Extrusions, Male and Female. The pieces are designed for each piece to have an exposed 1" Leg, while the 9/16" (.550") Channel is more then enough room to accommodate your 1/4" Plywood or ABS Laminate. ',
        "Title" => "Break Apart Valances",
        "Models" => array(
            "OA3316" => array(
                "title" => "Break Apart Valances",
                "cut" => "6'",
                "fits" => "1/4",
                "price" => 12.48,
                "classes" => "fits-quarter"
            ),
            "OA2374" => array(
                "title" => "Break Apart Valances",
                "cut" => "6'",
                "fits" => "3/8",
                "price" => 12.76,
                "classes" => "fits-three-eight"
            ),
            "OA4429" => array(
                "title" => "Break Apart Valancesd",
                "cut" => "6'",
                "fits" => "1/2",
                "price" => 17.45,
                "classes" => "fits-half"
            )
        ),
        "img" => $base_url."img/products/cabinet/break-apart.png",
        "img_alt" => "Break Apart Valances"
    );
    $panels .= newPanel($apart);

    $single = array( 
        "Description" => 'The Single Angle Profile is commonly used to finish off the 90 Degree Edge of Cases. Legs are Punched 3” OC with 3/16” holes',
        "Title" => "Single Angle Edge",
        "Models" => array(
            "OA3316" => array(
                "title" => "Single Angle Edge",
                "cut" => "6'",
                "fits" => "Variable ",
                "price" => 9.06,
                "classes" => ""
            )
        ),
        "img" => $base_url."img/products/cabinet/single-angle-edge.jpg",
        "img_alt" => "Single Angle Edge"
    );
    $panels .= newPanel($single);

    $double = array( 
        "Description" => 'The Double Angle Enclosure Extrusion is the easiest way to join your 90 degree corners for all your Road or Flight Cases. The design allows you to easily join all your material at those 90 degree corners, while also providing easier assembly and protecting your cases… adding longer product life in addition to higher quality.',
        "Title" => "Double Angle Edge",
        "Models" => array(
            "OA3860" => array(
                "title" => "Double Angle Edge",
                "cut" => "6'",
                "fits" => "1/4",
                "price" => 8.45,
                "classes" => "fits-quarter"
            ),
            "OA3980" => array(
                "title" => "Double Angle Edge",
                "cut" => "6'",
                "fits" => "3/8",
                "price" => 9.95,
                "classes" => "fits-three-eight"
            ),
            "OA3931" => array(
                "title" => "Double Angle Edge",
                "cut" => "6'",
                "fits" => "1/2",
                "price" => 10.97,
                "classes" => "fits-half"
            )
        ),
        "img" => $base_url."img/products/cabinet/double-angle-edge.png",
        "img_alt" => "Double Angle Edge"
    );
    $panels .= newPanel($double);

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
    $fits = array( 
        "title" => "Fits",
        "options" => array(
            "fits-quarter" => array(
                "name" => "fits-quarter",
                "title" => '1/4"',
                "group" => "fits"
            ),
            "fits-three-eight" => array(
                "name" => "fits-three-eight",
                "title" => '3/8"',
                "group" => "fits"
            ),
            "fits-half" => array(
                "name" => "fits-half",
                "title" => '1/2"',
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
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Road Cases</h3>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Road Case Sections</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/road-case.jpg" alt="Road Case Sections"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Cabinet, Case and Closet</a></li>
              <li>Road Case Sections</li>
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
                                    <p>Our aluminum case extrusions are used to fasten the panels together in 90 Degree corners, in addition to providing that perfect tongue and groove enclosure. These sections will not only add to the quality of your case, but also reduce the manufacturing time and increase your product life These sections come mill finish, and as the rest of our products... are manufactured in the USA! </p>
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
                                            <td style="width:75%;">6 Foot Cut Length; Longer Stocked Lengths Available</td>
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
