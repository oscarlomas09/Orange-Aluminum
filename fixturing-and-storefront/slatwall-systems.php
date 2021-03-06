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
    $OA5022 = array( 
        "Description" => '',
        "Title" => "Slatwall Insert",
        "Models" => array(
            "OA5022" => array(
                "title" => "Slatwall Insert",
                "cut" => "8'",
                "price" => 11.61,
                "classes" => "cut-eight",
                "alloy" => "6063-T5"
            )
        ),
        "img" => $base_url."img/products/fixturing/slatwall-aside.png",
        "img_alt" => "Slatwall Insert"
    );
    $panels .= newPanel($OA5022);

    $OA8524 = array( 
        "Description" => 'Interlocking Aluminum Slatwall Panel, Stack it as high as you want! These self mating aluminum slatwall strips are perfect for your cubicle millwork projects or retail spaces alike... The material comes mill finish... ready for you to paint or keep mill. Section allows your functional slatwall spacing to be fixed at exactly 1.610” (1-5/8”.) <br>
• Available in 5 and 10 foot Lengths <br>
• 1-5/8” (1.610”) On Center Slats <br>
• Mill Finish, Ready for Paint <br>
• 6063-T5 Aluminum',
        "Title" => "Interlocking Slatwall Panel",
        "Models" => array(
            "OA8524" => array(
                "title" => "Interlocking Slatwall Panel: 5 Feet",
                "cut" => "5'",
                "price" => 32.24,
                "classes" => "cut-five",
                "alloy" => "6063-T5"
            ),
            "OA8524-10" => array(
                "title" => "Interlocking Slatwall Panel: 10 Feet",
                "cut" => "10'",
                "price" => 64.48,
                "classes" => "cut-ten",
                "alloy" => "6063-T5"
            )
        ),
        "img" => $base_url."img/products/fixturing/slatwall-panel-aside.png",
        "img_alt" => "Interlocking Slatwall Panel"
    );
    $panels .= newPanel($OA8524);

    //filters
    $cuts = array( 
        "title" => "Cut Length",
        "options" => array(      
            "five" => array(
                "name" => "cut-five",
                "title" => "5'",
                "group" => "cut"
            ),
            "eight" => array(
                "name" => "cut-eight",
                "title" => "8'",
                "group" => "cut"
            ),
            "ten" => array(
                "name" => "cut-ten",
                "title" => "10'",
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
        <title>Slatwall Systems</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/slatwall.jpg" alt="Slatwall Systems"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Fixturing and Storefront</a></li>
              <li>Slatwall Systems</li>
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
                                    <p>Aluminum Slatwall Insert for use of slatwall panels to add support, style and protection from blow out. Insert is a standard for most slatwall, but please check the drawing to confirm fit with your panels before ordering. Also available: Orange Aluminum bits for use in routing your panels out for the slots for slatwall panels. These bits were specially designed for our extrusions, and meet all the industry standards for height and depth for use with retail slatwall hanging hardware.</p>
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
                                                <a data-toggle="tooltip" title="The natural/raw appearance of the aluminum as it is extruded. No secondary process, may show heavy production lines.">Mill Finish</a></td>
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
                    <h3>Slatwall Accessories</h3><hr>
                    <!-- BASE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Router Bit</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="row">
                                <table class="table table-hover" style="width:100%;">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>SKU</th>
                                      <th>Each</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-toggle="collapse" data-target="#collapse-OA5022-USA" class="accordion-toggle cut-five cut-eight cut-ten">
                                      <th scope="row">Router Bit: American Made</td>
                                      <td>OA5022-USA</td>
                                      <td>$85.80</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5022-USA" style="padding:8px 13px;">
                                                <h4 class="text-center">Router Bit: American Made</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5022-USA-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                     </tr> 
                                     <tr data-toggle="collapse" data-target="#collapse-OA5022-RTRBIT" class="accordion-toggle cut-five cut-eight cut-ten">
                                      <th scope="row">Router Bit: Made in China</td>
                                      <td>OA5022-RTRBIT</td>
                                      <td>$32.99</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="hiddenRow">
                                            <div class="accordion-body collapse" id="collapse-OA5022-RTRBIT" style="padding:8px 13px;">
                                                <h4 class="text-center">Router Bit: Made in China</h4>
                                                <form style="width:100%;margin:0px auto;">
                                                   <a href="#" class="product-link">
                                                       Product View<span class="glyphicon glyphicon-share"></span>
                                                    </a>
                                                    <div class="add-cart clearfix">                         
                                                      <label class="sr-only">Quantity</label>    
                                                      <input type="number" id="OA5022-RTRBIT-qty" min="0" value="1">
                                                      <button type="submit">
                                                          <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                                      </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>                   
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div></div>
        </main>
        <?php include("../php/includes/cart.php"); ?>
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
