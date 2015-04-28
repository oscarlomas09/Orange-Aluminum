$(function () {
  $('[data-toggle="tooltip"]').tooltip()
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
        $("#filters").collapse('show'); //Show Filters if the width is greater than 768px
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
    $(".accordion-toggle").each(function(){
        $(this).removeClass("filter-hidden").show(); //Show the item again
        $(".panel-default").show(); //show the parent panel
        $(".accordion-body").collapse("hide"); //collapse all product shopping cart
        var hasAll = true; //initiate hasAll variable
        for(var i=0; i < filters.length; i++){
            //loop through each filter and check if this row has all the desired qualities
            if(!$(this).hasClass(filters[i])){
                hasAll = false; //it did not have this class, so it failed the test
                break;
            }
        }
        if(!hasAll){
            $(this).addClass("filter-hidden").fadeOut();    //if it doesnt have all requested filters, then hide it
        }
    });
    
    //if the parent container isn't showing any elements, then hide it
    $('.panel-default').each(function(){
        if($(this).find(".accordion-toggle").length == $(this).find(".filter-hidden").length){
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
    $(".panel-default, .accordion-toggle").show(); //show all products and its parent containers
});

