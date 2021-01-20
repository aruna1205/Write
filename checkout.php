<?php
	ini_set('display_errors', 1);
	session_start();
	require_once('includes/common.php');
	

	$common = new common();

	$productDetails = $common->getProductDetails();
	//print_r($productDetails);
	$mrp = $productDetails['product_mrp'];
	$sp = $productDetails['product_sp'];
	$codCharges = $productDetails['product_cod_charges'];
	$igstPercent = $productDetails['product_igst_percentage'];
	$sgstPercent = $productDetails['product_sgst_percentage'];
	$cgstPercent = $productDetails['product_cgst_percentage'];
	$igstAmount = round($sp*$igstPercent/100,2);
	$sgstAmount = round($sp*$sgstPercent/100,2);
	$cgstAmount = round($sp*$cgstPercent/100,2);
	
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
	<link rel="stylesheet" href="css/Checkout.css" media="screen">
    <!--<script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>-->
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.3.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <!--<link rel="stylesheet" href="css/style.css"/>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/form-validation.js"></script>
    
    <script>
    	var mrp = <?php echo $mrp; ?>;
    	var sp = <?php echo $sp; ?>;
    	var codCharges = <?php echo $codCharges; ?>;
    	var igstPercent = <?php echo $igstPercent; ?>;
    	var sgstPercent = <?php echo $sgstPercent; ?>;
    	var cgstPercent = <?php echo $cgstPercent; ?>;
    	var igstAmount = <?php echo $igstAmount; ?>;
    	var sgstAmount = <?php echo $sgstAmount; ?>;
    	var cgstAmount = <?php echo $cgstAmount; ?>;
    </script>
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/LogoFinal.png"
}</script>
    <meta property="og:title" content="Checkout">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#167fe1">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    
    <?php echo $common->getFBTrackingScript();?>
    
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-246e"><div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
  
	<script>
		fbq('track', 'AddToCart', {});
	</script>
  
        <a href="https://nicepage.com" class="u-align-center u-image u-logo u-image-1" data-image-width="1218" data-image-height="278">
          <img src="images/LogoFinal.png" class="u-logo-image u-logo-image-1" data-image-width="277">
        </a>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-ec01">
      <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
        <div class="u-align-center u-expanded-width-xs u-form u-form-1">
          <form action="https://chethanshenoy.in/writeneat/checkout.php" method="POST" class="u-clearfix u-form-spacing-4 u-form-vertical u-inner-form" style="padding: 8px;" source="custom" name="registration">
            <div class="u-form-group u-form-name u-form-group-1">
              <label for="name-6797" class="u-custom-font u-font-montserrat u-label u-label-1">Full Name *</label>
              <input type="text" placeholder="Enter Your Full Name" id="name-6797" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-7" required="">
            </div>
            <div class="u-form-email u-form-group u-form-group-2">
              <label for="email-6797" class="u-custom-font u-font-montserrat u-label u-label-2">Email ID*</label>
              <input type="email" placeholder="Enter Your Email Id" id="email-6797" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-7" required="">
            </div>
            <div class="u-form-group u-form-phone u-form-group-3">
              <label for="phone-dbeb" class="u-custom-font u-font-montserrat u-label u-label-3">Mobile No*</label>
              <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter Your Mobile No" id="phone-dbeb" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-7" required="">
            </div>
            <div class="u-form-group u-form-message u-form-group-4">
              <label for="message-6797" class="u-custom-font u-font-montserrat u-label u-label-4">Address*</label>
              <textarea placeholder="Address" rows="2" cols="50" id="message-6797" name="address" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-7" required=""></textarea>
            </div>
            <div class="u-form-group u-form-group-5">
              <label for="text-c3ea" class="u-custom-font u-font-montserrat u-label u-label-5">City</label>
              <input type="text" placeholder="Enter Your City" id="text-c3ea" name="city" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-7" required="required">
            </div>
            <div class="u-form-group u-form-select u-form-group-6">
              <label for="select-9362" class="u-custom-font u-font-montserrat u-label u-label-6">Select State*</label>
              <div class="u-form-select-wrapper">
                <select id="select-9362" name="state" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-7" required="required">
                  <option value="">Select</option>
                  <option value="Andaman and Nicobar">Andaman and Nicobar</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Ladakh">Ladakh</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Puducherry">Puducherry</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-group-7">
              <label for="text-e959" class="u-custom-font u-font-montserrat u-label u-label-7">Pincode*</label>
              <input type="text" placeholder="Enter Pincode" id="text-e959" name="pincode" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-7" required="required">
            </div>
            <div class="u-form-group u-form-radiobutton u-form-group-8">
              <div class="u-form-radio-button-wrapper">
                <input type="radio" name="order_type" value="COD" required="required" checked="checked">
                <label class="u-label" for="radiobutton">COD - Rs. 100/- Shipping Charges</label>
                <br>
                <input type="radio" name="order_type" value="online" required="required">
                <label class="u-label" for="radiobutton">Pay Online</label>
                <br>
              </div>
            </div>
            
             <div class="u-border-2 u-border-grey-75 u-clearfix u-custom-html u-custom-html-1">
          <style></style>
          <p>Order Summary</p>
          <div id="orderamount"></div>
        </div>
        <input type="submit" value="Place Order Now" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-2 u-radius-6 u-btn-2">
        
            
            <!--
            <div class="u-align-center-xl u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-form-group u-form-submit u-form-group-9">
              <a href="#" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-btn-submit u-button-style u-custom-font u-font-montserrat u-none u-text-palette-1-base u-btn-1"></a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
            <div class="u-form-send-error u-form-send-message">Please enter all details before proceeding.</div>
            <input type="hidden" value="" name="recaptchaResponse">
            -->
            
            
          </form>
        </div>
       
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-1-light-3 u-footer" id="sec-095c"><div class="u-clearfix u-sheet u-sheet-1">
        <img src="images/LogoFinal.png" alt="" class="u-image u-image-default u-image-1" data-image-width="1218" data-image-height="278">
        <p class="u-align-center u-small-text u-text u-text-variant u-text-1">WriteNeat is a brand of Digipuush. We manufacture handwriting kits. © 2021 WriteNeat</p>
        <p class="u-align-center u-text u-text-2">writetous@write-neat.com</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">

    </section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base u-spacing-15" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  </body>
</html>
