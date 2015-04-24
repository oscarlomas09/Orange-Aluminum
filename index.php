<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Orange Aluminum</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <!-- Bootstrap -->
        <link href="_dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/icons.css" rel="stylesheet">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("php/includes/header.php"); ?>
        <?php include("php/includes/navbar.php"); ?>
        <?php include("php/includes/mobile-navigation.php"); ?>
        <?php include("php/includes/carousel.php"); ?>
        <?php include("php/includes/home-content.php"); ?>
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
        
        <script>
            //perform design and functionality changes depending on the screen size
            collapsable();
            $(window).resize(function(e){
                collapsable();
            });
            
            //show or hide mobile menu on click
            $(".mobile-menu-close").click(function(){
                mobileMenu();
            });
            //show a second level of the mobile navigation depending on the tab clicked
            $(".mobile-li").click(function(){
                $(".second-level").css({left:"-100%"});
                var target_menu = $(this).data("target");
                $("#"+target_menu).css({left:0});
            });
            //hide second level mobile navigation when the "Return" tab is clicked
            $(".mobile-back").click(function(){
                $(".second-level").css({left:"-100%"});
            });
            
            //Collapse or show items
            function collapsable(){                
                //check the window width to hide or show certain elements
                var win_w = $(window).width();
                if(win_w > 712){
                    $("#user-options, #search-mobile").collapse('hide'); //hide user options and mobile search box in HEADER SECTION        
                }
                
                if(win_w >= 768){      
                    $("#footer .nav").collapse('show'); //Show footer nav links if there is room for them
                }
                else{
                    $("#footer .nav").collapse('hide'); //Collapse footer nav links if there is no room for them
                }
            }
            
            //Show or Hide Mobile Navigation
            function mobileMenu(){
                if($("#mobile-navbar").hasClass("mobile-visible")){
                    $("#mobile-navbar-screen").css({zIndex:0, opacity:0, left:"-110%"});
                    $("#mobile-navbar").css("left","-110%").removeClass("mobile-visible");
                    $(".second-level").css({left:"-100%"});
                }
                else{
                    $("#mobile-navbar-screen").css({zIndex:1000, opacity:0.5, left: 0});
                    $("#mobile-navbar").css("left","0%").addClass("mobile-visible");
                }
            }
            
            //Shopping Cart Items Popover
            var cart_empty = true; //is the shopping cart empty? Default to Yes
            var cart_popover = "Your Cart Is Empty"; //initiate popover element
            var cart_html = false;
            //if the cart is not epmty
            if(!cart_empty){
                cart_popover = $("#cart-popover").html(); //get the template html of the popoverh
                cart_html = true; //set the popover html value to true to insert html
            }
                
            $('.shopping-cart').popover({
                title: "Recently Added Items",
                trigger: "hover click",
                html: cart_html,
                content: cart_popover,
                placement:'bottom'
            });

            //Live Chat Form
            var $chat = $("#chat"); //cache the chat element
            $("#chat-header").click(function(e){
                //if the chat form is hidden then animate it in
                if($chat.hasClass("chat-hidden")){
                    $chat.animate({bottom: 0}, 500).removeClass("chat-hidden");
                }
            });
            $("#chat-close").click(function(e){
                //Close the chat form
                $chat.animate({bottom: "-" + $chat.children("#chat-content").outerHeight() + "px"}, 500, function(){
                    //set a timeout so that the chat form does not re-apear after closing it
                    setTimeout(function(){
                        $chat.addClass("chat-hidden")
                    },1000);
                });
            });
        </script>
    </body>
</html>
