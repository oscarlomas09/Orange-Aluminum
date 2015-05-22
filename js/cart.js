// Shopping 

// Storing the wanted items
var cart_items = [];

//The user wants to add a new product
$(".cart-col").click(function(){    
    $(".login, .shopping-cart").popover("hide"); //hide the login and shopping cart popover
    
    var $product = $(this).parent("tr"); //get the parent row
    
    var name = $product.children(".item-sku").data("name");  //format the title of this cart item
    var price = $product.children(".item-price").text();
    $(".cart-title").text(name); //update the name of the cart item
    $(".cart-amount .price").text($product.children(".item-price").text()); //update the price value for this item
    $(".cart-amount .price").data("price",$product.children(".item-price").data("price")); //set the data-price attribute to this price
    $(".cart-amount .total").text("("+ $product.children(".item-price").text() + " TOTAL)").data("price", price.replace(/[^0-9.]/g, "")); //update the total price
    $("#cart-sku").val($product.children(".item-sku").text()); //get the sku
    $("#cart-qty input").val(1); //set the default value for the quantity to 1
    
    //show the Add Product container
    $("#add-product").show(); //first show the transparent 
    //wait 200ms and then slide the add item form from the left
     setTimeout(function(){
     	$("#add-product .cart-product").css("left", "50%");          
     },200);
});
$("#product-add").click(function(){    
    $(".login, .shopping-cart").popover("hide"); //hide the login and shopping cart popover
    
    var title = $("#product-title").text();  //format the title of this cart item
    var price = $("#product-price").data("price");
    
    //make sure the quantity is greater than 0
    var qty = $("#product-qty").val();
    if(qty <= 0){
        $("#product-qty").css("border","1px solid red");
        return;
    }
    else{
        $("#product-qty").css("border","none");        
    }
    
    var sku = $(this).data("sku");
    showProgress(1000, 100);
    setTimeout(function(){
        addItem(sku, qty, price, title); //add the sku and quantity to the local storage
        updateQty();
        //Reset Values
        $("#successful-add").fadeIn(300).delay(800).fadeOut(500);
        $("#product-qty").val(1);
    }, 1500); //YOU DONT HAVE TO CREATE A TIMEOUT!!!!!
});
//when the quantity is changed
$("#cart-qty").on('change', 'input', function() {
     var total_amount =($(".cart-amount .price").data("price")*$(this).val()).formatMoney(2, '.', ','); 
     $(".cart-amount .total").text("($"+ total_amount + " TOTAL)");
});

//After the user decides on an amount for the item, then add it but in a fancy way
$("#add-item").click(function(){        
    //get the information about this item
    var sku = $("#cart-sku").val();
    var qty = $("#cart-qty input").val();
    var title = $(".cart-title").text();
    var price = $(".cart-amount .total").data("price");
    
    //make sure quantity is greater than 0
    if(qty <= 0){
        $("#cart-qty input").css("border","1px solid red");
        return;
    }
    else{
        $("#cart-qty input").css("border","none");        
    }
    
    $('#cart-object').children("span").text(qty); //get the quantity new amount
    /*
    var new_amount = parseInt($(".shopping-cart .amount").data("amount")) + parseInt(qty); //add previous amount plus this
    $(".shopping-cart .amount").data("amount",new_amount); 
    $(".shopping-cart .amount").text(new_amount); //set the new amount*/
    
    //This portion handles that animation of the cart. It is not necessary, but it adds animation and fancyness
    var cart_qty = document.getElementById("cart-qty"),
    elemRect = cart_qty.getBoundingClientRect(), //get the position of the quantiti input in the add product element
    shoppingCart = $(".shopping-cart:visible")[0],
    shoppingRect = shoppingCart.getBoundingClientRect(); //get the position of the cart icon in the header
    $('#cart-object span').animate({width:55, height: 55},100); //animate the size of the quantity circle
    //animate the position of this quantity circle to the position of the cart icon in the header
    $('#cart-object').css({
        top: elemRect.top+ "px",
        left: (elemRect.left + (cart_qty.offsetWidth/2)) + "px"
    }).show().delay(300).animate({
        top: shoppingRect.top,
        left: shoppingRect.left + (shoppingCart.offsetWidth/2)
    },300,function(){
        $("#add-product .cart-product").css("left", "-100%");
        $("#add-product").fadeOut();    
        $('#cart-object span').css({width:0, height: 0}); 
        addItem(sku, qty, price, title); //add the sku and quantity to the local storage
        updateQty();        
    }).fadeOut("fast");
    
});
//close the add cart form
$(".shopping-close").click(function(){
    $("#add-product .cart-product").css("left", "-100%");
    $("#add-product").fadeOut();    
    $('#cart-object span').css({width:0, height: 0});     
});

function setItems(){
    if (localStorage.getItem('cart') !== null) {
        var storedCart = JSON.parse(window.localStorage.getItem('cart'));
        cart_items = storedCart; //add the previously stored items to this array
    }
    updateQty();
    updatePopover();
}
function addItem(sku, qty, price, title){   
    var inStorage = false;
    //check if there is already an item stored locally
    if (localStorage.getItem('cart') !== null) {
        var storedCart = JSON.parse(window.localStorage.getItem('cart'));
        cart_items = storedCart; //add the previously stored items to this array
        
        //check if this sku is already stored
        for (var k in cart_items) {
            if (!cart_items.hasOwnProperty(k)) continue;
            //the sku was found in the storage
            if (cart_items[k].sku === sku) {
                var current_qty = cart_items[k].quantity;
                cart_items[k].quantity = parseInt(current_qty) + parseInt(qty); //just update the quantity
                inStorage = true;
            }
        }
    }
    //the item was not already in storage, so just add it
    if(!inStorage){
        cart_items.push({'sku':sku, 'quantity':qty, 'title':title, 'price':price});  //add this new item    
    }    
    //set the array to a json string
    window.localStorage.setItem('cart',JSON.stringify(cart_items)); //convert the array to a strink 
    updatePopover();
}
function updatePopover(){
    var item_row = '';
    var price = 0;
    var popover = $('.shopping-cart').data('popover'); //get the popover
    
    if(cart_items.length < 1){
        $('.shopping-cart').popover("hide");
        $('.shopping-cart').attr('data-content', "<h4>Your Cart Is Empty</h4>"); //get the template html of the popover        
    }
    else{    
        $("#cart-items").find(".product-row").remove(); //clear the shopping cart
        //update the shopping cart popover
        $.each(cart_items, function(key, value){
             item_row += '<div class="row product-row" data-sku="'+value.sku+'"><div class="col-lg-4"><img src="http://localhost/Orange-Aluminum/img/logo-icon.png" style="display:block;height:auto;width:auto;max-width:100%;max-height: 100px;margin:auto;"/></div><div class="col-lg-8" style="color:black;"><b>'+value.title+'</b><br><span>Price: $'+value.price+'</span><br><span>Qty: '+value.quantity+'</span><br><span href="" data-sku="'+value.sku+'" class="popover-link remove-product"><span class="glyphicon glyphicon-remove"> </span>Remove Item</span></div></div>';
            price += parseFloat(value.price) * parseInt(value.quantity); //keep adding the subtotal
        });    
        $("#cart-items").prepend(item_row); //prepend all the new items
        $("#cart-subtotal").text("Cart Subtotal: $"+price.toFixed(2)); //update the subtotal

        $('.shopping-cart').attr('data-content', $("#cart-popover").html()); //get the template html of the popover  
    }
}
function updateQty(){
    var totalQty = 0;
    //check if this sku is already stored
    for (var i in cart_items) {
        totalQty += parseInt(cart_items[i].quantity); //update the total quantity
    } 
    
    $(".shopping-cart .amount").data("amount",totalQty); 
    $(".shopping-cart .amount").text(totalQty); //set the new amount
}
//remove item
function removeItem(sku){
    var removeIndex = 0;
    //check if this sku is already stored
    for (var k in cart_items) {
        if (!cart_items.hasOwnProperty(k)) continue;
        //the sku was found in the storage
        if (cart_items[k].sku === sku) {
           removeIndex = k;
        }
    } 
    cart_items.splice(removeIndex, 1);    
    //set the array to a json string
    window.localStorage.setItem('cart',JSON.stringify(cart_items)); //convert the array to a strink   
    updateQty();
    updatePopover();
}
//remove item
function updateItem(sku, qty){
    for (var k in cart_items) {
        if (!cart_items.hasOwnProperty(k)) continue;
        //the sku was found in the storage
        if (cart_items[k].sku === sku) {
           cart_items[k].quantity = qty;
        }
    }  
    //set the array to a json string
    window.localStorage.setItem('cart',JSON.stringify(cart_items)); //convert the array to a strink   
    updateQty();
    updatePopover();
}
$(document).on('click', '.remove-product' ,function(e){
    var sku = $(this).data("sku");
    $(this).closest(".product-row").remove();
    removeItem(sku);
});

//show or hide blur 
setInterval(function(){
    if($('#cart-items').is(":visible")){      
        if($('#cart-items').height() > 200){
            $("#white-blur").show();
        }
        else{
            $("#white-blur").hide();
        }
    } 
}, 100);

setItems();