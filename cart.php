<?php include("main.php");
?>
        
        	
		   <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
     <input type="hidden" name="business" value="kansal.vandana9@gmail.com" />
     <input type="hidden" name="cmd" value="_xclick" />
      <!-- Instant Payment Notification & Return Page Details -->
      <input type="hidden" name="notify_url" value="http://www.demo.9gweb.com/viaresume/paymentProcess.php" />
      <input type="hidden" name="cancel_return" value="http://localhost/wordpress/" />
      <input type="hidden" name="return" value="http://www.demo.9gweb.com/viaresume/payment-complete?post=emp" />
      <input type="hidden" name="rm" value="2" />
      <input type="hidden" name="item_number" value="logo">
      <!-- Configures All Of The Checkout Fields -->
      <input type="hidden" name="no_shipping" value="1" />
      <input type="hidden" name="no_note" value="1" />
      <input type="hidden" name="currency_code" value="USD" />
      <!-- Customizes Prices, Payments & Billing Cycle -->
      <input type="hidden" name="amount" value="100" />
      <!--<input type="submit" value="Pay Now" />-->
      <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" style="width:auto; height:auto; border:0;" alt="PayPal®" />
    </form>
	<?php include("footr2.php");
?>
