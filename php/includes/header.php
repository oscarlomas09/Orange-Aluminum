<header>
    <input type="hidden" id="base_url" value="<?php echo BASE_URL; ?>" />
    <h5 class="promo">Free Ground Shipping on Orders of $200+</h5>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?php echo BASE_URL; ?>" class="navbar-brand">
                    <img src="<?php echo BASE_URL; ?>img/logo-icon.png" alt="Orange Aluminum Logo" class="">
                    <div class="title">
                        <h2>Orange Aluminum</h2>
                        <h3>Architectural and Structural Aluminum</h3>
                    </div>                    
                </a>
            </div>  
            <div class="long-header">
                <div class="nav navbar-tabs navbar-right">
                    <div class="nav-tab" id="chat-btn"><a><span class="glyphicon glyphicon-comment"></span>Live Chat</a></div>
                    <div class="nav-tab login"><span style="color:white;text-transform:uppercase;"><span class="glyphicon glyphicon-user"></span>  Log-In</span></div>
                </div>
                <div class="clearfix"></div><br>   
                <form class="search-form navbar-right" role="search">
                    <span class="glyphicon glyphicon-search"></span>
                    <input type="text" placeholder="Search">
                    <button type="submit">Find</button>
                </form>
                <div class="shopping-cart navbar-right" data-toggle="popover" data-placement="bottom" data-content="">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    <span>Cart</span> 
                    <span class="amount" data-amount="0">0</span>
                </div>
                <div class="clearfix"></div>         
                <div class="nav navbar-nav navbar-right">
                    <div class="nav-links">
                        <a href=""><span class="glyphicon glyphicon-earphone"></span>(877) 464-2181</a>
                        <a href="<?php echo BASE_URL; ?>contact.php"><span class="glyphicon glyphicon-envelope"></span>Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="small-header">
                <a data-toggle="collapse" href="#user-options" aria-expanded="false" aria-controls="user-options"><div class="member"><span class="glyphicon glyphicon-user"></span>
                </div></a>
                <div class="shopping-cart"  data-toggle="popover" data-placement="bottom" data-content="">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    <span class="amount" data-amount="0">0</span>
                </div>
                <form class="search-form navbar-right" role="search">
                    <a data-toggle="collapse" href="#search-mobile" aria-expanded="false" aria-controls="search-mobile"><span class="glyphicon glyphicon-search"></span></a>
                    <input type="text" placeholder="Search">
                    <button type="submit">Find</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="user-options" class="nav-links clearfix collapse">
        <a href="" class="login"><span class="glyphicon glyphicon-user"></span>  Log-In</a>
        <a href="tel:18774642181"><span class="glyphicon glyphicon-earphone"></span>(877) 464-2181</a>
    </div>
    <form id="search-mobile" class="clearfix collapse">
        <input type="text" placeholder="Search">
        <button type="" class="btn">Find</button>
    </form>
</header>
<!-- Progress Bar -->
<div class="progress" id="processing">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
    <span class="sr-only">100% Complete</span>
  </div>
</div>

<!-- Login Popover -->
<div id="login-popover" style="display:none;position:absolute;top: -9999px;">
    <div class="container" style="width:100% !important;">
        <form id="login-form">
            <label for="login-email">Email:</label><br>
            <input id="login-email" type="email" placeholder="Email"/> <br>
            <label for="login-password">Password:</label><br>
            <input id="login-password" type="password" placeholder="password"/> <br>
            <a href="<?php echo BASE_URL; ?>account/forgotpassword/" class="text-center" style="display:block;">Forgot Password?</a>
            <button id="login-btn">Log In</button>
            <a href="<?php echo BASE_URL; ?>account/create/" class="btn btn-warning">Create Account</a>
        </form>
    </div>
</div>

<!-- Shopping Cart Popover -->
<div id="cart-popover" style="display:none;position:absolute;top: -9999px;">
    <div id="cart-items" class="container" style="width:100% !important;">
        <!-- Cart Popover Item Template -->
        <!--
        <div class="row product-row">
            <div class="col-lg-4"><img src="<?php echo BASE_URL; ?>img/logo-icon.png" style="display:block;height:auto;width:auto;max-width:100%;max-height: 100px;margin:auto;"/></div>
            <div class="col-lg-8" style="color:black;">
                <b>Flat Bar: 5mm x 2mm</b><br>
                <span>Price: $0.89</span><br>
                <span>Qty: 5</span><br>
                <span" class="popover-link remove-product">Remove Item</a>
            </div>
        </div>
        -->
    </div>
    <div id="white-blur"></div>
    <div class="row text-center"><h3 id="cart-subtotal">Cart Subtotal: $0.00</h3></div>
    <div class="row" style="padding: 5px;">
        <a href="<?php echo BASE_URL; ?>cart/" class="nav-left left col-sm-6 popover-link" style="padding: 5px 8px;">Shopping Cart</a>
        <a href="<?php echo BASE_URL; ?>checkout/" class="nav-right btn btn-warning col-sm-6">Checkout</a>
    </div>
</div>
