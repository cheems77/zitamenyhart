<?php
 //echo "<pre>".print_r($GLOBALS['wpsc_cart']->cart_items[0], true)."</pre>";
?>

<?php if(wpsc_cart_item_count() > 0): ?>
  <p>
  <?php if(count($cart_messages) > 0) { ?>
	<?php foreach((array)$cart_messages as $cart_message) { ?>
	  <span><?php echo $cart_message; ?></span><br /><br />
	<?php } ?>
  </p>
<?php } ?>
  <span class='items'>
		<span class='numberitems'>
			<?php echo __('Number of items', 'wpsc'); ?>: <?php echo wpsc_cart_item_count(); ?>
		</span>
			
	</span>
	<p>		
	<span class='total'>
		<span class='totalhead'>
			<?php echo __('Total', 'wpsc'); ?>:
			&nbsp;<?php echo wpsc_cart_total_widget(); ?>
			<?php if(wpsc_cart_show_plus_postage()) : ?>
				<span class='pluspostagetax'> + <?php echo __('Postage &amp; Tax ', 'wpsc'); ?></span>
			<?php endif; ?>
	  </span>
	</span>
	</p>

	<div class='gocheckout'><a target='_parent' href='<?php echo get_option('shopping_cart_url'); ?>'><?php echo __('Go to Checkout', 'wpsc'); ?></a></div>
<?php else: ?>
	<p class="empty"><?php echo __('Your shopping cart is empty', 'wpsc'); ?></p>
<?php endif; ?>

<?php
wpsc_google_checkout();


?>
