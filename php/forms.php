<?php
if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
    $action = $_POST["action"];
    switch($action) { //Switch case for value of action
       case "newsletter": newsletter();break;
       case "contact": contact();break; 
       case "checkout": checkout();break;
    }
  }
}

//Function to check if the request is an AJAX request
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function newsletter(){
    $response = array(
        "status" => "bad",
        "response" => "Something Went Wrong",
        "error" => "Error Code:"
    );
    $email = trim($_POST["newsletter_email"]); //YOU SHOULD DO OTHER CHECKS AND CLEANUPS OF THIS POST VARIABLE, TO PREVENT ATTACKS
    
    //get the newsletter email
    if ($email == ""){
        $response["error"] = "Blank Email Address";
    }
    else{
        //CHECK IF EMAIL IS ALREADY IN DATABASE
        //if($email in $database){
        //  $response["error"] = "This Email Address is Already Taken";
        //}
        //else{
        //  INSERT EMAIL TO DATABASE
        //}
        $response["status"] = "good";
        $response["response"] = "Thank You for Subscribing!";
    }
    echo json_encode($response);
    exit();
}

function contact(){
    $response = array(
        "status" => "bad",
        "response" => "Something Went Wrong",
        "error" => "Error Code:"
    );
    //YOU SHOULD DO OTHER CHECKS AND CLEANUPS OF THIS POST VARIABLE, TO PREVENT ATTACKS
    $email = trim($_POST["contact_email"]); 
    $inquiry = trim($_POST["inquiry"]); 
    $first_name = trim($_POST["first_name"]); 
    $last_name = trim($_POST["last_name"]); 
    $business_name = trim($_POST["business_name"]); 
    $tel = trim($_POST["telephone"]); 
    $comments = trim($_POST["comments"]); 
    
    //get the newsletter email
    if ($email == ""){
        $response["error"] = "Blank Email Address";
    }
    else if ($inquiry == ""){
        $response["error"] = "Please Select an Inquiry";
    }
    else{
        //INSERT ALL VALUES TO A DATABASE OF USE PHP EMAIL FUNCTIONS
        $response["status"] = "good"; 
        $response["response"] = "Thank You for Contacting Us!";
    }
    echo json_encode($response);
    exit();
}
function checkout(){
    $response = array(
        "status" => "bad",
        "response" => "Something Went Wrong",
        "error" => "Error Code:"
    );
    
     //YOU SHOULD DO OTHER CHECKS AND CLEANUPS OF THESE POST VARIABLES TO PREVENT ATTACKS
    
    //billing variables 
    $billing_firstName = trim($_POST["billing_firstName"]);
    $billing_lastName = trim($_POST["billing_lastName"]);
    $billing_email = trim($_POST["billing_email"]);
    $billing_telephone = trim($_POST["billing_telephone"]);
    $billing_address_one = trim($_POST["billing_address_one"]);
    $billing_address_two = trim($_POST["billing_address_two"]);
    $billing_zip = trim($_POST["billing_zip"]);
    $billing_state = trim($_POST["billing_state"]);
    $billing_company = trim($_POST["billing_company"]);
    $billing_fax = trim($_POST["billing_fax"]);
    $password = "";
    //create account
    if($_POST["createAccount"] === true){
        //shipping variables 
        $password = trim($_POST["password"]);
    }
    
    if($_POST["sameAsBilling"] === true){
        //shipping variables 
        $shipping_firstName = trim($_POST["shipping_firstName"]);
        $shipping_lastName = trim($_POST["shipping_lastName"]);
        $shipping_telephone = trim($_POST["shipping_telephone"]);
        $shipping_address_one = trim($_POST["shipping_address_one"]);
        $shipping_address_two = trim($_POST["shipping_address_two"]);
        $shipping_zip = trim($_POST["shipping_zip"]);
        $shipping_state = trim($_POST["shipping_state"]);
        $shipping_company = trim($_POST["shipping_company"]);
        $shipping_fax = trim($_POST["shipping_fax"]);
    }
    else{
        //shipping variables 
        $shipping_firstName = $billing_firstName;
        $shipping_lastName = $billing_lastName;
        $shipping_telephone = $billing_telephone;
        $shipping_address_one = $billing_address_one;
        $shipping_address_two =  $billing_address_two;
        $shipping_zip = $billing_zip;
        $shipping_state = $billing_state;
        $shipping_company = $billing_company;
        $shipping_fax = $billing_fax;    
    }
    
    $payment = trim($_POST["payment"]);
    $card_number = "";
    $expiration_month = "";
    $expiration_year = "";
    $csv = "";
    
    if($payment == "credit"){
        //credit card information
        $card_number = trim($_POST["card_number"]);
        $expiration_month = trim($_POST["expiration_month"]);
        $expiration_year = trim($_POST["expiration_year"]);
        $csv = trim($_POST["csv"]);
    }
    
    //totals
    $subtotal = trim($_POST["subtotal"]);    
    $shipping = trim($_POST["shipping"]);
    $total = trim($_POST["total"]);
    
    //other
    $newsletter = trim($_POST["newsletter"]);
    $comments = trim($_POST["comments"]);
    $coupon = trim($_POST["coupon"]);
    
    //parse the products as a JSON object
    $products = json_decode(trim($_POST["products"]));
    /*
        foreach($products as $product){
            $sku = $product["sku"];
            $total = intval($product["quantity"])*floatval($product["price"]);
        }
    */
    
    $response["status"] = "good";
    $response["response"] = "Your Order Was Processed!";
    echo json_encode($response);
    exit();
}
?>