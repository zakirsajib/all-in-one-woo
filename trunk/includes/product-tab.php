<h1 class="screen-reader-text">Product</h1>
<h2>Product</h2>
<div class="description"><p>This is where you customise product page.</p></div><hr>
<table class="form-table">
	<tbody>
	<tr valign="top">
	<th scope="row"><?php _e('Hide SKU', 'allinonewoo-group');?></th>
	<td>
		<?php 
			$options = get_option( 'allinonewoo-group' );
			if (array_key_exists("hide-sku",$options)):?>
			<input type="checkbox" name="allinonewoo-group[hide-sku]" value="1" <?php checked($options['hide-sku'], 1)?>/>
			<?php else:
			$options['hide-sku'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[hide-sku]" value="1" <?php checked($options['hide-sku'], 1)?>/><?php endif;?>
	</td>
	</tr>
	<tr valign="top">
	<th scope="row"><?php _e('Hide Categories', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("hide-categories",$options)):?>
		<input type="checkbox" name="allinonewoo-group[hide-categories]" value="1" <?php checked($options['hide-categories'], 1)?>/>
		<?php else: $options['hide-categories'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[hide-categories]" value="1" <?php checked($options['hide-categories'], 1)?>/><?php endif;?>
	</td>
	</tr>
	<tr valign="top">
	<th scope="row"><?php _e('Hide Related Products', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("hide-related-products",$options)):?>
		<input type="checkbox" name="allinonewoo-group[hide-related-products]" value="1" <?php checked($options['hide-related-products'], 1)?>/>
		<?php else: $options['hide-related-products'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[hide-related-products]" value="1" <?php checked($options['hide-related-products'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	<tr valign="top">
	<th scope="row"><?php _e('Hide Reviews tab', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("hide-reviews-tab",$options)):?>
		<input type="checkbox" name="allinonewoo-group[hide-reviews-tab]" value="1" <?php checked($options['hide-reviews-tab'], 1)?>/>
		<?php else: $options['hide-reviews-tab'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[hide-reviews-tab]" value="1" <?php checked($options['hide-reviews-tab'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	<tr valign="top">
	<th scope="row"><?php _e('Hide Description tab', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("hide-desc-tab",$options)):?>
		<input type="checkbox" name="allinonewoo-group[hide-desc-tab]" value="1" <?php checked($options['hide-desc-tab'], 1)?>/>
		<?php else: $options['hide-desc-tab'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[hide-desc-tab]" value="1" <?php checked($options['hide-desc-tab'], 1)?>/>
		<?php endif;?>
	</td>
	</tr>
	<tr valign="top">
	<th scope="row"><?php _e('Hide Additional Information tab', 'allinonewoo-group');?></th>
	<td>
		<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("hide-additional-tab",$options)):?>
		<input type="checkbox" name="allinonewoo-group[hide-additional-tab]" value="1" <?php checked($options['hide-additional-tab'], 1)?>/>
		<small>Please note that the “Additional Information” tab will only show if the product has weight, dimensions or attributes (not used for variation for variable products). </small>
		<?php else: $options['hide-additional-tab'] = false; ?>
		<input type="checkbox" name="allinonewoo-group[hide-additional-tab]" value="1" <?php checked($options['hide-additional-tab'], 1)?>/>
		<small>Please note that the “Additional Information” tab will only show if the product has weight, dimensions or attributes (not used for variation for variable products). </small>
		<?php endif;?>
	</td>
	</tr>
	</tbody>
</table>
<table class="form-table">
	<tbody>
		<tr valign="top">
		<th scope="row"><?php _e('Rename Description tab', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-desc-tab]" value="<?php echo (!empty($options['rename-desc-tab'])) ?  $options['rename-desc-tab'] : 'Description'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Rename Reviews tab', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-reviews-tab]" value="<?php echo (!empty($options['rename-reviews-tab'])) ?  $options['rename-reviews-tab'] : 'Reviews'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Rename Additional information tab', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-add-tab]" value="<?php echo (!empty($options['rename-add-tab'])) ?  $options['rename-add-tab'] : 'Additional information'?>" class="regular-text"/>
		</td>
		</tr>		
		<tr valign="top">
		<th scope="row"><?php _e('Rename Sale! badge text', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-sale]" value="<?php echo (!empty($options['rename-sale'])) ?  $options['rename-sale'] : 'Sale!'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Rename In stock text', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-in-stock]" value="<?php echo (!empty($options['rename-in-stock'])) ?  $options['rename-in-stock'] : 'In stock'?>" class="regular-text"/>
			<small>Some themes may show or not.</small>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Rename Out of stock text', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-out-stock]" value="<?php echo (!empty($options['rename-out-stock'])) ?  $options['rename-out-stock'] : 'Out of stock'?>" class="regular-text"/>
		</td>
		</tr>
	</tbody>
</table>

<div class="desc">
	<h2>Add a custom tab</h2>
	<p>Add a custom product data tab</p>
</div>
<hr>
<table class="form-table">
	<tbody>
		<tr valign="top">
		<th scope="row"><?php _e('Name of the tab', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[new-tab]" value="<?php echo (!empty($options['new-tab'])) ?  $options['new-tab'] : 'Name of the tab'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Field Name/Label', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[new-tab-name]" value="<?php echo (!empty($options['new-tab-name'])) ?  $options['new-tab-name'] : 'Untitled'?>" class="regular-text"/>
		</td>
		</tr>
		
		
		<tr valign="top">
		<th scope="row"><?php _e('Field Descriptions', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[new-tab-descr]" value="<?php echo (!empty($options['new-tab-descr'])) ?  $options['new-tab-descr'] : 'Field Descriptions'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Field Type', 'allinonewoo-group');?></th>
		<td>
			<input type="radio" name="allinonewoo-group[type]" onclick="javascript:yesnoCheck();" id="noCheck" value="textfield" <?php checked('textfield', $options['type']) ?>/><?php _e("Textfield", 'allinonewoo-group'); ?>
			<input type="radio" name="allinonewoo-group[type]" onclick="javascript:yesnoCheck();" id="noCheck" value="textarea" <?php checked('textarea', $options['type'] ) ?>/><?php _e("Textarea", 'allinonewoo-group'); ?>
			<input type="radio" name="allinonewoo-group[type]" onclick="javascript:yesnoCheck();" id="yesCheck" value="select" <?php checked('select', $options['type'] ) ?>/><?php _e("Select", 'allinonewoo-group'); ?>
			<input type="radio" name="allinonewoo-group[type]" onclick="javascript:yesnoCheck();" id="noCheck" value="check" <?php checked('check', $options['type'] ) ?>/><?php _e("Check", 'allinonewoo-group'); ?>
		</td>
		</tr>
	</tbody>
</table>
<table class="form-table" id="ifYes">
	<tbody>		
		<tr valign="top">
		<th scope="row"><?php _e('Option 1', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[select-val-one]" value="<?php echo (!empty($options['select-val-one'])) ?  $options['select-val-one'] : 'Select field value 1'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Option 2', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[select-val-two]" value="<?php echo (!empty($options['select-val-two'])) ?  $options['select-val-two'] : 'Select field value 2'?>" class="regular-text"/>
		</td>
		</tr>
	</tbody>
</table>

<script>
	function yesnoCheck() {
    	if (document.getElementById('yesCheck').checked) {
        	document.getElementById('ifYes').style.display = 'block';
    	} else document.getElementById('ifYes').style.display = 'none';
    }
</script>