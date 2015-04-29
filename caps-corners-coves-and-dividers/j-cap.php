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
                                  <th>Cut</th>
                                  <th>Fits x Reveal</th>
                                  <th>SKU</th>
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
                  <td>'.$value["fits"].'" x '.$value["reveal"].'"</td>
                  <td>'.$item.'</td>
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

    $trim = array( 
        "Description" => "",
        "Title" => "J Cap Edge Trim",
        "Models" => array(
            "OA7408-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/16",
                "reveal" => "3/16",
                "price" => 5.02,
                "cut" => "3'",
                "classes" => "fits-one-sixteen reveal-three-sixteen clear alloy-6063 cut-three"
            ),
            "OA7423-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "3/16",
                "reveal" => "5/16",
                "price" => 6.98,
                "cut" => "3'",
                "classes" => "fits-three-sixteen reveal-five-sixteen brite alloy-6063 cut-three"
            ),
            "OA7424-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/4",
                "reveal" => "5/16",
                "price" => 6.98,
                "cut" => "3'",
                "classes" => "fits-quarter reveal-five-sixteen brite alloy-6063 cut-three"
            ),
            "OA7419-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/16",
                "reveal" => "3/32",
                "price" => 9.33,
                "cut" => "3'",
                "classes" => "fits-five-sixteen reveal-three-thirtytwo brite alloy-6063 cut-three"
            ),
            "OA7425-3" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/16",
                "reveal" => "21/32",
                "price" => 8.93,
                "cut" => "3'",
                "classes" => "fits-five-sixteen reveal-twentyone-thirtytwo brite alloy-6463 cut-three"
            ),
            "OA7408-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/16",
                "reveal" => "3/16",
                "price" => 8.79,
                "cut" => "6'",
                "classes" => "fits-one-sixteen reveal-three-sixteen clear alloy-6063 cut-six"
            ),
            "OA7983-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "3/32",
                "reveal" => "1/4",
                "price" => 4.98,
                "cut" => "6'",
                "classes" => "fits-three-thirtytwo reveal-quarter clear alloy-6063 cut-six"
            ),
            "OA7984-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "7/64",
                "reveal" => "13/67",
                "price" => 4.96,
                "cut" => "6'",
                "classes" => "fits-seven-sixtyfour reveal-thirteen-sixtyseven clear alloy-6063 cut-six"
            ),
            "OA7985-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/8",
                "reveal" => "1/4",
                "price" => 3.06,
                "cut" => "6'",
                "classes" => "fits-one-eight reveal-quarter clear alloy-6063 cut-six"
            ),
            "OA7422-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/32",
                "reveal" => "9/32",
                "price" => 10.09,
                "cut" => "6'",
                "classes" => "fits-five-thirtytwo reveal-nine-thirtytwo brite alloy-6063 cut-six"
            ),
            "OA7423-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "3/16",
                "reveal" => "5/16",
                "price" => 12.21,
                "cut" => "6'",
                "classes" => "fits-three-sixteen reveal-five-sixteen brite alloy-6063 cut-six"
            ),
            "OA7424-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/4",
                "reveal" => "5/16",
                "price" => 12.21,
                "cut" => "6'",
                "classes" => "fits-quarter reveal-five-sixteen brite alloy-6063 cut-six"
            ),
            "OA7986-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/4",
                "reveal" => "3/8",
                "price" => 7.83,
                "cut" => "6'",
                "classes" => "fits-quarter reveal-three-eight clear alloy-6063 cut-six"
            ),
            "OA7419-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/16",
                "reveal" => "3/32",
                "price" => 16.33,
                "cut" => "6'",
                "classes" => "fits-five-sixteen reveal-three-thirtytwo brite alloy-6063 cut-six"
            ),
            "OA7425-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "5/16",
                "reveal" => "21/32",
                "price" => 16.31,
                "cut" => "6'",
                "classes" => "fits-five-sixteen reveal-twentyone-thirtytwo brite alloy-6063 cut-six"
            ),
            "OA7409-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "3/8",
                "reveal" => "3/8",
                "price" => 15.63,
                "cut" => "6'",
                "classes" => "fits-three-eight reveal-three-eight brite alloy-6063 cut-six"
            ),
            "OA7410-6" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/2",
                "reveal" => "9/16",
                "price" => 11.69,
                "cut" => "6'",
                "classes" => "fits-half reveal-nine-sixteen clear alloy-6063 cut-six"
            ),
            "OA7985-12" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/8",
                "reveal" => "1/4",
                "price" => 6.12,
                "cut" => "12'",
                "classes" => "fits-one-eight reveal-quarter clear alloy-6063 cut-twelve"
            ),
            "OA7424-12" => array(
                "title" => "J Cap Edge Trim",
                "fits" => "1/4",
                "reveal" => "5/16",
                "price" => 24.42,
                "cut" => "12'",
                "classes" => "fits-quarter reveal-five-sixteen clear alloy-6063 cut-twelve"
            )
        ),
        "img" => $base_url."img/products/dividers/j-cap-trim.png",
        "img_alt" => "J Cap Edge Trim"
    );
    $panels .= newPanel($trim);

    $pinch = array( 
        "Description" => "",
        "Title" => "J Cap Edge Trim: Pinch Fit",
        "Models" => array(
            "OA7416-6" => array(
                "title" => "J Cap Edge Trim: Pinch Fit",
                "fits" => "19/64",
                "reveal" => "3/8",
                "price" => 13.01,
                "cut" => "6'",
                "classes" => "fits-nineteen-sixtyfour reveal-three-eight clear alloy-6063 cut-six"
            ),
            "OA7423-3" => array(
                "title" => "J Cap Edge Trim: Pinch Fit",
                "fits" => "19/64",
                "reveal" => "5/8",
                "price" => 16.13,
                "cut" => "6'",
                "classes" => "fits-nineteen-sixtyfour reveal-five-eight clear alloy-6063 cut-six"
            )
        ),
        "img" => $base_url."img/products/dividers/j-cap-pinch.png",
        "img_alt" => "J Cap Edge Trim"
    );
    $panels .= newPanel($pinch);
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>J-Cap Edge Trim</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/j-cap.jpg" alt="J-Cap"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Caps, Corners, Coves, and Dividers</a></li>
              <li>J-Cap Edge Trinm</li>
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
                        <h3>J-Cap <span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <div class="pic"><img src="<?php echo BASE_URL;?>img/products/dividers/j-cap-diagram.png" /></div>
                        <section class="filter-content">
                            <div class="ilter-type">
                               <span class="filter-title">Cut Length</span>
                               <form id="cut-form">
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
                            <div class="filter-type">
                               <span class="filter-title">Finish</span>
                               <form id="finish-form">
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
                            <div class="filter-type">
                               <span class="filter-title">Alloy & Temper</span>
                               <form id="alloy-form">
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
                            <div class="clearfix"></div>
                            <div class="filter-section">
                               <span class="filter-title">Fits</span>
                               <form id="fits-form">
                                   <div class="filter-option">
                                       <input type="radio" id="fits-one-sixteen" name="fits" value="fits-one-sixteen"/>
                                       <label for="fits-one-sixteen"><span></span>1/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-three-thirtytwo" name="fits" value="fits-three-thirtytwo"/>
                                       <label for="fits-three-thirtytwo"><span></span>3/32"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-seven-sixtyfour" name="fits" value="fits-seven-sixtyfour"/>
                                       <label for="fits-seven-sixtyfour"><span></span>7/64"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-one-eight" name="fits" value="fits-one-eight"/>
                                       <label for="fits-one-eight"><span></span>1/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-five-thirtytwo" name="fits" value="fits-five-thirtytwo"/>
                                       <label for="fits-five-thirtytwo"><span></span>5/32"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-three-sixteen" name="fits" value="fits-three-sixteen"/>
                                       <label for="fits-three-sixteen"><span></span>3/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-quarter" name="fits" value="fits-quarter"/>
                                       <label for="fits-quarter"><span></span>1/4"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-nineteen-sixtyfour" name="fits" value="fits-nineteen-sixtyfour"/>
                                       <label for="fits-nineteen-sixtyfour"><span></span>19/64"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-five-sixteen" name="fits" value="fits-five-sixteen"/>
                                       <label for="fits-five-sixteen"><span></span>5/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-three-eight" name="fits" value="fits-three-eight"/>
                                       <label for="fits-three-eight"><span></span>3/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-half" name="fits" value="fits-half"/>
                                       <label for="fits-half"><span></span>1/2"</label>
                                   </div>
                               </form>
                            </div>
                            <div class="filter-section">
                               <span class="filter-title">Reveal</span>
                               <form id="reveal-form">
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-three-thirtytwo" name="reveal" value="reveal-three-thirtytwo"/>
                                       <label for="reveal-three-thirtytwo"><span></span>3/32"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-three-sixteen" name="reveal" value="reveal-three-sixteen"/>
                                       <label for="reveal-three-sixteen"><span></span>3/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-thirteen-sixtyseven" name="reveal" value="reveal-thirteen-sixtyseven"/>
                                       <label for="reveal-thirteen-sixtyseven"><span></span>13/67"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-quarter" name="reveal" value="reveal-quarter"/>
                                       <label for="reveal-quarter"><span></span>1/4"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-nine-thirtytwo" name="reveal" value="reveal-nine-thirtytwo"/>
                                       <label for="reveal-nine-thirtytwo"><span></span>9/32"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-five-sixteen" name="reveal" value="reveal-five-sixteen"/>
                                       <label for="reveal-five-sixteen"><span></span>5/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-three-eight" name="reveal" value="reveal-three-eight"/>
                                       <label for="reveal-three-eight"><span></span>3/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-nine-sixteen" name="reveal" value="reveal-nine-sixteen"/>
                                       <label for="reveal-nine-sixteen"><span></span>9/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-five-eight" name="reveal" value="reveal-five-eight"/>
                                       <label for="reveal-five-eight"><span></span>5/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="reveal-twentyone-thirtytwo" name="reveal" value="reveal-twentyone-thirtytwo"/>
                                       <label for="reveal-twentyone-thirtytwo"><span></span>21/32"</label>
                                   </div>
                                   <div class="filter-option">&nbsp;</div>
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
