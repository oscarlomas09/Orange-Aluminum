//Format Currency
Number.prototype.formatMoney = function(c, d, t){
var n = this, 
    c = isNaN(c = Math.abs(c)) ? 2 : c, 
    d = d == undefined ? "." : d, 
    t = t == undefined ? "," : t, 
    s = n < 0 ? "-" : "", 
    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

//Collapse or show items
function collapsable(){                
    //check the window width to hide or show certain elements
    var win_w = $(window).width();
    if(win_w < 712){
        $("#user-options").collapse("show");
    }
    else{
        $("#user-options, #search-mobile").collapse('hide'); //hide user options and mobile search box in HEADER SECTION        
    }

    if(win_w >= 768){      
        $("#footer .nav").collapse('show'); //Show footer nav links if there is room for them
        $("#filters").collapse('show'); //Show Filters if the width is greater than 768px
    }
    else{
        $("#footer .nav").collapse('hide'); //Collapse footer nav links if there is no room for them
    }
    
    //collapse filters
    if(win_w < 768){
        $(".filter").children(".filter-name").each(function(){
            collapseFilters($(this), true);            
        });
        $(".filter").collapse("hide");
    }
    else{
        $(".filter").children(".filter-name").each(function(){
            collapseFilters($(this), false);            
        });
        $(".filter").collapse("show");
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


//Shopping Cart Items Popover
var cart_empty = false; //is the shopping cart empty? Default to Yes
var cart_popover = "Your Cart Is Empty"; //initiate popover element
var cart_html = false;
//if the cart is not epmty
if(!cart_empty){
    cart_popover = $("#cart-popover").html(); //get the template html of the popoverh
    cart_html = true; //set the popover html value to true to insert html
}

$('.shopping-cart').popover({
    title: "Recently Added Items",
    trigger: "click",
    html: cart_html,
    content: cart_popover,
    placement:'bottom'
});

//Live Chat Form
var $chat = $("#chat"); //cache the chat element
$("#chat-header, #chat-btn").click(function(e){
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
        },2500);
    });
});

//Filter Functionality
$('input[type=radio]').change(function() { //when the user selects a filter option
    var filters = "";
    //GO trough each radio button
    $('input[type=radio]').each(function () {
       filter = (this.checked ? $(this).val() : "");
        if(filter == "fixed"){ //if this radio option has the value "fixed" then this filter cannot be changed
            filter = "";
        }
        else{
            filters += " " + filter;
        }
    });
    filters = $.trim(filters).split(/[ ,]+/); //Trim white spaces and replace any other space with commas
    
    //first hide all products and loop through each one
    $(".filter-row").each(function(){
        $(".panel-default").show(); //show the parent panel
        $(this).removeClass("filter-hidden").show(); //Show the item again
        var hasAll = true; //initiate hasAll variable
        for(var i=0; i < filters.length; i++){
            //loop through each filter and check if this row has all the desired qualities
            if(!$(this).hasClass(filters[i])){                
                hasAll = false; //it did not have this class, so it failed the test
                break;
            }
        }
        if(!hasAll && !$(this).hasClass("filter-fixed")){
            $(this).addClass("filter-hidden").hide();    //if it doesnt have all requested filters, then hide it
        }
    });
    
    //if the parent container isn't showing any elements, then hide it
    $('.panel-default').each(function(){
        if($(this).find(".filter-row").length == $(this).find(".filter-hidden").length){
            $(this).hide();
        }
    });
});
//Filter Reset Button
$("#reset-btn").click(function(){
    //reset every filter option to not-checked
    $('input[type=radio]').each(function () {
        if($(this).val() == "fixed"){ //if it is a fixed filter, then check it
            return;
        }
        $(this).prop('checked', false); 
    });
    $(".panel-default, .filter-row").show(); //show all products and its parent containers
});
    
$('.filter-name').click(function(){
    //If the filter options are visible, then hide them, else show them
    if($(this).hasClass('active')){        
        collapseFilters($(this), true);
    }
    else{
        collapseFilters($(this), false);    
    }
});

function collapseFilters($filter, collapse){
    //Animate the Filters and Home Navigation
    transition_timeout = 20;
    var current_item = $filter.next().find('li'); //get every filter option
    
    if(collapse){
        $filter.removeClass('active');
        current_item.removeClass('visible');
        
        //animate the filter option, but add a delay depending on the order of it
        for (i = current_item.length, j = -1; i >= 0; i--, j++){ 
            $(current_item[i]).css('transition-delay', '0ms');
        }
    }
    else{
        $filter.addClass('active');
        current_item.addClass('visible');
        //hide every filter option
        for (i = 0; i <= current_item.length; i++){
            $(current_item[i]).css('transition-delay', transition_timeout * i + 'ms');
        }
    }
}
$(".filter a").click(function(e){
    //prevent any invisible link on the filter container from being clicked
    if(!$(this).parent("li").hasClass("visible")){
        e.preventDefault();
    }
});

// Shopping 
$(".cart-col").click(function(){
    var $product = $(this).parent("tr");
    
    var name = $product.children(".item-sku").data("name") + ": " + $product.children(".item-dimensions").text();    
    $(".cart-title").text(name);
    $(".cart-amount .price").text($product.children(".item-price").text());
    $(".cart-amount .price").data("price",$product.children(".item-price").data("price"));
    $(".cart-amount .total").text("("+ $product.children(".item-price").text() + " TOTAL)");
    $("#cart-sku").val($product.children(".item-sku").text());
    $("#cart-qty input").val(1);
    
    $("#add-product").show();
     setTimeout(function(){
     	$("#add-product .cart-product").css("left", "50%");          
     },200);
});
$("#cart-qty").on('change', 'input', function() {
     var total_amount =($(".cart-amount .price").data("price")*$(this).val()).formatMoney(2, '.', ',');
     $(".cart-amount .total").text("($"+ total_amount + " TOTAL)");
});
$("#add-item").click(function(){    
    $('#cart-object').children("span").text($("#cart-qty input").val());
    var new_amount = parseInt($(".shopping-cart .amount").data("amount")) + parseInt($("#cart-qty input").val());
    $(".shopping-cart .amount").data("amount",new_amount);
    $(".shopping-cart .amount").text(new_amount);
    
    var cart_qty = document.getElementById("cart-qty"),
    elemRect = cart_qty.getBoundingClientRect(),
    shoppingCart = $(".shopping-cart:visible")[0],
    shoppingRect = shoppingCart.getBoundingClientRect();
    $('#cart-object span').animate({width:55, height: 55},100);
    $('#cart-object').css({
        top: elemRect.top+ "px",
        left: (elemRect.left + (cart_qty.offsetWidth/2)) + "px"
    }).show().delay(300).animate({
        top: shoppingRect.top,
        left: shoppingRect.left + (shoppingCart.offsetWidth/2)
    },300).fadeOut("fast");
    
    setTimeout(function(){
        $("#add-product .cart-product").css("left", "-100%");
        $("#add-product").fadeOut();    
        $('#cart-object span').css({width:0, height: 0}); 
    },1000);
});
$(".shopping-close").click(function(){
    $("#add-product .cart-product").css("left", "-100%");
    $("#add-product").fadeOut();    
    $('#cart-object span').css({width:0, height: 0});     
});