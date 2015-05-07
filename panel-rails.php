<?php
    $base_url = "http://localhost/Orange-Aluminum/";
    global $base_url;
    function newPanel($product){
        $models = $product["Models"];
        $alterations = newModel($models, $product["offset"], $product["drop"]);
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
                              <thead><tr>
                                    <th>SKU</th>
                                    <th>Offset (A) x Drop (B)</th>
                                    <th class="text-center">Cut</th>
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
  function newModel($alteration, $offset, $drop){
        global $base_url;
        $row = '';
        foreach($alteration as $item => $value){
        $row .= '<tr class="filter-row '.$value["classes"].'">
                    <td class="item-sku" data-name="'.$item.'"><a href="'.$base_url.'product.php">'.$item.'</a></td>
                    <td class="item-dimensions">'.$offset.'" x '.$drop.'"</td>
                    <td class="item-cut text-center">'.$value["cut"].'</td>
                    <td class="item-price hidden-xs text-center" data-price="'.$value["price"].'">$'.number_format($value["price"], 2, '.', '').'</td>
                    <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
                </tr>';
        }
        return $row;
    }

    $panels = '';
    $OA5337 = array( 
        "Description" => 'Mill Finish Aluminum Panel Rails and Clips, Style 1, Panel Rails and Clips are Designed for Two of the Sections to Wedge Together, Securely Locking Panels in Place. Ideal for  Wall Panels, Partitions, and Signs. Lift-off Clearance of 5/8" Required for Installation and Removal. Overall Height when Mounted is 3-1/8" (Style 1 Has Less Offset and Larger Lift-Off Than Style 2 with Larger Offset and Smaller Lift-Off.) ',
        "Title" => "Panel Rail and Clip Style 1",
        "Models" => array(
            "OA5337-CB" => array(
                "title" => "Panel Rail and Clip, Style 1: Bag of 20",
                "cut" => "Clips (20)",
                "price" => 9.06,
                "classes" => "offset-three-sixteen drop-five-eight cut-twenty"
            ),
            "OA5337-6" => array(
                "title" => "Panel Rail and Clip, Style 1: 6 Feet",
                "cut" => "6'",
                "price" => 9.36,
                "classes" => "offset-three-sixteen drop-five-eight cut-six"
            ),
            "OA5337-12" => array(
                "title" => "Panel Rail and Clip, Style 1: 12 Feet",
                "cut" => "12'",
                "price" => 18.72,
                "classes" => "offset-three-sixteen drop-five-eight cut-twelve"
            )
        ),
        "img" => $base_url."img/products/clips/style-1-aside.png",
        "img_alt" => "Panel Rails and Clips: Style 1",
        "offset" => "3/16",	    
        "drop" => "5/8");
    $panels .= newPanel($OA5337);
    
    $OA5403 = array( 
        "Description" => 'Mill Finish Aluminum Panel Rails and Clips, Style 2, Panel Rails and Clips are Designed for Two of the Sections to Wedge Together, Securely Locking Panels in place. Ideal for Hanging Wall Panels, Partitions, and Signs. Lift-off clearance of 3/8" Required for Installation and Removal. Overall Height when Mounted is 2-3/8" (Style 1 Has Less Offset and Larger Lift-Off Than Style 2 with Larger Offset and Smaller Lift-Off.)',
        "Title" => "Panel Rail and Clip Style 2",
        "Models" => array(
            "OA5403-CB" => array(
                "title" => "Panel Rail and Clip, Style 2: Bag of 20",
                "cut" => "Clips (20)",
                "price" => 9.68,
                "classes" => "offset-quarter drop-three-eight cut-twenty"
            ),
            "OA5403-6" => array(
                "title" => "Panel Rail and Clip, Style 2: 6 Feet",
                "cut" => "6'",
                "price" => 9.98,
                "classes" => "offset-quarter drop-three-eight cut-six"
            ),
            "OA5403-12" => array(
                "title" => "Panel Rail and Clip, Style 2: 12 Feet",
                "cut" => "12'",
                "price" => 19.96,
                "classes" => "offset-quarter drop-three-eight cut-twelve"
            )
        ),
        "img" => $base_url."img/products/clips/style-2-aside.png",
        "img_alt" => "Panel Rails and Clips: Style 2",
        "offset" => "1/4",	    
        "drop" => "3/8"	    );
    $panels .= newPanel($OA5403);

    $OA9548 = array( 
        "Description" => 'Infamous Z Hanger for Mirrors and Picture Frames, this Z hanger style is lighter then our other Panel Rails and Clips providing less in strength but more in savings. Designed for Two of the Sections to Wedge Together, Securely Locking Panels in Place. Ideal for Hanging Wall Panels, Partitions, and Signs. Lift-off Clearance of 45/64" (.704") is Required for Installation and Removal. Overall Height when Mounted is 1-3/4".',
        "Title" => "Z Hanger",
        "Models" => array(
            "OA9548-6" => array(
                "title" => "Z Hanger: Light Duty",    
                "cut" => "6'",
                "price" => 7.99,
                "classes" => "offset-seven-thirtytwo drop-fortyfive-sixtyfour cut-six"
            ),
            "OA9548-12" => array(
                "title" => "Z Hanger: Light Duty",
                "cut" => "12'",
                "price" => 15.98,
                "classes" => "offset-seven-thirtytwo-thirtytwo drop-fortyfive-sixtyfour cut-twelve"
            )
        ),
        "img" => $base_url."img/products/clips/z-hanger-aside.png",
        "img_alt" => "Panel Rails and Clips: Style 2",
        "offset" => "7/32",	    
        "drop" => "45/64");
    $panels .= newPanel($OA9548);

    $OA8142 = array( 
        "Description" => 'Mill Finish Aluminum Panel Rails and Clips, MEDIUM to HEAVY DUTY Z CLIP APPLICATION, Panel Rails and Clips are Designed for Two of the Sections to Wedge Together, Securely Locking Panels in place. Ideal for Hanging Wall Panels, Partitions, and Signs. Lift-off clearance of 7/16" Required for Installation and Removal. Overall Height when Mounted is 3-1/16" and offset from wall is 1/4"',
        "Title" => "HD Panel Rail and Clip",
        "Models" => array(
            "OA8142-CB" => array(
                "title" => "HD Panel Rail and Clips: Bag of 10",    
                "cut" => "Clips (10)",
                "price" => 26.50,
                "classes" => "offset-quarter drop-seven-sixteen cut-ten"
            ),
            "OA8142-6" => array(
                "title" => "HD Panel Rail and Clip: 6 Feet",    
                "cut" => "6'",
                "price" => 15.92,
                "classes" => "offset-quarter drop-seven-sixteen cut-six"
            ),
            "OA8142-12" => array(
                "title" => "HD Panel Rail and Clip: 12 Feet",
                "cut" => "12'",
                "price" => 31.84,
                "classes" => "offset-quarter drop-seven-sixteen cut-twelve"
            )
        ),
        "img" => $base_url."img/products/clips/hd-aside.png",
        "img_alt" => "HD Panel Rail and Clip",
        "offset" => "1/4",	    
        "drop" => "7/16");
    $panels .= newPanel($OA8142);

    $OA7919 = array( 
        "Description" => 'Overkill? Perhaps, but what project doesn’t need a little overkill?The biggest, baddest clip to ever leave our R&D Department, the XL Style 4 Clip was designed to wedge two buildings together in order to create the most secure lock imaginable. Comes unpunched. Lift-off clearance of 3/4” required for installation and removal.Overall height when mounted is 4.00” And offset from wall is 3/8”.Remember, though, with great power comes great responsibility."',
        "Title" => "XL Panel Rail and Clip",
        "Models" => array(
            "OA7919-CB" => array(
                "title" => "XL Panel Rail and Clips: Bag of 10",    
                "cut" => "Clips (10)",
                "price" => 29.20,
                "classes" => "offset-three-eight drop-seven-sixteen cut-ten"
            ),
            "OA7919-6" => array(
                "title" => "XL Panel Rail and Clip: 6 Feet",    
                "cut" => "6'",
                "price" => 28.27,
                "classes" => "offset-three-eight drop-seven-sixteen cut-six"
            ),
            "OA7919-12" => array(
                "title" => "XL Panel Rail and Clip: 12 Feet",
                "cut" => "12'",
                "price" => 56.54,
                "classes" => "offset-three-eight drop-seven-sixteen cut-twelve"
            )
        ),
        "img" => $base_url."img/products/clips/xl-aside.png",
        "img_alt" => "XL Panel Rail and Clip",
        "offset" => "3/8",	    
        "drop" => "7/16");
    $panels .= newPanel($OA7919);

    //filter
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(
            "clips-ten" => array(
                "name" => "cut-ten",
                "title" => "Clips (10pcs)",
                "group" => "cut"
            ), 
            "clips-twenty" => array(
                "name" => "cut-twenty",
                "title" => "Clips (20pcs)",
                "group" => "cut"
            ),   
            "six" => array(
                "name" => "cut-six",
                "title" => "6'",
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
            "alloy" => array(
                "name" => "fixed",
                "title" => "6063-T5",
                "group" => "alloy"
            ),
        )
    );
    $offset = array( 
        "title" => "Offset (A)",
        "options" => array(
            "three-sixteen" => array(
                "name" => "offset-three-sixteen",
                "title" => '3/16"',
                "group" => "offset"
            ),
            "three-eight" => array(
                "name" => "offset-three-eight",
                "title" => '3/8"',
                "group" => "offset"
            ),
            "seven-thirtytwo" => array(
                "name" => "offset-seven-thirtytwo",
                "title" => '7/32"',
                "group" => "offset"
            ),
            "three-quarter" => array(
                "name" => "offset-quarter",
                "title" => '1/4"',
                "group" => "offset"
            )
        )
    );
    $drop = array( 
        "title" => "Drop (A)",
        "options" => array(
            "three-eight" => array(
                "name" => "drop-three-eight",
                "title" => '3/8"',
                "group" => "drop"
            ),
            "seven-sixteen" => array(
                "name" => "drop-seven-sixteen",
                "title" => '7/16"',
                "group" => "drop"
            ),
            "five-eight" => array(
                "name" => "drop-five-eight",
                "title" => '5/8"',
                "group" => "drop"
            ),
            "three-fortyfive-sixtyfour" => array(
                "name" => "drop-fortyfive-sixtyfour",
                "title" => '45/64"',
                "group" => "drop"
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
    $options .= newFilter($offset);
    $options .= newFilter($drop);
    $filter = '<div class="filter collapse" id="filters"><h3 class="title">Angles Filter</h3><img class="hidden-xs" src="'.$base_url.'img/products/clips/diagram.png" alt="Diagram"/>'.$options.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Panel Rails and Clips</title>
        <meta name="description" content="">
        <?php include("php/includes/header-files.php"); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("php/includes/header.php"); ?>
        <?php include("php/includes/navbar.php"); ?>
        <?php include("php/includes/mobile-navigation.php"); ?>
        
        <!-- Content Just for this Page -->
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/panel-rails.jpg" alt=""></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li>Panel Rails & Clips</li>
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
                            <img src="img/tolerance.jpg" alt="Tolerance Table" style="max-width:100%;"/>
                        </div>
                    </div>
                </div>
            </div>
            <table class="filter-table">
                <tr>
                    <td><div id="filter-btn" data-toggle="collapse" data-target="#filters" aria-expanded="false" aria-controls="filters"><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;Filter</div></td>
                    <td style="width: 150px;"><img src="<?php echo BASE_URL;?>img/products/clips/diagram.png" alt="Diagram" style="max-height: 89px; width: auto;float:right;"/></td>
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
                               <div class="col-xs-12 col-md-8">
                                    <p>Panel Rails and Clips are a fast, easy and cost effective method to lock in place any kind of wall panel, acoustic panel, partition,cabinet, signage, artwork, etc. The “Z” shaped clips wedge together locking panels in place. It provides for easy and fast future removal or dismounting for change or replacement. Since Panel Rails and Clips remain concealed, it also allows for prefinishing,without time consuming face nailing or costly on-the-job finishing.Installation time and costs can be cut by 50% when using Panel Rails and Clips.</p>
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
                                            <td style="width:75%;">Available in Clips, 6' and 12' Lengths</td>
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
                                        </tr><tr>
                                            <td><b>Fabrication</b></td>
                                            <td style="width:75%;">Punched 8” on center to accommodate #8 screws</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-4 visible-md visible-lg"><img class="img-tall" alt="" src="<?php echo BASE_URL;?>img/products/clips/panel-rails-content.jpg"/></div>
                            </div>
                        </div>
                    </div>
                    <?php echo $panels; ?>
                </div>
        </main>
        <?php include("php/includes/cart.php"); ?>           
        <?php include("php/includes/chat.php"); ?>
        <?php include("php/includes/footer.php"); ?>
        <?php include("php/includes/script-js.php"); ?>
    </body>
</html>
