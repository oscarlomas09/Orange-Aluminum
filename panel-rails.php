<?php
    $base_url = "http://localhost/Orange-Aluminum/";
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
                              <thead>
                                <tr>
                                  <th>Offset (A) x Drop (B)</th>
                                  <th>Cut Length</th>
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
  function newModel($alteration, $offset, $drop){
      $row = '';
      foreach($alteration as $item => $value){
        $row .= '<tr data-toggle="collapse" data-target="#collapse-'.$item.'" class="accordion-toggle '.$value["classes"].'">
                  <th scope="row">'.$offset.'" x '.$drop.'"</th>
                  <td>'.$value["cut"].'</td>
                  <td>'.$item.'</td>
                  <td>$'.$value["price"].'</td>
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
    $OA5337 = array( 
        "Description" => 'Mill Finish Aluminum Panel Rails and Clips, Style 1, Panel Rails and Clips are Designed for Two of the Sections to Wedge Together, Securely Locking Panels in Place. Ideal for  Wall Panels, Partitions, and Signs. Lift-off Clearance of 5/8" Required for Installation and Removal. Overall Height when Mounted is 3-1/8" (Style 1 Has Less Offset and Larger Lift-Off Than Style 2 with Larger Offset and Smaller Lift-Off.) ',
        "Title" => "Panel Rail and Clip Style 1",
        "Models" => array(
            "OA5337-CB" => array(
                "title" => "Panel Rail and Clip, Style 1: Bag of 20",
                "cut" => "Clips (20)",
                "price" => 9.06,
                "classes" => "offset-three-sixteen drop-five-eight clips-twenty"
            ),
            "OA5337-6" => array(
                "title" => "Panel Rail and Clip, Style 1: 6 Feet",
                "cut" => "6'",
                "price" => 9.36,
                "classes" => "offset-three-sixteen drop-five-eight clips-six"
            ),
            "OA5337-12" => array(
                "title" => "Panel Rail and Clip, Style 1: 12 Feet",
                "cut" => "12'",
                "price" => 18.72,
                "classes" => "offset-three-sixteen drop-five-eight clips-twelve"
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
                "classes" => "offset-quarter drop-three-eight clips-twenty"
            ),
            "OA5403-6" => array(
                "title" => "Panel Rail and Clip, Style 2: 6 Feet",
                "cut" => "6'",
                "price" => 9.98,
                "classes" => "offset-quarter drop-three-eight clips-six"
            ),
            "OA5403-12" => array(
                "title" => "Panel Rail and Clip, Style 2: 12 Feet",
                "cut" => "12'",
                "price" => 19.96,
                "classes" => "offset-quarter drop-three-eight clips-twelve"
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
                "classes" => "offset-seven drop-forty clips-six"
            ),
            "OA9548-12" => array(
                "title" => "Z Hanger: Light Duty",
                "cut" => "12'",
                "price" => 15.98,
                "classes" => "offset-seven drop-forty clips-twelve"
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
                "classes" => "offset-quarter drop-seven clips-ten"
            ),
            "OA8142-6" => array(
                "title" => "HD Panel Rail and Clip: 6 Feet",    
                "cut" => "6'",
                "price" => 15.92,
                "classes" => "offset-quarter drop-seven clips-six"
            ),
            "OA8142-12" => array(
                "title" => "HD Panel Rail and Clip: 12 Feet",
                "cut" => "12'",
                "price" => 31.84,
                "classes" => "offset-quarter drop-seven clips-twelve"
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
                "classes" => "offset-three-eight drop-seven clips-ten"
            ),
            "OA7919-6" => array(
                "title" => "XL Panel Rail and Clip: 6 Feet",    
                "cut" => "6'",
                "price" => 28.27,
                "classes" => "offset-three-eight drop-seven clips-six"
            ),
            "OA7919-12" => array(
                "title" => "XL Panel Rail and Clip: 12 Feet",
                "cut" => "12'",
                "price" => 56.54,
                "classes" => "offset-three-eight drop-seven clips-twelve"
            )
        ),
        "img" => $base_url."img/products/clips/xl-aside.png",
        "img_alt" => "XL Panel Rail and Clip",
        "offset" => "3/8",	    
        "drop" => "7/16");
    $panels .= newPanel($OA7919);
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
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/icons.css" rel="stylesheet">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/respond-.4.2.min.js"></script>
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
            <div id="filter-btn" class="visible-xs" data-toggle="collapse" data-target="#filters" aria-expanded="false" aria-controls="filters"><span class="glyphicon glyphicon-tasks"></span> Filter</div>
            <div class="row">
                <aside class="col-xs-12 col-sm-3">
                    <div class="filter clearfix" id="filters">
                        <h3>Panel Rails & Clips <span class="filter-close glyphicon glyphicon-remove visible-xs" data-toggle="collapse" data-target="#filters"></span></h3>
                        <section class="filter-content">
                            <span class="filter-title">Dimensions</span>
                            <div class="pic"><img src="<?php echo BASE_URL;?>img/products/clips/diagram.png" /></div>
                            <div class="dimensions filter-type clearfix">
                                <div class="filter-section">
                                   <span class="filter-title">Offset A</span>                                    
                                   <form id="clips-alloy-form">
                                       <div class="filter-option">
                                           <input type="radio" id="offset-three-sixteen" name="clips-offset" value="offset-three-sixteen"/>
                                           <label for="offset-three-sixteen"><span></span>3/16"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="offset-three-eight" name="clips-offset" value="offset-three-eight"/>
                                           <label for="offset-three-eight"><span></span>3/8"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="offset-seven" name="clips-offset" value="offset-seven"/>
                                           <label for="offset-seven"><span></span>7/32"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="offset-quarter" name="clips-offset" value="offset-quarter"/>
                                           <label for="offset-quarter"><span></span>1/4"</label>
                                       </div>
                                   </form>
                                </div>
                                <div class="filter-section">
                                   <span class="filter-title">Drop B</span>                                    
                                   <form id="clips-alloy-form">
                                       <div class="filter-option">
                                           <input type="radio" id="drop-three-eight" name="clips-drop" value="drop-three-eight"/>
                                           <label for="drop-three-eight"><span></span>3/8"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="drop-seven" name="clips-drop" value="drop-seven"/>
                                           <label for="drop-seven"><span></span>7/16"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="drop-five-eight" name="clips-drop" value="drop-five-eight"/>
                                           <label for="drop-five-eight"><span></span>5/8"</label>
                                       </div>
                                       <div class="filter-option">
                                           <input type="radio" id="drop-forty" name="clips-drop" value="drop-forty"/>
                                           <label for="drop-forty"><span></span>45/64"</label>
                                       </div>
                                   </form>
                                </div>
                            </div>
                            <div class="cut filter-type">
                               <span class="filter-title">Cut Length</span>
                               <form id="clips-cut-form">
                                   <div class="filter-option">
                                       <input type="radio" id="clips-ten" name="clips-length" value="clips-ten"/>
                                       <label for="clips-ten"><span></span>Clips (10pcs)</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="clips-twenty" name="clips-length"  value="clips-twenty"/>
                                       <label for="clips-twenty"><span></span>Clips (20pcs)</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="clips-six" name="clips-length"  value="clips-six"/>
                                       <label for="clips-six"><span></span>6'</label>
                                   </div>
                                   <div class="filter-option">
                                       <input type="radio" id="clips-twelve" name="clips-length"  value="clips-twelve"/>
                                       <label for="clips-twelve"><span></span>12'</label>
                                   </div>
                               </form>
                            </div>
                            <div class="finish filter-type">
                               <span class="filter-title">Finish</span>
                               <form id="clips-finish-form">
                                   <div class="filter-option">
                                       <input type="radio" id="clips-mill" name="clips-finish" value="fixed" checked/>
                                       <label for="clips-mill"><span></span>Mill Finish</label>
                                   </div>
                               </form>
                            </div>
                            <div class="alloy filter-type">
                               <span class="filter-title">Alloy & Temper</span>
                               <form id="clips-alloy-form">
                                   <div class="filter-option">
                                       <input type="radio" id="clips-alloy" name="clips-alloy" value="fixed" checked/>
                                       <label for="clips-alloy"><span></span>6063-T5</label>
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
        
        <?php include("php/includes/chat.php"); ?>
        <?php include("php/includes/footer.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <!-- Include all compiled plugins (below), or  individual files as needed -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

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
