var base_url = $("#base_url").val();

//newsletter input
$("#newsletter-form").submit(function(e){
    var url = base_url+"php/forms.php";
    //the email input is empty
    if(!$("#newsletter-input").val()){
        $("#newsletter-input").css("border","2px solid #EE4433");
        return false;
    }
    else{
        $("#newsletter-input").css("border","1px solid #ccc");    
    }
    //php will look for this variable to see what function to execute
    var data = {
      "action": "newsletter"
    };
    data = $(this).serialize() + "&" + $.param(data); //get all values ready to send
    
    //make the ajax call
    $.ajax({
      type: "POST",
      dataType: "json",
      url: url, //Relative or absolute path to response.php file
      data: data,
      beforeSend: function(){
            $("#processing").show();
            $("#processing").find(".progress-bar").css({width: "0"}).animate({width: "30%"}, 300);    //progress bar    
      },
      success: function(data) {    
          //set a green border to indicate completeness
          $("#processing").find(".progress-bar").animate({width: "100%"}, 500, function(){  //progress bar
              $("#processing").delay(300).fadeOut("fast");             
          }); 
          $("#newsletter-label").text(data["response"]);    
          //the form was processed successfully
          if(data["status"] == "good"){              
             $("#newsletter-input").css("border","2px solid #009900");
            //wait 3 seconds to set everything back to defaults
            setTimeout(function(){
                $("#newsletter-input").val("");
                $("#newsletter-input").css("border","1px solid #ccc");        
            }, 3000);
          }
      }
    });
    return false;
});

//contact form
$("#contact-form").submit(function(e){
    var url = base_url+"php/forms.php";
    //php will look for this variable to see what function to execute
    var data = {
      "action": "contact"
    };
    data = $(this).serialize() + "&" + $.param(data); //get all values ready to send
    //make the ajax call
    $.ajax({
      type: "POST",
      dataType: "json",
      url: url, //Relative or absolute path to response.php file
      data: data,
      beforeSend: function(){
            $("#processing").show();
            $("#processing").find(".progress-bar").css({width: "0"}).animate({width: "30%"}, 300);    //progress bar            
      },
      success: function(data) {
          //progress bar   
          $("#processing").find(".progress-bar").animate({width: "100%"}, 500, function(){
              $("#contact-feedback").addClass(data["status"]).text(data["response"]);       
              $("#processing").delay(300).fadeOut("fast");
          });        
      },
      error: function(xhr, ajaxOptions, thrownError){
            //alert(xhr.responseText);
      }
    });
    return false;
});
$("#card_number").keyup(function(e){
    var num = $(this).val().trim();
    switch(parseInt(num.charAt(0))){
        //American Express
        case 3: $("#card-type").html('<span class="icon-amex"></span>'); 
            break;
        //Visa
        case 4: $("#card-type").html('<span class="icon-visa"></span>'); 
            break;
        //MasterCard
        case 5: $("#card-type").html('<span class="icon-mastercard"></span>'); 
            break;
        //Discover
        case 6: $("#card-type").html('<span class="icon-discover"></span>'); 
            break;
        //secure 
        default: $("#card-type").html('<span class="icon-secure"></span>'); 
            break;
    }
});

$('input[name="payment"]:radio').change(function(){
    if($(this).val() == "credit"){
        $("#credit-container").collapse("show");
    }
    else{
        $("#credit-container").collapse("hide");
    }
});          


//checkout
$feedback = $("#feedback_txt");
var billingValid = false,
    shippingValid = false,
    creditValid = false;
$("#billingAddress, #shippingAddress, #creditForm").submit(function(e){    
    if($(this).attr("id") == "billingAddress"){
        billingValid = true;
    }
    else if($(this).attr("id") == "shippingAddress"){
        shippingValid = true;
    }
    else if($(this).attr("id") == "creditForm"){
        creditValid = true;
    }
    
    e.preventDefault();
    return false;
});

$modal = $("#checkout-modal");
$("#checkout-btn").click(function(e){    
    $("#billingAddress").find('input[type="submit"]').trigger("click");
    var billingForm = $("#billingAddress").serialize();
    
    if(!billingValid){
        return;
    }
    //make sure the passowords match
    var password = "";
    var createAccount = false;
    if($("#createRadio").is(":checked")){
        if(!$("#password").val()){
            $("#password_feedback").removeClass().addClass("bad").text("Please Enter Password");
            return;
        }
        else if($("#password").val() != $("#confirm").val()){
            $("#password_feedback").removeClass().addClass("bad").text("Password Don't Match");
            return;
        }
        else{
            password = $("#password").val();
            $("#password_feedback").removeClass().text("");        
            createAccount = true;
        }
    }
    
    var sameAsBilling = true;
    var shippingForm = billingForm;
    //see if the shipping is different from billing
    if($("#shippingRadio").is(":checked")){
        sameAsBilling = false;
        $("#shippingAddress").find('input[type="submit"]').trigger("click")
        shippingForm = $("#shippingAddress").serialize();        
        
        if(!shippingValid){
            return;
        }        
    }
    
    var payment = "check";
    var credit_info = "";
    if($("#credit").is(":checked")){
        payment = "credit";
        $("#creditSubmit").trigger("click");       
    }
    else{
        creditValid = true;
    }
    credit_info = $("#creditForm").serialize(); 
    
    if(!creditValid){
        return;
    }    
    
    var coupon = $("#coupon").val(); //get the coupon code
    var comments = $("#comments").val(); //get comments
    var subtotal = $('#subtotal').data("value");
    var shipping = $('#shipping').data("value");
    var total = $('#grand-total').data("value");
    
    //is the newsletter checkbox clicked?
    var newsletter = "no";
    if($("#newsletter").is(":checked")){
       newsletter = "yes";
    }
    
    if(!$("#terms").is(":checked")){
       alert("Please Agree to Our Terms");
        return;
    }
    
    var products = localStorage.getItem('cart');
    
    //everything is 
    var url = base_url+"php/forms.php";
    //php will look for this variable to see what function to execute
    var data = {
      "action": "checkout"
    };
    data = billingForm + "" + shippingForm + "" + credit_info + "&payment=" + payment + "&sameAsBilling=" + sameAsBilling + "&createAccount=" + createAccount + "&password=" + password + "&coupon=" + coupon + "&newsletter=" + newsletter + "&comments=" + comments + "&total=" + total + "&subtotal=" + subtotal + "&shipping=" + shipping  + "&" + $.param(data) + "&products=" + products; //get all values ready to send
    //make the ajax call
    $.ajax({
      type: "POST",
      dataType: "json",
      url: url, //Relative or absolute path to response.php file
      data: data,
      beforeSend: function(){
            $("#processing").show();
            $("#processing").find(".progress-bar").css({width: "0"}).animate({width: "30%"}, 300);    //progress bar    
      },
      success: function(data) {      
          //set a green border to indicate completeness
          $("#processing").find(".progress-bar").animate({width: "100%"}, 500, function(){  //progress bar
              $("#processing").delay(300).fadeOut("fast");             
          });   
        
          $modal.find("p").text(data["response"]);  
          //the form was processed 
          if(data["status"] == "good"){     
            $feedback.removeClass().addClass("good").text(data["response"]);  
            $modal.find("h3").text("Success!");                
            $modal.find(".icon").removeClass("success error").addClass("success");  
            $modal.find(".icon").html('<span class="glyphicon glyphicon-ok-circle"></span>');  
          }
          else{ 
            $feedback.removeClass().addClass("bad").text(data["response"]);      
            $modal.find("h3").text("Error");  
            $modal.find(".icon").removeClass("success error").addClass("error");  
            $modal.find(".icon").html('<span class="glyphicon glyphicon-remove-circle"></span>');  
          }    
          $("html, body").animate({ scrollTop: 0 }, "fast"); //scroll to top
          $modal.fadeIn("fast");
      },
      error: function(xhr, ajaxOptions, thrownError){
            console.log(xhr.responseText);
      }
    });
});
$(".close-checkout").click(function(){
    //empty the cart and redirect to the home page
    localStorage.removeItem('cart');
    location.href = base_url;
});