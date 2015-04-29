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
                                  <th>Cut</th>
                                  <th>SKU</th>
                                  <th>Fits</th>
                                  <th>Finish</th>
                                  <th>Alloy</th>
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
                  <th scope="row">'.$value["cut"].'</td>
                  <td>'.$item.'</td>
                  <td>'.$value["fits"].'"</td>
                  <td>'.$value["finish"].'</>
                  <td>'.$value["alloy"].'</td>
                  <td>$'.number_format($value["price"], 2, '.', '').'</td>
                </tr>
                <tr>
                    <td colspan="5" class="hiddenRow">
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

    $divider = array( 
        "Description" => "Use our Divider Bars to assist in transitioning and joining panels along walls or floors. Orange Aluminum's Divider Bars will add style to your next panel project",
        "Title" => "Divider Bar",
        "Models" => array(
            "OA7420-3" => array(
                "title" => "Divider Bar",
                "fits" => "1/4",
                "price" => 7.41,
                "alloy" => "6463-T5",
                "cut" => "3'",
                "finish" => "Brite-Dip Anodized",
                "classes" => "fits-quarter brite alloy-6463 cut-three"
            ),
            "OA7418-3" => array(
                "title" => "Divider Bar",
                "fits" => "1/2",
                "price" => 9.16,
                "alloy" => "6063-T5",
                "cut" => "3'",
                "finish" => "Clear Anodized",
                "classes" => "fits-half clear alloy-6063 cut-three"
            ),
            "OA7418-3" => array(
                "title" => "Divider Bar",
                "fits" => "1/2",
                "price" => 9.16,
                "alloy" => "6063-T5",
                "cut" => "3'",
                "finish" => "Clear Anodized",
                "classes" => "fits-half clear alloy-6063 cut-three"
            ),
            "OA7979-6" => array(
                "title" => "Divider Bar",
                "fits" => "1/16",
                "price" => 4.84,
                "alloy" => "6063-T5",
                "cut" => "6'",
                "finish" => "Clear Anodized",
                "classes" => "fits-one-sixteen clear alloy-6063 cut-six"
            ),
            "OA3355-6" => array(
                "title" => "Divider Bar",
                "fits" => "1/8",
                "price" => 6.18,
                "alloy" => "6063-T5",
                "cut" => "6'",
                "finish" => "Clear Anodized",
                "classes" => "fits-one-eight clear alloy-6063 cut-six"
            ),
            "OA7420-6" => array(
                "title" => "Divider Bar",
                "fits" => "1/4",
                "price" => 12.97,
                "alloy" => "6463-T5",
                "cut" => "6'",
                "finish" => "Brite-Dip Anodized",
                "classes" => "fits-quarter brite alloy-6463 cut-six"
            ),
            "OA7418-6" => array(
                "title" => "Divider Bar",
                "fits" => "1/2",
                "price" => 16.03,
                "alloy" => "6063-T5",
                "cut" => "6'",
                "finish" => "Clear Anodized",
                "classes" => "fits-half clear alloy-6063 cut-six"
            ),
            "OA3355-12" => array(
                "title" => "Divider Bar",
                "fits" => "1/8",
                "price" => 12.26,
                "alloy" => "6063-T5",
                "cut" => "12'",
                "finish" => "Clear Anodized",
                "classes" => "fits-one-eight clear alloy-6063 cut-twelve"
            )
        ),
        "img" => $base_url."img/products/dividers/divider-aside.png",
        "img_alt" => " Corner"
    );
    $panels .= newPanel($divider);
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Divider Bars</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/divider.jpg" alt="Corners"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Caps, Corners, Coves, and Dividers</a></li>
              <li>Divider Bars</li>
            </ol>
            <!-- Modal Window for Tolerance Table-->
            <div class="modal fade" id="toleranceModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           s <h4 class="modal-../title" id="myMod../alLabel">Standard System of Measurement Inch Material</h4>
                        </div>
                        <div class="modal-body">
                            <img src="../img/tolerance.jpg" alt="Tolerance Table" style="max-width:100%;"/>
                        </div>
                    </div>
                </div>
            </div>
            <div id="filter-btn" class="visible-xs" data-toggle="collapse" data-target="#filters" aria-expanded="false" aria-controls="filters"><span class="glyphicon glyphicon-tasks"></span> Filter</div>
            <div class="row">
                <aside class="col-xs-12 col-sm-3">
                    <div class="filter clearfix" id="filters">
                        <h3>Divider Bars <span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <div class="pic"><img src="<?php echo BASE_URL;?>img/products/dividers/divider-diagram.png" /></div>
                        <section class="filter-content">
                            <div class="cut filter-type">
                               <span class="filter-title">Cut Length</span>
                               <form id="clips-cut-form">
                                   <div class="filter-option">
                                       <input type="radio" id="cut-three" name="cut-length" value="cut-three"/>
                                       <label for="cut-three"><span></span>3'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-six" name="cut-length" value="cut-six"/>
                                       <label for="cut-six"><span></span>6'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-twelve" name="cut-length" value="cut-twelve"/>
                                       <label for="cut-twelve"><span></span>12'</label>
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
                                       <input type="radio" id="brite" name="finish" value="brite"/>
                                       <label for="brite"><span></span>Brite-Dip Anodized</label>
                                   </div>
                               </form>
                            </div>
                            <div class="alloy filter-type">
                               <span class="filter-title">Alloy & Temper</span>
                               <form id="clips-alloy-form">
                                   <div class="filter-option">
                                       <input type="radio" id="alloy-6063" name="alloy" value="alloy-6063"/>
                                       <label for="alloy-6063"><span></span>6063-T5</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="alloy-6463" name="alloy" value="alloy-6463"/>
                                       <label for="alloy-6463"><span></span>6463-T5</label>
                                   </div>
                               </form>
                            </div>
                            <div class="alloy filter-type">
                               <span class="filter-title">Fits</span>
                               <form id="clips-alloy-form">
                                   <div class="filter-option">
                                       <input type="radio" id="fits-one-sixteen" name="fits" value="fits-one-sixteen"/>
                                       <label for="fits-one-sixteen"><span></span>1/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-one-eight" name="fits" value="fits-one-eight"/>
                                       <label for="fits-one-eight"><span></span>1/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-quarter" name="fits" value="fits-quarter"/>
                                       <label for="fits-quarter"><span></span>1/4"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-half" name="fits" value="fits-half"/>
                                       <label for="fits-half"><span></span>1/2"</label>
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
                                    <p>Use our Divider Bars to assist in transitioning and joining panels along walls or floors. Orange Aluminum's Divider Bars will add style to your next panel project. </p>
                                    <table style="width:100%;">
                                        <tr>
                                            <td><b>Alloy</b></td>
                                            <td style="width:75%;">
                                                (CA) <a data-toggle="tooltip" title="Ultra-Corrosive Resistant Architectural Grade Alloy">6063-T5</a><br>
                                                (BD) <a data-toggle="tooltip" title="Considered a Brite-Dip alloy, specially engineered for brite anodize finishes.">6463-T5</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Finish</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="A shiny finish that is corrosion resistant and protects the material from oxidizing.">Brite-Dip Anodized</a><br>
                                                <a data-toggle="tooltip" title="Clear Anodized Finish, Per MIL-A-8625F. Electrochemical process that is corrosion resistant and protects the material from oxidizing.">Clear Anodized</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Cut Length</b></td>
                                            <td style="width:75%;">3 and 6 Foot Cut Lengths. Inquire about 12’ lengths</td>
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
