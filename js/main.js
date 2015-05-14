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

var base_url = $("#base_url").val();

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
        $(".filter").not('.filter-home').collapse("hide");
    }
    else{
        $(".filter").children(".filter-name").each(function(){
            collapseFilters($(this), false);            
        });
        $(".filter").not('.filter-home').collapse("show");
    }
}

//Show or Hide Mobile Navigation
function mobileMenu(){
    if($("#mobile-navbar").hasClass("mobile-visible")){
        $("#mobile-navbar-screen").css({zIndex:0, opacity:0, left:"-110%"});
        $("#mobile-navbar").css("left","-110%").removeClass("mobile-visible");
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
    $(".login").popover("hide"); //hide the login popover
});

//show or hide mobile menu on click
$(".mobile-menu-close").click(function(){
    mobileMenu();
});

//Shopping Cart Items Popover
cart_popover = $("#cart-popover").html(); //get the template html of the popoverh


$('.shopping-cart').popover({
    title: "Recently Added Items",
    trigger: "click",
    html: true,
    content: cart_popover,
    placement:'bottom'
});

//Login Popover
var login_popover = $("#login-popover").html();
$('.login').popover({
    title: "Log into My Account",
    trigger: "click",
    html: true,
    content: login_popover,
    placement:'bottom'
});
$(".login").click(function(e){
    e.preventDefault();
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
            //$(this).hide();
        }
    });
});
$("#reset-btn").trigger("click"); //initialize reset to make sure everything is unchecked
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

function showProgress(time, maxProgress){
    $("#processing").show();
    $("#processing").find(".progress-bar").css({width: "0"}).animate({width: maxProgress+"%"}, time, function(){
        $("#processing").delay(800).fadeOut("slow");
    });
}

//Cookie Handling
function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

createCookie('ppkcookie','testcookie',7);

var x = readCookie('ppkcookie')
if (x) {
}