<?php define('BASE_URL', 'http://localhost/Orange-Aluminum/'); ?>
<header>
    <h5 class="promo">Free Ground Shipping on Orders of $200+</h5>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">
                    <img src="<?php echo BASE_URL; ?>img/logo-icon.png" alt="Orange Aluminum Logo" class="">
                    <div class="title">
                        <h2>Orange Aluminum</h2>
                        <h3>Architectural and Structural Aluminum</h3>
                    </div>                    
                </a>
            </div>  
            <div class="long-header">
                <div class="nav navbar-tabs navbar-right">
                    <div class="nav-tab"><a href=""><span class="glyphicon glyphicon-comment"></span>Live Chat</a></div>
                    <div class="nav-tab"><a href=""><span class="glyphicon glyphicon-user"></span>Log-In</a></div>
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
                    <span class="amount">0</span>
                </div>
                <div class="clearfix"></div>         
                <div class="nav navbar-nav navbar-right">
                    <div class="nav-links">
                        <a href=""><span class="glyphicon glyphicon-earphone"></span>(877) 464-2181</a>
                        <a href=""><span class="glyphicon glyphicon-envelope"></span>Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="small-header">
                <div class="member">
                    <a data-toggle="collapse" href="#user-options" aria-expanded="false" aria-controls="user-options"><span class="glyphicon glyphicon-user"></span></a>
                </div>
                <div class="shopping-cart"  data-toggle="popover" data-placement="bottom" data-content="">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    <span class="amount">0</span>
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
        <a href=""><span class="glyphicon glyphicon-user"></span>Log-In</a>
        <a href=""><span class="glyphicon glyphicon-earphone"></span>(877) 464-2181</a>
        <a href=""><span class="glyphicon glyphicon-envelope"></span>Contact Us</a>
    </div>
    <form id="search-mobile" class="clearfix collapse">
        <input type="text" placeholder="Search">
        <button type="" class="btn">Find</button>
    </form>
</header>

<!-- Shopping Cart Popover -->
<div id="cart-popover" style="display:none;position:absolute;top: -9999px;">
    <div class="container" style="width:100% !important;">
        <div class="row">
            <div class="col-lg-4"><img src="<?php echo BASE_URL; ?>img/logo-icon.png" style="display:block;height:auto;width:auto;max-width:100%;max-height: 100px;margin:auto;"/></div>
            <div class="col-lg-8" style="color:black;">
                <b>Flat Bar: 5mm x 2mm</b><br>
                <span>Price: $0.89</span><br>
                <span>Qty: 5</span><br>
                <a href="" class="popover-link">Add Item</a><span style="margin:0px 3px;color:#ed6531;">|</span><a href="" class="popover-link">Remove Item</a>
            </div>
        </div>
        <div class="row text-center"><h3>Cart Subtotal: $4.45</h3></div>
        <div class="row" style="padding: 5px;">
            <a class="nav-left left col-sm-6 popover-link" style="padding: 5px 8px;">Shopping Cart</a>
            <a class="nav-right btn btn-warning col-sm-6">Checkout</a>
        </div>
    </div>
</div>

