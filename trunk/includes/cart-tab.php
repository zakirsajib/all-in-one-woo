<h1 class="screen-reader-text">Cart Page</h1>
<h2>Cart Page</h2>
<div class="description"><p>This is where you edit the texts in Cart page.</p>
<p>(*) This changes both in cart and checkout pages.</p></div>
<hr>
<table class="form-table">
	<tbody>
		<tr valign="top">
			<th scope="row"><?php _e('Product', 'allinonewoo-group');?></th>
			<th scope="row"><?php _e('Price', 'allinonewoo-group');?></th>
			<th scope="row"><?php _e('Quantity', 'allinonewoo-group');?></th>
			<th scope="row"><?php _e('Total', 'allinonewoo-group');?></th>
		</tr>
		<tr valign="top">
		<td>
			<input type="text" name="allinonewoo-group[product-col]" value="<?php echo (!empty($options['product-col'])) ?  $options['product-col'] : 'Product'?>" class="regular-text"/>
			<p>Product column *</p>
		</td>
		<td>
			<input type="text" name="allinonewoo-group[price-col]" value="<?php echo (!empty($options['price-col'])) ?  $options['price-col'] : 'Price'?>" class="regular-text"/>
			<p>Price column (*)</p> 
		</td>
		<td>
			<input type="text" name="allinonewoo-group[qty-col]" value="<?php echo (!empty($options['qty-col'])) ?  $options['qty-col'] : 'Quantity'?>" class="regular-text"/>
			<p class="description">Quantity column</p>
		</td>
		<td>
			<input type="text" name="allinonewoo-group[total-col]" value="<?php echo (!empty($options['total-col'])) ?  $options['total-col'] : 'Total'?>" class="regular-text"/>
			<p>Total column (*)</p> 
		</td>
		</tr>
	</tbody>
</table>
<p class="description">This is where you edit the texts in Cart page.</p>
<table class="form-table">
	<tbody>
		<tr valign="top">
		<th scope="row"><?php _e('Coupon code', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[coupon-code-field]" value="<?php echo (!empty($options['coupon-code-field'])) ?  $options['coupon-code-field'] : 'Coupon code'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Apply coupon', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[apply-coupon-field]" value="<?php echo (!empty($options['apply-coupon-field'])) ?  $options['apply-coupon-field'] : 'Apply coupon'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Update cart', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[update-cart-field]" value="<?php echo (!empty($options['update-cart-field'])) ?  $options['update-cart-field'] : 'Update cart'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Cart totals', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[cart-totals-field]" value="<?php echo (!empty($options['cart-totals-field'])) ?  $options['cart-totals-field'] : 'Cart totals'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Subtotal', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[subtotal-field]" value="<?php echo (!empty($options['subtotal-field'])) ?  $options['subtotal-field'] : 'Subtotal'?>" class="regular-text"/>
			<p>(*)</p>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Shipping', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[shipping-field]" value="<?php echo (!empty($options['shipping-field'])) ?  $options['shipping-field'] : 'Shipping'?>" class="regular-text"/>
			<p>(*)</p>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Calculate shipping', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[calculate-shipping-field]" value="<?php echo (!empty($options['calculate-shipping-field'])) ?  $options['calculate-shipping-field'] : 'Calculate shipping'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Update totals', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[update-totals-field]" value="<?php echo (!empty($options['update-totals-field'])) ?  $options['update-totals-field'] : 'Update totals'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Proceed to checkout', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[proceed-to-checkout-field]" value="<?php echo (!empty($options['proceed-to-checkout-field'])) ?  $options['proceed-to-checkout-field'] : 'Proceed to checkout'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Return to shop', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[return-to-shop-field]" value="<?php echo (!empty($options['return-to-shop-field'])) ?  $options['return-to-shop-field'] : 'Return to shop'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Change Return to shop Custom URL', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[return-to-shop-field-url]" value="<?php echo (!empty($options['return-to-shop-field-url'])) ?  $options['return-to-shop-field-url'] : esc_url(get_permalink( wc_get_page_id( 'shop' ) )); ?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('View cart', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[view-cart-field]" value="<?php echo (!empty($options['view-cart-field'])) ?  $options['view-cart-field'] : 'View cart'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Your cart is currently empty.', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[your-cart-empty-field]" value="<?php echo (!empty($options['your-cart-empty-field'])) ?  $options['your-cart-empty-field'] : 'Your cart is currently empty'?>" class="regular-text"/>
		</td>
		</tr>
	</tbody>
</table>