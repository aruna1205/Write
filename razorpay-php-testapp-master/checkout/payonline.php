<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Payonline</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
	<link rel="stylesheet" href="../css/Payonline.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.3.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "../../images/LogoFinal.png"
}</script>
    <meta property="og:title" content="Payonline">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#167fe1">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    
    <?php echo $common->getFBTrackingScript();?>
    
  </head>
  <body class="u-body">
  
  	<script>
		fbq('track', 'InitiateCheckout', {currency: "INR", value: <?php echo $order_amount; ?>});
	</script>
  

  
  
  
  <header class="u-clearfix u-header u-header" id="sec-246e"><div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <a href="https://nicepage.com" class="u-align-center u-image u-logo u-image-1" data-image-width="1218" data-image-height="278">
          <img src="../images/LogoFinal.png" class="u-logo-image u-logo-image-1" data-image-width="277">
        </a>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-1db7">
      <div class="u-custom-color-3 u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
      <p class="u-align-center u-text u-text-default u-text-1">Click below and proceed to buy</p>
      <div class="u-align-center u-clearfix u-custom-html u-custom-html-1">
      
      <?php /*
		<form action="verify.php" method="POST">
			<script
			src="https://checkout.razorpay.com/v1/checkout.js"
			data-key="<?php echo $data['key']?>"
			data-amount="<?php echo $data['amount']?>"
			data-currency="INR"
			data-name="<?php echo $data['name']?>"
			data-image="<?php echo $data['image']?>"
			data-description="<?php echo $data['description']?>"
			data-prefill.name="<?php echo $data['prefill']['name']?>"
			data-prefill.email="<?php echo $data['prefill']['email']?>"
			data-prefill.contact="<?php echo $data['prefill']['contact']?>"
			data-notes.shopping_order_id="<?php echo $data['notes']['merchant_order_id']?>"
			data-order_id="<?php echo $data['order_id']?>"
			<?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
			<?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
			>
			</script>
			<!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
			<input type="hidden" name="shopping_order_id" value="<?php echo $data['notes']['merchant_order_id']?>">
		</form>
	
	
        <!--<form>
          <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_FqpkgprUAiPi7F" async="async"></script>
        </form>-->
        */ ?>
        
        
		<button id="rzp-button1" style="width:172px;height:40px;background-image: url('../images/razorpay_button.png');"></button>
		<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
		<form name='razorpayform' action="verify.php" method="POST">
			<input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
			<input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
		</form>
		<script>
			// Checkout details as a json
			var options = <?php echo $json?>;

			/**
			 * The entire list of Checkout fields is available at
			 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
			 */
			options.handler = function (response){
				document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
				document.getElementById('razorpay_signature').value = response.razorpay_signature;
				document.razorpayform.submit();
			};

			// Boolean whether to show image inside a white frame. (default: true)
			options.theme.image_padding = false;

			options.modal = {
				ondismiss: function() {
					console.log("This code runs when the popup is closed");
				},
				// Boolean indicating whether pressing escape key 
				// should close the checkout form. (default: true)
				escape: true,
				// Boolean indicating whether clicking translucent blank
				// space outside checkout form should close the form. (default: false)
				backdropclose: false
			};

			var rzp = new Razorpay(options);

			document.getElementById('rzp-button1').onclick = function(e){
				rzp.open();
				e.preventDefault();
			}
		</script>
        
        
        
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-1-light-3 u-footer" id="sec-095c"><div class="u-clearfix u-sheet u-sheet-1">
        <img src="../images/LogoFinal.png" alt="" class="u-image u-image-default u-image-1" data-image-width="1218" data-image-height="278">
        <p class="u-align-center u-small-text u-text u-text-variant u-text-1">WriteNeat is a brand of Digipuush. We manufacture handwriting kits. © 2021 WriteNeat</p>
        <p class="u-align-center u-text u-text-2">writetous@write-neat.com</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
    </section>
  </body>
</html>
