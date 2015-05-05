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
                                  <th>Fits</th>
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
                  <td>'.$item.'</td>
                  <td>'.$value["fits"].'"</td>
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

    $outside = array( 
        "Description" => 'Mechanically Polished Aluminum Protective Edge Molding Designed to Join 1/4" Material at 90 Degrees for an Outside Corner ',
        "Title" => "Outside Corner",
        "Models" => array(
            "OA7889" => array(
                "title" => "Outside Corner",
                "fits" => "1/4",
                "price" => 9.98,
                "classes" => "fits-quarter polished"
            ),
            "OA7249" => array(
                "title" => "Outside Corner",
                "fits" => "19/64",
                "price" => 14.10,
                "classes" => "fits-nineteen-sixtyfour clear polished"
            ),
            "OA7891" => array(
                "title" => "Outside Corner",
                "fits" => "1/2",
                "price" => 11.03,
                "classes" => "fits-half polished"
            )
        ),
        "img" => $base_url."img/products/dividers/corner-outside-aside.png",
        "img_alt" => "Outside Corner"
    );
    $panels .= newPanel($outside);

    $inside = array( 
        "Description" => 'Mechanically Polished Aluminum Protective Edge Molding Designed to Join 1/4" Material at 90 Degrees for an Inside Corner',
        "Title" => "Inside Corner",
        "Models" => array(
            "OA7890" => array(
                "title" => "Inside Corner",
                "fits" => "1/4",
                "price" => 10.18,
                "classes" => "fits-quarter polished"
            ),
            "OA7892" => array(
                "title" => "Inside Corner",
                "fits" => "1/2",
                "price" => 11.33,
                "classes" => "fits-half polished"
            )
        ),
        "img" => $base_url."img/products/dividers/corner-inside-aside.png",
        "img_alt" => "Inside Corner"
    );
    $panels .= newPanel($inside);

    $double = array( 
        "Description" => 'The Double Angle Enclosure Extrusion is the easiest way to join your 90 degree corners for all your Road or Flight Cases. The design allows you to easily join all your material at those 90 degree corners, while also providing easier assembly and protecting your cases… adding longer product life in addition to higher quality.',
        "Title" => "Double Corner",
        "Models" => array(
            "OA3860" => array(
                "title" => "Double Corner",
                "fits" => "1/4",
                "price" => 8.45,
                "classes" => "fits-quarter polished"
            ),
            "OA3980" => array(
                "title" => "Double Corner",
                "fits" => "3/8",
                "price" => 9.95,
                "classes" => "fits-three-eight polished"
            ),
            "OA3931" => array(
                "title" => "Double Corner",
                "fits" => "1/2",
                "price" => 10.97,
                "classes" => "fits-half polished"
            )
        ),
        "img" => $base_url."img/products/dividers/corner-double-aside.png",
        "img_alt" => "Double Corner"
    );
    $panels .= newPanel($double);
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Corners</title>
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
        <div class="jumbotron"><img src="<?php echo BASE_URL;?>img/jumbotron/corners.jpg" alt="Corners"></div>
        <main class="container-fluid common-container">           
            <ol class="breadcrumb">
              <li><a href="<?php echo BASE_URL;?>">Home</a></li>
              <li><a href="index.php">Caps, Corners, Coves, and Dividers</a></li>
              <li>Corners</li>
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
                        <h3>Corners <span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
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
                                       <input type="radio" id="polished" name="finish" value="polished"/>
                                       <label for="polished"><span></span>Mechanical Polished</label>
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
                            <div class="alloy filter-type">
                               <span class="filter-title">Fits</span>
                               <form id="clips-alloy-form">
                                   <div class="filter-option">
                                       <input type="radio" id="fits-quarter" name="fits" value="fits-quarter"/>
                                       <label for="fits-quarter"><span></span>1/4"</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="fits-nineteen-sixtyfour" name="fits" value="fits-nineteen-sixtyfour"/>
                                       <label for="fits-nineteen-sixtyfour"><span></span>19/64"</label>
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
                                    <p>Create cleaner corner transitions for your wall and wall paneling projects with our inside/ outside corner extrusions. Orange Aluminum’s corner extrusions will advance installation time and improve the overall look of your wall project. Protective Edge Molding Designed to Join Material at 90 Degrees for Outside and Inside Corners</p>
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
                                                <a data-toggle="tooltip" title="Process that buffs out the surface finish to create a smooth, mirror-ish appearance. Does not protect the material from oxidizing">Mechanical Polished</a><br>
                                                <a data-toggle="tooltip" title="Clear Anodized Finish, Per MIL-A-8625F. Electrochemical process that is corrosion resistant and protects the material from oxidizing.">Clear Anodized</a> selectively available
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
        <?php include("../php/includes/script-js.php"); ?>
    </body>
</html>
