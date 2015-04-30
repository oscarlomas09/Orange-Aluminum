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
                            <div class="col-xs-12 col-sm-9 hidden-xs">
                              <p>'.$product["Description"].'</p>
                            </div>
                           <div class="col-xs-12 col-sm-3">
                                <img class="img-tall" alt="'.$product["img_alt"].'" src="'.$product["img"].'"/>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover" style="width:100%;">
                              <thead>
                                <tr>
                                  <th>Cut Length</th>
                                  <th>Covers</th>
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
                  <td>'.$value["covers"].'"</td>
                  <td>'.$item.'</td>
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
    $edge = array( 
        "Description" => 'Brite-Dip and Clear Anodized Aluminum Edge Molding, also Known as Overlapping Face Molding',
        "Title" => "Edge Trim",
        "Models" => array(
            "OA7429-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "1/2",
                "price" => 6.36,
                "classes" => "cut-three covers-half brite alloy-6463"
            ),
            "OA7428-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "3/4",
                "price" => 7.03,
                "classes" => "cut-three covers-three-quarter brite alloy-6463"
            ),
            "OA7432-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "7/8",
                "price" => 7.54,
                "classes" => "cut-three covers-seven-eight brite alloy-6463"
            ),
            "OA7430-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "1-1/16",
                "price" => 8.36,
                "classes" => "cut-three covers-one-one-sixteen brite alloy-6463"
            ),
            "OA7431-3" => array(
                "title" => "Edge Trim",
                "cut" => "3'",
                "covers" => "1-1/4",
                "price" => 8.93,
                "classes" => "cut-three covers-one-quarter brite alloy-6463"
            ),
            "OA7429-6" => array(
                "title" => "Edge Trim",
                "cut" => "6'",
                "covers" => "1/2",
                "price" => 11.13,
                "classes" => "cut-six covers-half brite alloy-6463"
            )
        ),
        "img" => $base_url."img/products/trims/edge-trim-aside.png",
        "img_alt" => "Edge Trim"
    );
    $panels .= newPanel($edge);
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Panel Rails and Clips</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/trims.jpg" alt=""></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Tee Molding & Edge Trims</a></li>
              <li>Edge Trims</li>
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
                            <img src="../img/tolerance.jpg" alt="Tolerance Table" style="max-width:100%;"/>
                        </div>
                    </div>
                </div>
            </div>
            <div id="filter-btn" class="visible-xs" data-toggle="collapse" data-target="#filters" aria-expanded="false" aria-controls="filters"><span class="glyphicon glyphicon-tasks"></span> Filter</div>
            <div class="row">
                <aside class="col-xs-12 col-sm-3">
                    <div class="filter clearfix" id="filters">
                        <h3>Edge Trim<span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <section class="filter-content">
                            <div class="filter-type">
                               <span class="filter-title">Cut Length</span>
                               <form>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-three" name="cut" value="cut-three"/>
                                       <label for="cut-three"><span></span>3'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-six" name="cut"  value="cut-six"/>
                                       <label for="cut-six"><span></span>6'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="cut-twelve" name="cut" value="cut-twelve"/>
                                       <label for="cut-twelve"><span></span>12'</label>
                                   </div>
                               </form>
                            </div>
                            <div class="filter-type">
                               <span class="filter-title">Finish</span>
                               <form>
                                   <div class="filter-option">
                                       <input type="radio" id="brite" name="finish" value="brite"/>
                                       <label for="brite"><span></span>Brite-Dip Anodized</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="clear" name="finish" value="clear"/>
                                       <label for="clear"><span></span>Clear Anodized</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="polished" name="finish" value="polished"/>
                                       <label for="polished"><span></span>Mechanically Polished</label>
                                   </div>
                               </form>
                            </div>
                            <div class="filter-type">
                               <span class="filter-title">Alloy & Temper</span>
                               <form>
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
                            <div class="filter-type">
                               <span class="filter-title">Covers</span>
                               <form>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-three-eight" name="covers" value="covers-three-eight"/>
                                       <label for="covers-three-eight"><span></span>3/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-half" name="covers" value="covers-half"/>
                                       <label for="covers-half"><span></span>1/2"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-three-quarter" name="covers" value="covers-three-quarter"/>
                                       <label for="covers-three-quarter"><span></span>3/4"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-thirteen-sixteen" name="covers" value="covers-thirteen-sixteen"/>
                                       <label for="covers-thirteen-sixteen"><span></span>13/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-seven-eight" name="covers" value="covers-seven-eight"/>
                                       <label for="covers-seven-eight"><span></span>7/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-sixtythree-sixtyfour" name="covers" value="covers-sixtythree-sixtyfour"/>
                                       <label for="covers-sixtythree-sixtyfour"><span></span>63/64"</label>
                                    </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-one" name="covers" value="covers-one"/>
                                       <label for="covers-one"><span></span>1"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-one-one-sixteen" name="covers" value="covers-one-one-sixteen"/>
                                       <label for="covers-one-one-sixteen"><span></span>1-1/16"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-one-quarter" name="covers" value="covers-one-quarter"/>
                                       <label for="covers-one-quarter"><span></span>1-1/4"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-one-half" name="covers" value="covers-one-half"/>
                                       <label for="covers-one-half"><span></span>1-1/2"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-one-five-eight" name="covers" value="covers-one-five-eight"/>
                                       <label for="covers-one-five-eight"><span></span>1-5/8"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="covers-two" name="covers" value="covers-two"/>
                                       <label for="covers-two"><span></span>2"</label>
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
                                    <p>The difference between a run-of-the-mill countertop, table or display and one that captures attention is often in the details. Whether you are looking to create a traditional 50’s look or something with contemporary flare, our edge trims add customized style while providing protection.</p>
                                    <table style="width:100%;">
                                        <tr>
                                            <td><b>Alloy</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="Ultra-Corrosive Resistant Architectural Grade Alloy">(CA) 6063-T5</a><br>
                                                <a data-toggle="tooltip" title="Considered a Brite-Dip alloy, specially engineered for brite anodize finishes">(BD) 6463-T5</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Finish</b></td>
                                            <td style="width:75%;">
                                                <a data-toggle="tooltip" title="Clear Anodized Finish, Per MIL-A-8625F. Electrochemical process that is corrosion resistant and protects the material from oxidizing.">Clear Anodized</a> and    
                                                <a data-toggle="tooltip" title="A shiny finish that is corrosion resistant and protects the material from oxidizing.">Brite Dip Anodized</a>
                                            </td>
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
                                            <td style="width:75%;">Punched and Countersunk Holes 6” on Center</td>
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
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
