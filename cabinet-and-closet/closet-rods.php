<?php
    $base_url = "http://localhost/Orange-Aluminum/";
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
                                  <th>Finish</th>
                                  <th>Each</th>
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
      $row = '';
      foreach($alteration as $item => $value){
        $row .= '<tr data-toggle="collapse" data-target="#collapse-'.$item.'" class="accordion-toggle '.$value["classes"].'">
                  <th scope="row">'.$item.'</td>
                  <td>'.$value["finish"].'</td>
                  <td>$'.number_format($value["price"], 2, '.', '').'</td>
                </tr>
                <tr>
                    <td colspan="4" class="hiddenRow">
                        <div class="accordion-body collapse" id="collapse-'.$item.'" style="padding:8px 13px;">
                            <h4 class="text-">'.$value["title"].'</h4>
                            <form style="width:100%;margin:0px auto;">
                               <a href="product.php?p_id='.$item.'" class="product-link">
                                   Product View<span class="glyphicon glyphicon-share"></span>
                                </a>
                                <div class="add-cart ">                         
                                  <label class="sr-only">Quantity</label>    
                                  <input type="number" id="'.$item.'-qty" min="0" value="1">
                                  <button type="submit">
                                      <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                                  </button>
                                </div>
                            </form>
                        </div>
                    </td>
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
                "classes" => "gold"
            ),
            "OA7749-OB" => array(
                "title" => "Round Closet Rod: Bronze",
                "finish" => "Oil-Rubbed Bronze",
                "price" => 11.58,
                "classes" => "bronze"
            ),
            "OA7749-CA" => array(
                "title" => "Round Closet Rod: Clear Anodized",
                "finish" => "Clear Anodized",
                "price" => 11.58,
                "classes" => "clear"
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
                "classes" => "gold"
            ),
            "OA8443-OB" => array(
                "title" => "Oval Closet Rod: Bronze",
                "finish" => "Oil-Rubbed Bronze",
                "price" => 15.42,
                "classes" => "bronze"
            ),
            "OA8443-CA" => array(
                "title" => "Oval Closet Rod: Clear Anodized",
                "finish" => "Clear Anodized",
                "price" => 15.42,
                "classes" => "clear"
            )
        ),
        "img" => $base_url."img/products/cabinet/closet-oval-aside.png",
        "img_alt" => "Oval Closet Rod"
    );
    $panels .= newPanel($oval);
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EZ Slatwall System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../-touch-icon.png">
        
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../css/icons.css" rel="stylesheet">
        
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="../js/vendor/respond-.4.2.min.js"></script>
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
                    <div class="filter clearfix" id="filters">
                        <h3>Closet Rods <span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <section class="filter-content">
                            <div class="cut filter-type">
                               <span class="filter-title">Cut Length</span>
                               <form id="clips-cut-form">
                                   <div class="filter-option">
                                       <input type="radio" id="cut-six" name="cut-length" value="fixed" checked/>
                                       <label for="cut-six"><span></span>6'</label>
                                   </div>
                               </form>
                            </div>
                            <div class="finish filter-type">
                               <span class="filter-title">Finish</span>
                               <form id="clips-finish-form">
                                   <div class="filter-option">
                                       <input type="radio" id="clear" name="finish" value="clear"/>
                                       <label for="clear"><span></span>Clear Anodized</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="gold" name="finish" value="gold"/>
                                       <label for="gold"><span></span>Gold Anodized</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="bronze" name="finish" value="bronze"/>
                                       <label for="bronze"><span></span>Oil-Rubbed Bronze</label>
                                   </div>
                               </form>
                            </div>
                            <div class="alloy filter-type">
                               <span class="filter-title">Alloy & Temper</span>
                               <form id="clips-alloy-form">
                                   <div class="filter-option">
                                       <input type="radio" id="alloy" name="alloy" value="fixed" checked/>
                                       <label for="alloy"><span></span>6063-T5</label>
                                   </div>
                               </form>
                            </div>
                            <div class="clearfix"></div>
                            <div id="reset-btn" class="text-center clearfix">Reset Filters</div>
                        </section>
                    </div>
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
        
        <?php include("../php/includes/chat.php"); ?>
        <?php include("../php/includes/footer.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <!-- Include all compiled plugins (below), or  individual files as needed -->
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
