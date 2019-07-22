<h1 class="screen-reader-text">Rename Labels/button</h1>
<h2 class="title">Change Text for:</h2>
<div class="description"><p>This is where you edit the texts of woocommerce buttons, labels.</p></div><hr>
<table class="form-table">
	<tbody>
		<tr valign="top">
		<th scope="row"><?php _e('Add to cart', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[add-to-cart]" value="<?php echo (!empty($options['add-to-cart'])) ?  $options['add-to-cart'] : 'Add to cart'?>" class="regular-text"/>
			<p class="description">Product type: simple</p>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Buy product', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[buy-product]" value="<?php echo (!empty($options['buy-product'])) ?  $options['buy-product'] : 'Buy product'?>" class="regular-text"/>
			<p class="description">Product type: external or affiliate</p>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('View products', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[view-products]" value="<?php echo (!empty($options['view-products'])) ?  $options['view-products'] : 'View products'?>" class="regular-text"/>
			<p class="description">Product type: grouped</p>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Select options', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[select-options]" value="<?php echo (!empty($options['select-options'])) ?  $options['select-options'] : 'Select options'?>" class="regular-text"/>
			<p class="description">Product type: variable</p>
		</td>
		</tr>
	</tbody>
</table>