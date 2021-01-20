<?php
	ini_set('display_errors', 1);
	session_start();

	require_once('includes/common.php');
	require('includes/dbconfig.php');
	$common = new common();
	$orderDetails = $common->getOrderDetails();
	
	$count = $common->updateOrderStatus($orderStatus="SUCCESS");
	
	
	$common->sendOrderPlacementMail($orderDetails);

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Thank you for placing order with us.">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>success</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
	<link rel="stylesheet" href="css/success.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.3.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/LogoFinal.png"
}</script>
    <meta property="og:title" content="success">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#167fe1">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    
    <?php echo $common->getFBTrackingScript();?>
    
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-246e"><div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
  
  	<script>
		fbq('track', 'Purchase', {currency: "INR", value: <?php echo $orderDetails['order_amount']; ?>});
	</script>
        <a href="<?php echo $baseUrl; ?>" class="u-align-center u-image u-logo u-image-1" data-image-width="1218" data-image-height="278">
          <img src="images/LogoFinal.png" class="u-logo-image u-logo-image-1" data-image-width="277">
        </a>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-be2b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-default u-text-1">Thank you for placing order with us.&nbsp;</h1>
        <p class="u-align-center u-text u-text-default u-text-2">Invoice has been sent by mail. Please check your junk/spam folder in case you have not received it.&nbsp;</p>
        <table>
			<tr><th>Order Summary</th></tr>
			<tr>
				<td>Item Subtotal:</td> <td><?php echo $orderDetails['order_amount']; ?></td>
			</tr>
			<tr>
				<td>Shipping & Handling:</td> <td>Free</td>
			</tr>
			<tr>
				<td>Order Total:</td> <td><?php echo $orderDetails['order_amount']; ?></td>
			</tr>
		</table>
      </div>
      
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-1-light-3 u-footer" id="sec-095c"><div class="u-clearfix u-sheet u-sheet-1">
        <img src="images/LogoFinal.png" alt="" class="u-image u-image-default u-image-1" data-image-width="1218" data-image-height="278">
        <p class="u-align-center u-small-text u-text u-text-variant u-text-1">WriteNeat is a brand of Digipuush. We manufacture handwriting kits. © 2021 WriteNeat</p>
        <p class="u-align-center u-text u-text-2">writetous@write-neat.com</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
    </section>
  </body>
</html>
