<h1 class="screen-reader-text">Change Colors</h1>
<h2>Change Colors Labels/button</h2>
<div class="description"><p>This is where you edit colors of woocommerce buttons, labels.</p></div><hr>
<table class="form-table">
	<tbody>
	<tr valign="top">
	<th scope="row"><?php _e('Add to cart', 'allinonewoo-group');?></th>
	<td><p class="description"><?php _e("Background Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[add-to-cart-bgcolor]" value="<?php echo (!empty($options['add-to-cart-bgcolor'])) ?  $options['add-to-cart-bgcolor'] : '#eeeeee'?>" class="add-to-cart-bgcolor" data-default-color="#eeeeee"/>
<p class="description"><?php _e("Font Color", 'allinonewoo'); ?></p>	
<input type="text" name="allinonewoo-group[add-to-cart-color]" value="<?php echo (!empty($options['add-to-cart-color'])) ?  $options['add-to-cart-color'] : '#333333'?>" class="add-to-cart-color" data-default-color="#333333"/>
<p class="description"><?php _e("Border Color", 'allinonewoo'); ?></p>	
<input type="text" name="allinonewoo-group[add-to-cart-border]" value="<?php echo (!empty($options['add-to-cart-border'])) ?  $options['add-to-cart-border'] : '#eeeeee'?>" class="add-to-cart-border" data-default-color="#eeeeee"/>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Buy product', 'allinonewoo-group');?></th>
	<td><p class="description"><?php _e("Background Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[buy-product-bgcolor]" value="<?php echo (!empty($options['buy-product-bgcolor'])) ?  $options['buy-product-bgcolor'] : '#333333'?>" class="buy-product-bgcolor" data-default-color="#333333"/>
<p class="description"><?php _e("Font Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[buy-product-color]" value="<?php echo (!empty($options['buy-product-color'])) ?  $options['buy-product-color'] : '#ffffff'?>" class="buy-product-color" data-default-color="#ffffff"/>
<p class="description"><?php _e("Border Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[buy-product-border]" value="<?php echo (!empty($options['buy-product-border'])) ?  $options['buy-product-border'] : '#333333'?>" class="buy-product-border" data-default-color="#333333"/>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('View products', 'allinonewoo-group');?></th>
	<td>
<p class="description"><?php _e("Background Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[view-product-bgcolor]" value="<?php echo (!empty($options['view-product-bgcolor'])) ?  $options['view-product-bgcolor'] : '#eeeeee'?>" class="view-product-bgcolor" data-default-color="#eeeeee"/>
<p class="description"><?php _e("Font Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[view-product-color]" value="<?php echo (!empty($options['view-product-color'])) ?  $options['view-product-color'] : '#333333'?>" class="view-product-color" data-default-color="#333333"/>
<p class="description"><?php _e("Border Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[view-product-border]" value="<?php echo (!empty($options['view-product-border'])) ?  $options['view-product-border'] : '#eeeeee'?>" class="view-product-border" data-default-color="#eeeeee"/>
	</td>
	</tr>
	
	<tr valign="top">
	<th scope="row"><?php _e('Select options', 'allinonewoo-group');?></th>
	<td>
<p class="description"><?php _e("Background Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[select-options-bgcolor]" value="<?php echo (!empty($options['select-options-bgcolor'])) ?  $options['select-options-bgcolor'] : '#eeeeee'?>" class="select-options-bgcolor" data-default-color="#eeeeee"/>
<p class="description"><?php _e("Font Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[select-options-color]" value="<?php echo (!empty($options['select-options-color'])) ?  $options['select-options-color'] : '#333333'?>" class="select-options-color" data-default-color="#333333"/>
<p class="description"><?php _e("Border Color", 'allinonewoo'); ?></p>
<input type="text" name="allinonewoo-group[select-options-border]" value="<?php echo (!empty($options['select-options-border'])) ?  $options['select-options-border'] : '#eeeeee'?>" class="select-options-border" data-default-color="#eeeeee"/>
	</td>
	</tr>
	</tbody>
</table>