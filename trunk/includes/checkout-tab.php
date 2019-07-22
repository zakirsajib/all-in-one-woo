<h1 class="screen-reader-text">Checkout page customisation</h1>
<h2>Checkout page customisation</h2>
<div class="desc"><p>This is where you can rename labels/placeholders in Checkout page.</p></div>
<hr>
<table class="form-table">
	<tbody>
		<tr valign="top">
		<th scope="row"><?php _e('Billing details', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-billing]" value="<?php echo (!empty($options['rename-billing'])) ?  $options['rename-billing'] : 'Billing details'?>" class="regular-text"/>
		</td>
		</tr>		
		<tr valign="top">
		<th scope="row"><?php _e('Ship to a different address', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-shipping]" value="<?php echo (!empty($options['rename-shipping'])) ?  $options['rename-shipping'] : 'Ship to a different address'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Your order', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-your-order]" value="<?php echo (!empty($options['rename-your-order'])) ?  $options['rename-your-order'] : 'Your order'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Place order', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-place-order]" value="<?php echo (!empty($options['rename-place-order'])) ?  $options['rename-place-order'] : 'Place order'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('First name', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-fname]" value="<?php echo (!empty($options['rename-fname'])) ?  $options['rename-fname'] : 'First name'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Last name', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-lname]" value="<?php echo (!empty($options['rename-lname'])) ?  $options['rename-lname'] : 'Last name'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Company name', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-company]" value="<?php echo (!empty($options['rename-company'])) ?  $options['rename-company'] : 'Company'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Country', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-country]" value="<?php echo (!empty($options['rename-country'])) ?  $options['rename-country'] : 'Country'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Street address', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-street]" value="<?php echo (!empty($options['rename-street'])) ?  $options['rename-street'] : 'Street address'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Street address placeholder 1', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-address1]" value="<?php echo (!empty($options['rename-address1'])) ?  $options['rename-address1'] : 'Address Line 1'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Street address placeholder 2', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-address2]" value="<?php echo (!empty($options['rename-address2'])) ?  $options['rename-address2'] : 'Address Line 2'?>" class="regular-text"/>
		</td>
		</tr>
		
		
		<tr valign="top">
		<th scope="row"><?php _e('Town / City', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-city]" value="<?php echo (!empty($options['rename-city'])) ?  $options['rename-city'] : 'Town / City'?>" class="regular-text"/>
		</td>
		</tr>
<!--
		<tr valign="top">
		<th scope="row"><?php _e('District', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-state]" value="<?php echo (!empty($options['rename-state'])) ?  $options['rename-state'] : 'District'?>" class="regular-text"/>
		</td>
		</tr>
-->
		
		<tr valign="top">
		<th scope="row"><?php _e('Postcode / ZIP', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-postcode]" value="<?php echo (!empty($options['rename-postcode'])) ?  $options['rename-postcode'] : 'Postcode / ZIP (optional)'?>" class="regular-text"/>
		</td>
		</tr>
		
		
		<tr valign="top">
		<th scope="row"><?php _e('Phone', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-phone]" value="<?php echo (!empty($options['rename-phone'])) ?  $options['rename-phone'] : 'Phone'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Email address', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-email]" value="<?php echo (!empty($options['rename-email'])) ?  $options['rename-email'] : 'Email address'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Order comments', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[rename-order-comments]" value="<?php echo (!empty($options['rename-order-comments'])) ?  $options['rename-order-comments'] : 'Order comments'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Order comments placeholder', 'allinonewoo-group');?></th>
		<td>
			<textarea rows="5" cols="30" name="allinonewoo-group[rename-order-comments-placeholder]" class="regular-text"><?php echo (!empty($options['rename-order-comments-placeholder'])) ?  $options['rename-order-comments-placeholder'] : 'Notes about your order, e.g. special notes for delivery.'?></textarea>
		</td>
		</tr>
	</tbody>
</table>

<!--
<div class="desc">
	<h2>Add new custom fields</h2>
	<p>This is where you can add new custom <b>shipping and billing</b> fields in Checkout page.</p></div>
<hr>
<table class="form-table">
	<tbody>
		<tr valign="top">
		<th scope="row"><?php _e('Name of new field in shipping section', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[name-one-shipping]" value="<?php echo (!empty($options['name-one-shipping'])) ?  $options['name-one-shipping'] : 'Name of new field in shipping'?>" class="regular-text"/>
		</td>
		</tr>
		<tr valign="top">
		<th scope="row"><?php _e('Placeholder of new field in shipping section', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[placeholder-one-shipping]" value="<?php echo (!empty($options['placeholder-one-shipping'])) ?  $options['placeholder-one-shipping'] : 'Placeholder of new field in shipping'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Required ?', 'allinonewoo-group');?></th>
		<td>
			<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("req-one",$options)):?>
			<input type="checkbox" name="allinonewoo-group[req-one]" value="1" <?php checked($options['req-one'], 1)?>/>
		<?php else: $options['req-one'] = false; ?>
			<input type="checkbox" name="allinonewoo-group[req-one]" value="1" <?php checked($options['req-one'], 1)?>/>
		<?php endif;?>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Name of new field in billing section', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[name-one-billing]" value="<?php echo (!empty($options['name-one-billing'])) ?  $options['name-one-billing'] : 'Name of new field in billing'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Placeholder of new field in billing section', 'allinonewoo-group');?></th>
		<td>
			<input type="text" name="allinonewoo-group[placeholder-one-billing]" value="<?php echo (!empty($options['placeholder-one-billing'])) ?  $options['placeholder-one-billing'] : 'Placeholder of new field in billing'?>" class="regular-text"/>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Required ?', 'allinonewoo-group');?></th>
		<td>
			<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("req-one-billing",$options)):?>
			<input type="checkbox" name="allinonewoo-group[req-one-billing]" value="1" <?php checked($options['req-one-billing'], 1)?>/>
		<?php else: $options['req-one-billing'] = false; ?>
			<input type="checkbox" name="allinonewoo-group[req-one-billing]" value="1" <?php checked($options['req-one-billing'], 1)?>/>
		<?php endif;?>
		</td>
		</tr>
		
	</tbody>
</table>

<div class="desc">
	<h2>Remove custom fields?</h2>
	<p>Want to remove above two custom fields? please select.</p>
</div>
<hr>
<table class="form-table">
	<tbody>
		<tr valign="top">
		<th scope="row"><?php _e('Remove new field in billing section', 'allinonewoo-group');?></th>
		<td>
			<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("remove-new-billing",$options)):?>
			<input type="checkbox" name="allinonewoo-group[remove-new-billing]" value="1" <?php checked($options['remove-new-billing'], 1)?>/>
		<?php else: $options['remove-new-billing'] = false; ?>
			<input type="checkbox" name="allinonewoo-group[remove-new-billing]" value="1" <?php checked($options['remove-new-billing'], 1)?>/>
		<?php endif;?>
		</td>
		</tr>
		
		<tr valign="top">
		<th scope="row"><?php _e('Remove new field in shipping section', 'allinonewoo-group');?></th>
		<td>
			<?php 
		$options = get_option( 'allinonewoo-group' );
		if (array_key_exists("remove-new-shipping",$options)):?>
			<input type="checkbox" name="allinonewoo-group[remove-new-shipping]" value="1" <?php checked($options['remove-new-shipping'], 1)?>/>
			<?php else: $options['remove-new-shipping'] = false; ?>
			<input type="checkbox" name="allinonewoo-group[remove-new-shipping]" value="1" <?php checked($options['remove-new-shipping'], 1)?>/>
		<?php endif;?>
		</td>
		</tr>
	</tbody>
</table>
-->
